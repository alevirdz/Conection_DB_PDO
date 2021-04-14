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

# Ver la configuración phpMyAdmin

En esta imagen se muestra ilustrativamente las configuraciones que tiene el phpMyAdmin
donde se podra observar el puerto, usuario, contraseña y host de la configuración del mismo.

<img alt="configuration-bd" width="845" height="370" src="https://user-images.githubusercontent.com/80425451/114646156-5cc44880-9ca0-11eb-91c3-ff816a4fcb30.png">
