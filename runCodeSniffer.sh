#!/usr/bin/env bash

set -e
set -x

php vendor/bin/phpcbf --standard=./test/codesniffer.xml --encoding=utf-8 --extensions=php -p -s src
php vendor/bin/phpcs --standard=./test/codesniffer.xml --encoding=utf-8 --extensions=php -p -s src


php vendor/bin/phpcbf --standard=./test/codesniffer_tests.xml --encoding=utf-8 --extensions=php -p -s test
php vendor/bin/phpcs --standard=./test/codesniffer_tests.xml --encoding=utf-8 --extensions=php -p -s test