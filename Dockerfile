FROM ubuntu

ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update

# PHP
RUN apt-get install php php-xml php-pgsql -y

# Composer
RUN apt-get install composer -y

# Docker-compose
RUN apt-get install docker-compose -y
