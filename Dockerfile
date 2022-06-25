FROM ubuntu

RUN apt-get update

# PHP
RUN apt-get install php php-xml php-pgsql -y

# Composer
RUN cd ~
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN HASH=`curl -sS https://composer.github.io/installer.sig`
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Docker-compose
RUN apt-get install docker-compose -y
