node {
    def customImage
    stage ('Checkout'){
        checkout scm
    }
    stage ('Build'){
        /* 
        customImage = docker.build("my-image:${env.BUILD_ID}")
        */

        bat "wget --no-check-certificate https://downloads.wordpress.org/plugin/talentlms.zip"
        
        bat 'jar xf talentlms.zip'

        bat 'docker-compose up'
    }
}
