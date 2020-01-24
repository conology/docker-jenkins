node {
    
    def customImage
    def NUM_DOCKER_IMAGES = sh(script:"docker info | grep Images | sed 's/[^0-9]*//g'", returnStdout: true).trim()

    environment {
        DOCKER_CERT_PATH = '/certs/client/xxx'
        DOCKER_TLS_VERIFY = 1
    }
    
    stage ('Checkout'){
        when (NUM_DOCKER_IMAGES == "0") {
            checkout scm
        }
    }
    stage ('Build'){
        when (NUM_DOCKER_IMAGES == "0") {
            sh 'echo Starting build of wordpress'
            customImage = docker.build("jhg_wordpress:${env.BUILD_ID}","./Wordpress")
        }
    }
    stage ('Deploy') {
        when (NUM_DOCKER_IMAGES == "0") {
            sh 'echo Deploying Env'
            sh 'docker-compose up -d --build'
        }
    }
    stage ('Configure') {
        when (NUM_DOCKER_IMAGES == "0") {
            sleep 20
            sh 'docker exec -i JHG_wordpress sh -c "wp core install --url=http://localhost:8080 --title=Example --admin_user=supervisor --admin_password=strongpassword --admin_email=info@example.com --allow-root"'

            sh 'docker exec -i JHG_wordpress sh -c "wp plugin install talentlms --allow-root --activate"'
            sh 'docker exec -i JHG_wordpress sh -c "wp plugin install yada-wiki --allow-root --activate"'
        }
    }
    stage('create images') {
        when (NUM_DOCKER_IMAGES == "0") {
            // here we need to save the running & configured containers to images
            sh 'docker commit JHG_wordpress jhg_wordpress_cloud'
        }
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
