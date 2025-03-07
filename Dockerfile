FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD=1234 \
    MYSQL_DATABASE=prueba \
    LANG=C.UTF-8

EXPOSE 3306

CMD ["mysqld"]