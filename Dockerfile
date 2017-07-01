FROM nimmis/apache-php5:latest

MAINTAINER Mathias Åkerberg <zegoffinator@gmail.com>

#Create a new directory to run our app.
RUN mkdir -p /var/www/app && \
a2enmod rewrite

# Update the PHP.ini file, enable <? ?> tags and quieten logging.
RUN sed -i "s/short_open_tag = Off/short_open_tag = On/" /etc/php5/cli/php.ini
RUN sed -i "s/error_reporting = .*$/error_reporting = E_ERROR | E_WARNING | E_PARSE/" /etc/php5/cli/php.ini

#Set the new directory as our working directory
WORKDIR /var/www/app

#Copy all the content to the working directory
COPY . /var/www/app

#Override the Apache Config
COPY ./config/000-default.conf /etc/apache2/sites-available/000-default.conf

#Allow directory permission
RUN chmod -R 777 /var/www/app && \
chmod -R 777 /var/log/apache2

EXPOSE 8000

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
