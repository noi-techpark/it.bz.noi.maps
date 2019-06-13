pipeline {
    agent any

    environment {
        AWS_ACCESS_KEY_ID = credentials('AWS_ACCESS_KEY_ID')
        AWS_SECRET_ACCESS_KEY = credentials('AWS_SECRET_ACCESS_KEY')
        DOCKER_IMAGE_APP = "755952719952.dkr.ecr.eu-west-1.amazonaws.com/noi-maps"
        DOCKER_TAG_APP = "$BUILD_NUMBER"
        DOCKER_SERVICES = "app"
    }

    stages {
        stage('Configure') {
            steps {
                sh "echo '' > .env"
                sh "echo 'DOCKER_IMAGE_APP=${DOCKER_IMAGE_APP}' >> .env"
                sh "echo 'DOCKER_TAG_APP=${DOCKER_TAG_APP}' >> .env"
            }
        }
        stage('Build & Push') {
            steps {
                sh "aws ecr get-login --region eu-west-1 --no-include-email | bash"
                sh "docker-compose -f docker-compose.yml -f docker-compose.build.yml build ${DOCKER_SERVICES}"
                sh "docker-compose -f docker-compose.yml -f docker-compose.build.yml push ${DOCKER_SERVICES}"
            }
        }
    }
    post { 
        always { 
            sh 'docker-compose -f docker-compose.yml -f docker-compose.build.yml down || true'
        }
    }
}
