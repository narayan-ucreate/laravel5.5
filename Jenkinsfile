pipeline {
    agent none
    environment {
        REDIS_HOST='app_redis_1:6379'
    }
    stages {
        stage('install php') {
            agent {
                docker { image 'php' }
            }
            steps {
                sh 'php --version'
            }
        }
        stage('install redis') {
            agent {
                docker { image 'redis:latest' }
            }
            steps {
                echo 'hi'
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