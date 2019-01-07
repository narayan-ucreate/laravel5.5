pipeline {
    agent any
    stages {
        stage('Composer Install') {
            steps {
             sh 'curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer'
            }
        }
    }
}