Cimpress Blog Project
======================

Requirements : 

PHP 5.6 or above
Mysql 5.6 or above




User Credentials : 

Normal User : 
-------------

username : test
password : test123



Admin User : 
-------------

username : admin
password : admin123


Functionality : 
=================

User Panel 
===========

1) User can login and View the posts
2) User can Add New Posts
3) User can Edit and Update the post added by him/her

Admin Panel 
===========
1) Admin can Login and See all the Users and Posts
2) Admin can Edit and Update a post
3) Admin can Delete a Post.


Steps to run the project
=========================

1) Git clone the project
2) Create a database in your localhost and update the credentials in the .env file
3) Import the sql("cimpressblog.sql") file present in the project
4) Run the command "composer update" in the project directory
5) Run the project by going to the project directory by running the below commandphp
 
 php artisan serve

6) Also generate the encryption key by running the command 

php artisan key:generate
Note : 
