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
            docker.image('mysql:5').withRun('-e "MYSQL_ROOT_PASSWORD=my-secret-pw" -p 3306:3306') { c ->
                    /* Wait until mysql service is up */
                    sh 'while ! mysqladmin ping -h0.0.0.0 --silent; do sleep 1; done'
                    /* Run some tests which require MySQL */
                    sh 'make check'
                }
            steps {
                sh 'composer --version'
                sh 'composer install'
            }
        }



    }
}