##!/bin/sh
if [ ! -f "/var/www/wordpress/wp-config.php" ]; then
  cp /tmp/wp-config.php /var/www/wordpress/wp-config.php
  sleep 5;
  if ! mysqladmin -h $MARIADB_HOST -u $MARIADB_USER --password=$MARIADB_USER_PASSWORD --wait=10 ping > /dev/null; then
    echo "Mariadb is unreachable..."
    exit 1
  fi
  wp core install --url="$WP_URL" --title="$WP_TITLE" --admin_user="$WP_ADMIN_USER" --admin_password="$WP_ADMIN_PASSWORD" --admin_email="$WP_ADMIN_EMAIL" --skip-email --path=/var/www/wordpress
  wp user create $WP_USER $WP_USER_EMAIL --role=author --user_pass=$WP_USER_PWD --path=/var/www/wordpress
fi

php-fpm7 -F
