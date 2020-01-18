FROM wordpress

# Set environment variables used by the Wordpress image
# DB_USER and DB_PASSWORD are included as an example. However,
# these should be removed and set during docker run.

ENV WORDPRESS_DB_HOST: db:3306
ENV WORDPRESS_DB_USER: wordpress
ENV WORDPRESS_DB_PASSWORD: wordpress

# add wp-cli to the image
ADD https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar /usr/local/bin
RUN chmod 775 /usr/local/bin/wp-cli.phar
RUN mv /usr/local/bin/wp-cli.phar /bin/wp
