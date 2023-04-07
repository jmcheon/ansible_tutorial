FROM alpine:3.15

RUN apk update && apk add nginx openssl && \
	mkdir -p /etc/nginx/tls /run/nginx && \
	openssl req -newkey rsa:4096 -x509 -nodes -days 3650 \
	-out /etc/nginx/tls/cjung-mo.42.fr.crt \
	-keyout /etc/nginx/tls/cjung-mo.42.fr.key \
	-subj "/C=FR/ST=France/L=Paris/O=42Paris/OU=42/CN=cjung-mo.42.fr"

COPY /conf/nginx.conf /etc/nginx/http.d/default.conf

EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]
