FROM ubuntu:16.04
RUN apt-get update && apt-get upgrade -y
RUN apt-get install apache2 php -y
RUN apt-get install libapache2-mod-php -y
RUN service apache2 restart
RUN rm /var/www/html/index.html
COPY index.php /var/www/html/
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
