FROM ubuntu:trusty
MAINTAINER Fernando Mayo <fernando@tutum.co>

# Install base packages & PHP
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get -yq install \
        curl \
        apache2 \
        libapache2-mod-php5 \
        php5-mysql \
        php5-mcrypt \
        php5-gd \
        php5-curl \
        php-pear \
        php-apc && \
    rm -rf /var/lib/apt/lists/* && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
    
RUN /usr/sbin/php5enmod mcrypt

#install nano
RUN apt-get update
RUN apt-get install nano

# we use the '&&' operator so that the second command can be executed only if the first one has worked out
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    sed -i "s/variables_order.*/variables_order = \"EGPCS\"/g" /etc/php5/apache2/php.ini

# define a environment variable
ENV ALLOW_OVERRIDE **False**

# Add image configuration and scripts
# the 'run.sh' script will be available at the root of the container 
ADD run.sh /run.sh
RUN chmod 755 /run.sh
RUN chown root:root /run.sh

#config Vhost Apache
RUN rm /etc/apache2/sites-available/000-default.conf
ADD apache2/000-default.conf /etc/apache2/sites-available

#install the web site
#RUN mkdir /var/www/jerome
#ADD site/index.php /var/www/jerome

#create a web site directory
RUN mkdir /var/www/site

# expose the port 80
EXPOSE 80

WORKDIR /var/www
CMD ["/run.sh"]

