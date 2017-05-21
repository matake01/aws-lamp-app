FROM nimmis/apache-php5

MAINTAINER Mathias Åkerberg <zegoffinator@gmail.com>

#Create a new directory to run our app.
RUN mkdir -p /var/www/app && \
a2enmod rewrite

#Set the new directory as our working directory
WORKDIR /var/www/app

#Copy all the content to the working directory
COPY . /var/www/app

#Override the Apache Config
COPY ./config/000-default.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
EXPOSE 443

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
