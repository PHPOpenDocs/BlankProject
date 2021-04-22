
set -e
set -x


ENV_TO_USE=${ENV_DESCRIPTION:=default}

echo "ENV_TO_USE is ${ENV_TO_USE}";

php composer.phar install

# php cli.php misc:wait_for_db

# php vendor/bin/phinx migrate -e internal

# php cli.php seed:initial

echo "Installer is finished, site should be available."