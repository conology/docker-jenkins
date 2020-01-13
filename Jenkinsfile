pipeline {
  agent {
    docker {
      label 'windows'
      image 'mcr.microsoft.com/powershell'
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
      steps{
        app = docker.build("my-image:${env.BUILD_ID}")
      }
    } 
  } 
}
