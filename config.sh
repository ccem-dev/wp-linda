#!/bin/bash
printf "\nNAME DB: "
read nameDB
if [ -z $nameDB ]; then
    nameDB='exampledb'
fi
printf "$nameDB confirmed!"
printf "\nUSER DB: "
read userDB
if [ -z $userDB ]; then
    userDB='exampleuser'
fi
printf "$userDB confirmed!"
printf "\nPASS DB: "
read passDB
if [ -z $passDB ]; then
    passDB='examplepass'
fi
printf "$passDB confirmed!\n"

echo -n > ./.env
echo "WORDPRESS_DB_HOST=db" >> ./.env
echo "WORDPRESS_DB_PASSWORD=$passDB" >> ./.env
echo "WORDPRESS_DB_USER=$userDB" >> ./.env
echo "WORDPRESS_DB_NAME=$nameDB" >> ./.env
echo "MYSQL_PASSWORD=$passDB" >> ./.env
echo "MYSQL_USER=$userDB" >> ./.env
echo "MYSQL_DATABASE=$nameDB" >> ./.env
echo "MYSQL_RANDOM_ROOT_PASSWORD='1'" >> ./.env
echo "PMA_HOST=db" >> ./.env
echo "PMA_PORT=3306" >> ./.env

sudo docker-compose up -d
sudo docker ps


