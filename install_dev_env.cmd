docker pull jenkinsci/blueocean
docker pull docker:dind

docker network create jenkins

docker volume create jenkins-docker-certs
docker volume create jenkins-data

(
echo FROM docker:dind
echo USER root
echo RUN apk update
echo RUN apk add python python-dev py-pip build-base libffi-dev openssl-dev gcc libc-dev make
echo RUN pip install docker-compose
) > temp.Dockerfile

docker build - < temp.Dockerfile -t jhg_dind

del temp.Dockerfile

docker container run --name jenkins-docker --rm --detach ^
  --privileged --network jenkins --network-alias docker ^
  --env DOCKER_TLS_CERTDIR=/certs ^
  --volume jenkins-docker-certs:/certs/client ^
  --volume jenkins-data:/var/jenkins_home ^
  jhg_dind
  
docker container run --name jenkins-blueocean --rm --detach ^
  --network jenkins --env DOCKER_HOST=tcp://docker:2376 ^
  --env DOCKER_CERT_PATH=/certs/client --env DOCKER_TLS_VERIFY=1 ^
  --volume jenkins-data:/var/jenkins_home ^
  --volume jenkins-docker-certs:/certs/client:ro ^
  --publish 1000:8080 --publish 50000:50000 jenkinsci/blueocean
