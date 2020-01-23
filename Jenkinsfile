node {
    
    def customImage
    
    environment {
        DOCKER_CERT_PATH = '/certs/client/xxx'
        DOCKER_TLS_VERIFY = 1
    }
    
    /*stage ('Checkout'){
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
        sleep 20
        sh 'docker exec -i JHG_wordpress sh -c "wp core install --url=http://localhost:8080 --title=Example --admin_user=supervisor --admin_password=strongpassword --admin_email=info@example.com --allow-root"'

        sh 'docker exec -i JHG_wordpress sh -c "wp plugin install talentlms --allow-root --activate"'
        sh 'docker exec -i JHG_wordpress sh -c "wp plugin install yada-wiki --allow-root --activate"'

    }*/
    stage('create images') {
        // here we need to save the running & configured containers to images
        sh 'docker commit docker commit JHG_wordpress jhg_wordpress_cloud'
    }
    stage('upload to ECR') {
        //login with user
        sh 'aws configure'
        sh 'eu-central-1'
        sh 'json'
        
        //create the AWS repository
        sh 'aws ecr create-repository --repository-name test-repo'
        //tag the docker image 
        sh 'docker tag JHG_wordpress_Cloud 586513809140.dkr.ecr.eu-central-1.amazonaws.com/test-repo'
        //get the token from AWS
        sh 'aws ecr get-login --no-include-email --region eu-central-1 | bash'
        //push the image 
        sh 'docker push 586513809140.dkr.ecr.eu-central-1.amazonaws.com/test-repo'
    }
    stage('deploy AWS') {
        // here we push the freshly created images to AWS and execute them
        
        // ECS stuff in here!
    }
}
