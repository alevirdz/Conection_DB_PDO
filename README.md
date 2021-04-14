# Conection DB

Configuraciones de las variables para realizar una conexion 
en la base de datos MySql en Sistema operativo Mac OS y Linux
utilizando los puertos y el socket que proporciona MAMP.

En el caso de Windows la conexion es más rapida y sin configurar
los puertos y el socket


# Mac OS y Linux

````
$server   = 'localhost';
$database = 'Name_database';
$username = 'root';
$password = 'root';
$puerto   = '3306';
$socket   = '/Applications/MAMP/tmp/mysql/mysql.sock';
````
# Windows

````
$server   = 'localhost';
$database = 'Name_database';
$username = 'root';
$password = 'root';
````
