1:- Install Dependencies 

sudo apt update 

sudo apt install apache2 \ mysql-server \ php \ php-mysql

2:- Install WordPress 

sudo mkdir -p /srv/www 

sudo chown www-data:www-data /srv/www 

sudo curl https://wordpress.org/latest.tar.gz 

sudo chown -R www-data:www-data wordpress 

sudo tar zx -C wordpress

3:- Configure Apache for WordPress 

vim /etc/apache2/sites-available/wordpress.conf 

<VirtualHost *:80>

    DocumentRoot /srv/www/wordpress

    <Directory /srv/www/wordpress>

        Options FollowSymLinks

        AllowOverride Limit Options FileInfo

        DirectoryIndex index.php

        Require all granted

    </Directory>

    <Directory /srv/www/wordpress/wp-content>

        Options FollowSymLinks

        Require all granted

    </Directory>

</VirtualHost>

Options FollowSymLinks Require all granted 

sudo a2ensite wordpress 

sudo a2enmod rewrite 

sudo a2dissite 000-default 

sudo service apache2 reload

5:- Configure database 

sudo mysql 

CREATE USER 'wordpress_usr'@'localhost' IDENTIFIED BY 'password'; 

CREATE DATABASE wordpress_db; GRANT ALL ON wordpress_db.* TO 'wordpress_usr'@'localhost'; 

exit

4:- Configure WordPress to connect to the database

sudo cp -i /srv/www/wordpress/wp-config-sample.php /srv/www/wordpress/wp-config.php 

sudo vim /srv/www/wordpress/wp-config.php 

Find this according to your's mysql create wordpress user and database in wp-config.php file 

define( 'DB_NAME', 'wordpress_db' ); 

define( 'DB_USER', 'wordpress_usr' ); 

define( 'DB_PASSWORD', 'Your_password' );

Then open your browser and search localhost/wordpress

🅒 🅞 🅜 🅟 🅛 🅔 🅣 🅔 

🌜⚽〽️🅿️👢🎗🌴🎗
