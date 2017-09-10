docker run --name myproj \
 -v /home/rahul/codebase/junk/my-proj:/var/www/html \
 -p 9080:80 \
 -e MYSQL_HOST=172.17.0.4 \
 -e MYSQL_PORT=3306 \
 -d shukla2009/php



 docker run --name benchmark \
  -e MYSQL_HOST=172.17.0.4 \
  -e MYSQL_PORT=3306 \
  -d shukla2009/php-benchmark