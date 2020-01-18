FROM wordpress

# Set environment variables used by the Wordpress image
# DB_USER and DB_PASSWORD are included as an example. However,
# these should be removed and set during docker run.

ADD ./multipurpose-ecommerce /usr/src/wordpress/wp-content/themes/multipurpose-ecommerce

ADD ./elementor /usr/src/wordpress/wp-content/plugins/elementor
ADD ./talentlms /usr/src/wordpress/wp-content/plugins/talentlms
