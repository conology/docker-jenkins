pipeline {
  agent {
    docker {
      label 'linux'
      image 'python'
    }
  }
  stages {
    stage('Clone repository') {
        /* Let's make sure we have the repository cloned to our workspace */
      steps{
        checkout scm
      }
    }
    stage('Build image') {
      script{
        app = docker.build("my-image:${env.BUILD_ID}")
      }
    } 
  } 
}
