node {
    def customImage
    stage ('Checkout'){
        checkout scm
    }
    stage ('Build'){
        customImage = docker.build("my-image:${env.BUILD_ID}")
    }
}
