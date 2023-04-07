FROM alpine:3.15

RUN apk update && \
	apk add mariadb-client redis curl php7 php7-phar php7-curl php7-mysqli php7-fpm php7-iconv php7-json && \
	wget -O /usr/local/bin/dumb-init https://github.com/Yelp/dumb-init/releases/download/v1.2.5/dumb-init_1.2.5_x86_64 && \
	chmod +x /usr/local/bin/dumb-init && \ 
	mkdir -p /var/www/wordpress && \
	curl -s -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x /usr/local/bin/wp && \
	wp core download --path=/var/www/wordpress

COPY /conf/wp-config.php /tmp/wp-config.php
COPY /conf/www.conf /etc/php7/php-fpm.d/www.conf
COPY /tools/wp-conf.sh /tmp/wp-conf.sh

RUN chmod +x /tmp/wp-conf.sh

ENTRYPOINT ["/usr/local/bin/dumb-init", "--"]

CMD ["/bin/sh", "/tmp/wp-conf.sh"]
