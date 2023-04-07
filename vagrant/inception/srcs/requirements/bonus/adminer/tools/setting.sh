#/bin/sh
if [ ! -f "/var/www/wordpress/adminer/index.php" ]; then
  echo "creating adminer file..."
  mkdir -p /var/www/wordpress/adminer
  curl -o /var/www/wordpress/adminer/index.php -sL https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-mysql-en.php
fi

php-fpm7 -F
