# DB connection

Variable configurations to make a connection
in MySql database in Mac OS and Linux operating system
using the ports and socket provided by MAMP.

In the case of Windows, the connection is faster and without configuring
ports and socket


# Mac OS and Linux

````
$server = 'localhost';
$database = 'Name_database';
$username = 'root';
$password = 'root';
$port = '3306';
$socket = '/Applications/MAMP/tmp/mysql/mysql.sock';
````
# Windows

````
$server = 'localhost';
$database = 'Name_database';
$username = 'root';
$password = 'root';
````

# View the phpMyAdmin configuration

This image shows illustratively the configurations that phpMyAdmin has
where you can see the port, user, password and host of its configuration.

<img alt="configuration-bd" width="845" height="370" src="https://user-images.githubusercontent.com/80425451/114646156-5cc44880-9ca0-11eb-91c3-ff816a4fcb30.png" >
