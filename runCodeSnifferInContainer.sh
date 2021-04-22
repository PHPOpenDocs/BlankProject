#!/usr/bin/env bash

set -e

docker-compose exec -T php_fpm sh -c "sh runCodeSniffer.sh"


docker-compose run -T php_fpm sh -c "sh runCodeSniffer.sh"