node {
    def customImage
    stage ('Checkout'){
        checkout scm
    }
    stage ('Build'){
        
        sh 'echo Starting build of wordpress'
        customImage = docker.build("jhg_wordpress:${env.BUILD_ID}","./Wordpress")
    }
    stage ('Deploy') {
        
        sh 'echo Deploying Env'
        /*sh 'docker-compose up -d --build'*/
        sh 'docker-compose up -d --tlsverify --tlscacert ca.pem --tlscert cert.pem --tlskey key.pem --build'
        
    }
    stage ('Configure') {
        
        sh 'docker exec -it jenkins-docker docker exec -it jhg_wordpress wp plugin install yada-wiki'
        
    }
}
