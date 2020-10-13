# MEgen Dockerfile

FROM php:7.4-apache
LABEL maintainer="Łukasz Szeremeta <l.szeremeta.dev+megen@gmail.com>"

# Update server config
RUN ln -sf /proc/self/fd/1 /var/log/apache2/access.log \
  && ln -sf /proc/self/fd/1 /var/log/apache2/error.log \
  && sed -i -e "1 i ServerName localhost" /etc/apache2/apache2.conf \
  && sed -i 's/ServerTokens\ OS/ServerTokens \Prod/g' /etc/apache2/conf-enabled/security.conf \
  && sed -i 's/ServerSignature\ On/ServerSignature \Off/g' /etc/apache2/conf-enabled/security.conf

WORKDIR /var/www/html/

# Add MEgen (see .dockerignore)
COPY . .