pipeline {
    agent any

    environment {
        DOCKER_PROJECT_NAME = "noi-maps"
        DOCKER_IMAGE = '755952719952.dkr.ecr.eu-west-1.amazonaws.com/noi-maps'
        DOCKER_TAG = "test-$BUILD_NUMBER"

        SERVER_PORT = "1005"
        WEBCOMPONENT = "https://cdn.webcomponents.opendatahub.testingmachine.eu/dist/9232cce6-2f39-11eb-adc1-0242ac120002/development-11-20210426T1032/noi_maps_widget.min.js"
    }

    stages {
        stage('Configure') {
            steps {
                sh """
                    rm -f .env
                    echo '' > .env
                    echo 'COMPOSE_PROJECT_NAME=${DOCKER_PROJECT_NAME}' >> .env
                    echo 'DOCKER_IMAGE=${DOCKER_IMAGE}' >> .env
                    echo 'DOCKER_TAG=${DOCKER_TAG}' >> .env

                    echo 'SERVER_PORT=${SERVER_PORT}' >> .env
                """
                sh "grep -rl 'cdn.webcomponents'|grep -v 'Jenkins'|xargs sed -i -e 's%https://cdn.webcomponents.*noi_maps_widget.min.js%${WEBCOMPONENT}%g'"
            }
        }
        stage('Build') {
            steps {
                sh '''
                    aws ecr get-login --region eu-west-1 --no-include-email | bash
                    docker-compose --no-ansi -f infrastructure/docker-compose.build.yml build --pull
                    docker-compose --no-ansi -f infrastructure/docker-compose.build.yml push
                '''
            }
        }
        stage('Deploy') {
            steps {
               sshagent(['jenkins-ssh-key']) {
                    sh """
                        (cd infrastructure/ansible && ansible-galaxy install -f -r requirements.yml)
                        (cd infrastructure/ansible && ansible-playbook --limit=test deploy.yml --extra-vars "release_name=${BUILD_NUMBER}")
                    """
                }
            }
        }
    }
}
