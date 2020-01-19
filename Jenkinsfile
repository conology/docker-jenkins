node {
    def customImage
    stage ('Checkout'){
        checkout scm
    }
    stage ('Build'){
        
        sh 'echo Starting build of wordpress'
        customImage = docker.build("JHG_wordpress:${env.BUILD_ID}","./Wordpress")
    }
    stage ('Deploy') {
        
        sh 'echo Deploying Env'
        sh 'docker-compose up -d --build'
        
    }
    stage ('Configure') {
        
        sh 'docker exec -it jenkins-docker docker exec -it JHG_wordpress wp plugin install yada-wiki'
        
    }
}
