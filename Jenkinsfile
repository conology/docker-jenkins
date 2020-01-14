node {
    stage 'Checkout'
        checkout scm
    stage 'Build & UnitTest'
        sh "docker build -t accountownerapp:B${BUILD_NUMBER} -f ."
}
