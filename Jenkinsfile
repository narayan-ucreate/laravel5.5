pipeline {
    agent any
    environment {
        REDIS_HOST='localhost'
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
                sh 'docker run --name project_postgres -e POSTGRES_PASSWORD=secret -e POSTGRES_USER=postgres -p 5432:5432 -d postgres'
            }
        }
    }
}