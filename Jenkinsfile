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
                sh "docker-composer build"
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
             sh 'php --version'
                sh 'composer --version'
                sh 'composer install'
            }
        }
        stage('install postgress') {
            agent {
                docker {
                    image 'postgres:10.3-alpine'
                    args '-v $HOME/.m2:/root/.m2'
                 }
            }
            steps {
                echo 'success';
            }
        }
    }
}