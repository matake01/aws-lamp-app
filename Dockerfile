FROM nimmis/apache-php5

MAINTAINER SemaphoreCI <dev@example.com>

#Create a new directory to run our app.
RUN mkdir -p /var/www/public

#Set the new directory as our working directory
WORKDIR /var/www/public

#Copy all the content to the working directory
COPY ./src /var/www/public

#Override the Apache Config
COPY ./config/000-default.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
EXPOSE 443

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
