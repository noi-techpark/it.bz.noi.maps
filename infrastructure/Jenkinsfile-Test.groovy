pipeline {
    agent any

    environment {
        AWS_ACCESS_KEY_ID = credentials('AWS_ACCESS_KEY_ID')
        AWS_SECRET_ACCESS_KEY = credentials('AWS_SECRET_ACCESS_KEY')
        // FIXME: This is a workaround to solve a bug in the CDN which does not give the real latest version, if it does not follow semver schemes
        WEBCOMPONENT = "https://cdn.webcomponents.opendatahub.testingmachine.eu/dist/9232cce6-2f39-11eb-adc1-0242ac120002/development-16-20210712T1509/noi_maps_widget.min.js"
    }

    stages {
        stage('Configure') {
            steps {
                sh "grep -rl 'cdn.webcomponents'|grep -v 'Jenkins'|xargs sed -i -e 's%https://cdn.webcomponents.*noi_maps_widget.min.js%${WEBCOMPONENT}%g'"
            }
        }
        stage('Upload') {
            steps {
                s3Upload(bucket: 'it.bz.noi.maps.test', acl: 'PublicRead', file: './')
            }
        }
    }
}
