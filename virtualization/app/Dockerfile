FROM ubuntu:latest
ADD . /code
RUN apt-get update && apt-get install -y \
 php5 \
 php5-pgsql \
 php5-json \
 php5-intl \
 php5-xdebug

EXPOSE 8000
ENTRYPOINT ["/code/app/console"]
