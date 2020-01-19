node {
    def customImage
    
    environment {
        DOCKER_CERT_PATH = '/certs/client/xxx'
        DOCKER_TLS_VERIFY = 1
    }
    
    stage ('Checkout'){
        checkout scm
    }
    /*stage ('Build'){
        
        sh 'echo Starting build of wordpress'
        customImage = docker.build("jhg_wordpress:${env.BUILD_ID}","./Wordpress")
    }*/
    stage ('Deploy') {
        
        sh 'echo Deploying Env'
        /*sh 'docker-compose up -d --build
        sh 'docker-compose up -d --tlsverify --tlscacert ca.pem --tlscert cert.pem --tlskey key.pem --build' */
        
        // copy git files to the build slave & execute docker compose
        sh 'docker ps'
        sh 'docker images'
        sh 'ls -l'
        sh 'set'
        //sh 'docker-compose'
       /* sh 'docker-compose up'
        sh 'docker-compose up -d'
        sh 'docker-compose up -d --build'*/
       // sh 'docker cp ./. jenkins-docker:usr'
       sh 'docker exec -it jenkins-docker sh /usr/docker-compose up -d --build'
        
        
    }
    stage ('Configure') {
        
        sh 'docker exec -it jenkins-docker docker exec -it jhg_wordpress wp plugin install yada-wiki'
        
    }
}
