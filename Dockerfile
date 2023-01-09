FROM amazonlinux:2

RUN yum update
RUN yum install -y httpd
RUN yum install -y php
RUN yum install -y php-mysqli

RUN rm /etc/httpd/conf/httpd.conf
RUN rm /etc/php.ini

ADD httpd.conf /etc/httpd/conf
ADD php.ini /etc

RUN mkdir /var/www/html/css
RUN mkdir /var/www/html/lib
RUN mkdir /var/www/html/contents

ADD healthcheck.html /var/www/html/contents
ADD index.html /var/www/html
ADD sf.php /var/www/html
ADD select.php /var/www/html/lib
ADD style.css /var/www/html/css
ADD index.css /var/www/html/css

EXPOSE 80

CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]