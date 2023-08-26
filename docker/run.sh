rm -f phpBB/config.php
touch phpBB/config.php && chmod 0777 phpBB/config.php
docker stop integrabb
docker run --name integrabb -d --rm -e LOG_STDOUT=1 -e LOG_STDERR=1 -e LOG_LEVEL=debug -p 80:80 -v $PWD/phpBB:/var/www/html -v $PWD/docker/init.sql:/docker-entrypoint-initdb.d/init.sql:ro fauria/lamp && docker exec integrabb bash -c "until mysqladmin --user=root --password= --host 127.0.0.1 ping --silent &> /dev/null ; do sleep 2; done ; cat /docker-entrypoint-initdb.d/init.sql | mysql -u root"
