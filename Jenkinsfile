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
        checkout scm
    }
    stage('Build image') {
        app = docker.build("my-image:${env.BUILD_ID}")
    } 
  } 
}
