pipeline {
    agent any

    environment {
        AWS_ACCESS_KEY_ID = credentials('AWS_ACCESS_KEY_ID')
        AWS_SECRET_ACCESS_KEY = credentials('AWS_SECRET_ACCESS_KEY')
        DOCKER_IMAGE_APP = "755952719952.dkr.ecr.eu-west-1.amazonaws.com/noi-maps"
        DOCKER_TAG_APP = "test-$BUILD_NUMBER"
        DOCKER_SERVICES = "app"
        DOCKER_SERVER_IP = "63.33.73.203"
        DOCKER_SERVER_DIRECTORY = "/var/docker/noi-maps"
        DOCKER_SERVER_PROJECT = "noi-maps"
    }

    stages {
        stage('Configure') {
            steps {
                sh "echo '' > .env"
                sh "echo 'DOCKER_IMAGE_APP=${DOCKER_IMAGE_APP}' >> .env"
                sh "echo 'DOCKER_TAG_APP=${DOCKER_TAG_APP}' >> .env"
                //sh '''sed -i -e "s%\\('sheet_url'\\ =>\\ \\).*\\$%\\1'https://docs.google.com/spreadsheets/d/e/2PACX-1vQA-8MjYhZBkN5ZIv_IPS2cUMvVTmoG0zCoSZMFLT8b_vo9qBfRO4lNwI33D8Z9xeF7gz7eZxE7_f74/pub?gid=0\\&output=tsv\\&range=A1:Z\\&single=true'%g" config.php'''
                //sh '''sed -i -e "s%\\(\\$buildings_summary_sheet_url\\ =\\ \\).*\\$%\\1'https://docs.google.com/spreadsheets/d/e/2PACX-1vQA-8MjYhZBkN5ZIv_IPS2cUMvVTmoG0zCoSZMFLT8b_vo9qBfRO4lNwI33D8Z9xeF7gz7eZxE7_f74/pub?gid=322609536\\&output=tsv\\&single=true\\&range=A1:Z99'\\.rand(1,1000);%g" config.php'''
            }
        }
        stage('Build & Push') {
            steps {
                sh "aws ecr get-login --region eu-west-1 --no-include-email | bash"
                sh "docker-compose -f docker-compose.yml -f docker-compose.build.yml build ${DOCKER_SERVICES}"
                sh "docker-compose -f docker-compose.yml -f docker-compose.build.yml push ${DOCKER_SERVICES}"
            }
        }
        stage('Deploy') {
            steps {
                sshagent(['jenkins-ssh-key']) {
                    sh """ssh -o StrictHostKeyChecking=no ${DOCKER_SERVER_IP} 'AWS_ACCESS_KEY_ID="${AWS_ACCESS_KEY_ID}" AWS_SECRET_ACCESS_KEY="${AWS_SECRET_ACCESS_KEY}" bash -c "aws ecr get-login --region eu-west-1 --no-include-email | bash"'"""

                    sh "ssh -o StrictHostKeyChecking=no ${DOCKER_SERVER_IP} 'ls -1t ${DOCKER_SERVER_DIRECTORY}/releases/ | tail -n +10 | grep -v `readlink -f ${DOCKER_SERVER_DIRECTORY}/current | xargs basename --` -- | xargs -r printf \"${DOCKER_SERVER_DIRECTORY}/releases/%s\\n\" | xargs -r rm -rf --'"
                
                    sh "ssh -o StrictHostKeyChecking=no ${DOCKER_SERVER_IP} 'mkdir -p ${DOCKER_SERVER_DIRECTORY}/releases/${BUILD_NUMBER}'"
                    sh "pv docker-compose.run.yml | ssh -o StrictHostKeyChecking=no ${DOCKER_SERVER_IP} 'tee ${DOCKER_SERVER_DIRECTORY}/releases/${BUILD_NUMBER}/docker-compose.yml'"
                    sh "pv .env | ssh -o StrictHostKeyChecking=no ${DOCKER_SERVER_IP} 'tee ${DOCKER_SERVER_DIRECTORY}/releases/${BUILD_NUMBER}/.env'"
                    sh "ssh -o StrictHostKeyChecking=no ${DOCKER_SERVER_IP} 'cd ${DOCKER_SERVER_DIRECTORY}/releases/${BUILD_NUMBER} && docker-compose --project-name=${DOCKER_SERVER_PROJECT} pull'"

                    sh "ssh -o StrictHostKeyChecking=no ${DOCKER_SERVER_IP} '[ -d \"${DOCKER_SERVER_DIRECTORY}/current\" ] && (cd ${DOCKER_SERVER_DIRECTORY}/current && docker-compose --project-name=${DOCKER_SERVER_PROJECT} down) || true'"
                    sh "ssh -o StrictHostKeyChecking=no ${DOCKER_SERVER_IP} 'ln -sfn ${DOCKER_SERVER_DIRECTORY}/releases/${BUILD_NUMBER} ${DOCKER_SERVER_DIRECTORY}/current'"
                    sh "ssh -o StrictHostKeyChecking=no ${DOCKER_SERVER_IP} 'cd ${DOCKER_SERVER_DIRECTORY}/current && docker-compose --project-name=${DOCKER_SERVER_PROJECT} up --detach'"
                }
            }
	    }
    }
}
