FROM ubuntu:16.04
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y apache2 php 
RUN rm /var/www/html/index.html
COPY index.php /var/www/html/
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
