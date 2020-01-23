node {
    
    def customImage
    
    environment {
        ACCESS_KEY = credentials("ACCESS_KEY")
        SECRET_ACCESS_KEY = credentials("SECRET_ACCESS_KEY")
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
        sh 'docker commit JHG_wordpress jhg_wordpress_cloud'
    }
    stage('upload to ECR') {
        //login with user
        //sh 'aws configure'
        //sh 'eu-central-1'
        //sh 'json'
        
        //one time job
        // create a jenkins-secret encrypted version of ~./aws
        // store that version in the repo under /credentials
        
        //every time
        // load these credentials and store them in the jenkins-blueocean image to have aws preconfigured
        
        //create the AWS repository
       // sh 'aws ecr create-repository --repository-name test-repo'
        //tag the docker images 
        sh 'docker tag jhg_wordpress_cloud 586513809140.dkr.ecr.eu-central-1.amazonaws.com/automation'
        sh 'docker tag mysql:5.7 586513809140.dkr.ecr.eu-central-1.amazonaws.com/automation'
        //get the token from AWS
        sh 'aws ecr get-login --no-include-email --region eu-central-1 | bash'
        //push the image 
        sh 'docker push 586513809140.dkr.ecr.eu-central-1.amazonaws.com/automation'
    }
    stage('deploy AWS') {
        // here we push the freshly created images to AWS and execute them
        
        // ECS stuff in here!
    }
}
