node {
    def customImage
    stage ('Checkout'){
        checkout scm
    }
    stage ('Build'){
        
        customImage = docker.build("firsttest:${env.BUILD_ID}","./Wordpress")
        
        
        
    }
}
