node {
    def customImage
    stage ('Checkout'){
        checkout scm
    }
    stage ('Build'){
        customImage = docker.build("my-image:${env.BUILD_ID}")
    }
    stage('Test') {
		customImage.inside {
			sh 'npm test'
		}
	}
}
