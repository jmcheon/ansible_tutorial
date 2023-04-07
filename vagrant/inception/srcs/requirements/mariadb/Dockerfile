FROM alpine:3.15

RUN apk update && apk add mariadb mariadb-client && \
	wget -O /usr/local/bin/dumb-init https://github.com/Yelp/dumb-init/releases/download/v1.2.5/dumb-init_1.2.5_x86_64 && \
	chmod +x /usr/local/bin/dumb-init && \
	mkdir -p /run/mysqld /var/lib/mysql && \
	mariadb-install-db --datadir=/var/lib/mysql --auth-root-authentication-method=normal && \
	chown -R mysql:mysql /run/mysqld /var/lib/mysql

COPY conf/conf.sql /tmp/conf.sql

COPY tools/conf.sh /tmp/conf.sh
RUN chmod +x /tmp/conf.sh

ENTRYPOINT ["/usr/local/bin/dumb-init", "--"]

CMD ["sh", "-c", "/tmp/conf.sh"]
