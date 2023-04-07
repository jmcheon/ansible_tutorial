#!/bin/sh

cat .install 2> /dev/null
if [ $? -ne 0 ]; then
	/usr/bin/mysqld_safe --datadir=/var/lib/mysql &
	sed -i "s/.*bind-address\s*=.*/bind-address=0.0.0.0\nport=3306/g" /etc/my.cnf.d/mariadb-server.cnf
	sed -i "s/skip-networking/# skip-networking/g" /etc/my.cnf.d/mariadb-server.cnf
	if ! mysqladmin --wait=5 ping; then
		echo "mariadb is unreachable..."
		exit 1
	fi
	eval "echo \"$(cat /tmp/conf.sql)\"" | mariadb
	pkill mariadb
	touch .install
fi
/usr/bin/mysqld_safe --datadir=/var/lib/mysql
