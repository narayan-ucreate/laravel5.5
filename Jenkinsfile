pipeline {
    agent { docker {
                       image 'php'
                       args 'sudo '
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