node {
    
    def customImage
    
    environment {
        DOCKER_CERT_PATH = '/certs/client/xxx'
        DOCKER_TLS_VERIFY = 1
    }
    
    stage ('Checkout'){
        checkout scm
    }
    stage ('Build'){
        
        sh 'echo Starting build of wordpress'
        customImage = docker.build("jhg_wordpress:${env.BUILD_ID}","./Wordpress")
    }
    stage ('Deploy') {
        
        sh 'echo Deploying Env'
        sh 'docker-compose up -d --build'    
    }
    
    stage ('Configure') {
        sh 'docker container ls'
        //sh 'docker exec -i JHG_wordpress wp core version --allow-root'
        //sleep 30
        //sh 'docker exec -i JHG_wordpress wp core install --url=http://localhost:8080/var/www/wordpress/ --title=Example --admin_user=supervisor --admin_password=strongpassword --admin_email=info@example.com --allow-root'
        //sh 'docker exec -i JHG_wordpress wp plugin list --allow-root'
        //sh 'docker exec -i JHG_wordpress wp plugin install talentlms --allow-root --activate'
        //sh 'docker exec -i JHG_wordpress wp plugin install yada-wiki --allow-root --activate'
        //sh 'docker exec -i JHG_wordpress wp plugin activate yada-wiki --allow-root'
    }
}
