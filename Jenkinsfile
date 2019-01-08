pipeline {
    agent none
    stages {
        stage('install php') {
            agent {
                docker { image 'php' }
            }
            steps {
                sh 'php --version'
            }
        }
        stage('install composer') {
            agent {
                docker { image 'composer' }
            }
            steps {
                sh 'composer --version'
                sh 'composer install'
            }
        }
    }
}