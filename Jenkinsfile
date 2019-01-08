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
                sh 'docker-compose start install-php'
            }
        }
    }
}