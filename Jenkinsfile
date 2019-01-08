pipeline {
    agent any
    environment {
        REDIS_HOST='localhost'
        DB_CONNECTION='pgsql'
        DB_HOST='localhost'
        DB_PORT='5432'
        DB_DATABASE='postgres'
        DB_USERNAME='postgres'
        DB_PASSWORD='secret'
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
                echo 'success'
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
        stage('install postgress') {
            steps {
                sh 'docker pull postgres'
                sh 'php artisan migrate'
            }
        }
    }
}