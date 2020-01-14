node {
    stage 'Checkout'
        checkout scm
    stage 'Build & UnitTest'
        sh "docker build -t my-image:${env.BUILD_ID} ."
}
