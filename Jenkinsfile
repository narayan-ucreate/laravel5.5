pipeline {
    agent { docker 'circleci/php:7.2.2' }
    stages {
        stage('build') {
            steps {
                sh 'php --version'
                sh 'composer install'
            }
        }
    }
}