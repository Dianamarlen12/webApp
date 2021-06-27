FROM ubuntu:20.04

LABEL description = "WEBAPP"
LABEL mainteiner = "Diana Meneses"
LABEL version = "0.1"

RUN apt update 

RUN apt install -y php-fpm
RUN apt install -y php-sqlite3
RUN apt install -y sqlite3