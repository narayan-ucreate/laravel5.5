pipeline {
    agent any
    environment {
        REDIS_HOST='localhost'
        DB_CONNECTION='pgsql'
        DB_HOST='localhost'
        DB_PORT='5433'
        DB_DATABASE='test'
        DB_USERNAME='postgres'
        DB_PASSWORD='postgres'

    }
    stages {
        stage('install-php') {
            steps {
                sh 'docker-compose -f docker-compose.yml up install-php'
            }
        }
        stage('install-composer') {
            steps {
                sh 'docker-compose -f docker-compose.yml up install-composer'
                sh 'docker-compose exec install-composer composer install'
            }
        }
    }
}