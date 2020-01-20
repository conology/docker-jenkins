# docker-jenkins
Wordpress with Jenkins and Docker

# Install local development environment (Win)
1. open cmd under Windows
2. exectue 'install_dev_env.cmd'
3. approx 20 sek after the scrip has finished execute 'docker container logs jenkins-blueocean'
4. copy the token
5. open 'localhost:1000' and insert the token
6. install standard plugins
7. add admin account via dialog
8. jenkins url is 'http://localhost:1000/'
9. hit "Start using Jenkins"

# Create pipeline for the docker-jenkins project
10. klick "Open Blue Ocean" at the left bar
11. "Create a new pipeline"
12. "Github"
13. "Create an access token here."
14. Log in to github, give the token a name, hit enter, copy the token
15. insert the token in jenkins and hit "Connect"
16. choose "conoloy"
17. choose "docker-jenkins"
18. klick "create pipeline"

# Run local development environment (Win)
1. open cmd under Windows
2. exectue 'install_dev_env.cmd'

# Check the images created
1. 'docker exec -it jenkins-docker /bin/sh
2. 'docker images'
