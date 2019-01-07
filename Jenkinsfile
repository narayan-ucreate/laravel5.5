pipeline {
    agent { docker {
                       image 'php'
                       args '-u root:root'
                   }
           }
    stages {
        stage('build') {
            steps {
                sh 'php --version'
            }
        }
    }
}