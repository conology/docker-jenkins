docker pull jenkinsci/blueocean
docker pull docker:dind

docker network create jenkins

docker volume create jenkins-docker-certs
docker volume create jenkins-data

docker container run --name jenkins-docker --rm --detach ^
  --privileged --network jenkins --network-alias docker ^
  --env DOCKER_TLS_CERTDIR=/certs ^
  --volume jenkins-docker-certs:/certs/client ^
  --volume jenkins-data:/var/jenkins_home ^
  docker:dind
  
docker container run --name jenkins-blueocean --rm --detach ^
  --network jenkins --env DOCKER_HOST=tcp://docker:2376 ^
  --env DOCKER_CERT_PATH=/certs/client --env DOCKER_TLS_VERIFY=1 ^
  --volume jenkins-data:/var/jenkins_home ^
  --volume jenkins-docker-certs:/certs/client:ro ^
  --publish 1000:8080 --publish 50000:50000 jenkinsci/blueocean
  
# install docker-compose
docker exec -u root -it jenkins-blueocean curl -L --fail https://github.com/docker/compose/releases/download/1.25.0/run.sh -o /usr/local/bin/docker-compose
docker exec -u root -it jenkins-blueocean chmod 775 /usr/local/bin/docker-compose
