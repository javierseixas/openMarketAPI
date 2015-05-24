#!/bin/bash

: ${DB_USER:=openmarketuser}
: ${DB_PASSWORD:=openmarket}
: ${DB_NAME:=openmarket}
: ${DB_ENCODING:=UTF-8}

{ gosu postgres postgres --single -jE <<-EOSQL
    CREATE USER "$DB_USER" WITH PASSWORD '$DB_PASSWORD';
EOSQL
} && { gosu postgres postgres --single -jE <<-EOSQL
    CREATE DATABASE "$DB_NAME" WITH OWNER="$DB_USER" TEMPLATE=template0 ENCODING='$DB_ENCODING';
EOSQL
}