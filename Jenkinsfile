pipeline {
    agent { docker 'php' }
    stages {
        stage('build') {
            agent {
                docker { image 'composer' }
            }
            steps {
                sh 'php --version'
                sh 'composer install'
            }
        }
    }
}