node {
    stage 'Checkout'
        checkout scm
    stage 'Build & UnitTest'
        def customImage = docker.build("my-image:${env.BUILD_ID}")
}
