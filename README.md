# docker-jenkins
Wordpress with Jenkins and Docker

# Install local development environment (Win)
1. open cmd under Windows
2. exectue 'install_dev_env.cmd'
3. approx 20 sek after the scrip has finished execute 'docker container logs jenkins-blueocean'
4. copy the token
5. open 'localhost:1000' and finsih the jenkins setup; jenkins reboots afterwards
6. login to jenkins on localhost:1000
7. install standard plugins
8. create the first pipeline unsing github with conology organization

# Run local development environment (Win)
1. open cmd under Windows
2. exectue 'install_dev_env.cmd'

# Check the images created
1. 'docker exec -it jenkins-docker /bin/sh
2. 'docker images'
