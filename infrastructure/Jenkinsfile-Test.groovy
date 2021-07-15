pipeline {
    agent any

    environment {
        AWS_ACCESS_KEY_ID = credentials('AWS_ACCESS_KEY_ID')
        AWS_SECRET_ACCESS_KEY = credentials('AWS_SECRET_ACCESS_KEY')
    }

    stages {
        stage('Upload') {
            steps {
                s3Upload(bucket: 'it.bz.noi.maps.test', acl: 'PublicRead', file: './',excludePathPattern:'^\\.')
            }
        }
    }
}
