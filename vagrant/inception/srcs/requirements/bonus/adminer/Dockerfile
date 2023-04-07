FROM alpine:3.15

RUN apk update && apk add curl php7 php7-fpm php7-mysqli php7-session && \
	wget -O /usr/local/bin/dumb-init https://github.com/Yelp/dumb-init/releases/download/v1.2.5/dumb-init_1.2.5_x86_64 && \
	chmod +x /usr/local/bin/dumb-init

COPY /tools/setting.sh /tmp/setting.sh
COPY /conf/www.conf /etc/php7/php-fpm.d/www.conf

RUN chmod +x /tmp/setting.sh

ENTRYPOINT ["/usr/local/bin/dumb-init", "--"]

CMD ["/bin/sh", "/tmp/setting.sh"]
