pipeline {
    agent any

    stages {
        stage('Test & Build') {
            steps {
                sh "docker-compose -f docker-compose.yml -f docker-compose.build.yml build"
            }
        }
    }
    post { 
        always { 
            sh 'docker-compose -f docker-compose.yml -f docker-compose.build.yml down || true'
        }
    }
}
