# Formulario para Insertar Registros a Una Base de datos MySQL

Este script se conecta a una base de datos MySQL con la extensión PDO utilizando declaraciones preparadas (Statements Prepared); luego inserta registros utilizando un formulário hecho en booststrap con sus respectivas validaciones! 
## Instalación y Uso:
### Primer Paso: Para usar este formulario necesitas crear una base de datos llamada "conexionpdo"
### Segundo Paso: Debes crear una tabla llamada usuario con 5 campos, aquí la consulta:
```
create TABLE usuario (
id_usuario INT NOT NULL AUTO_INCREMENT,
nombre VARCHAR(40) NOT NULL,
usario VARCHAR(20) NOT NULL,
email VARCHAR(40) NOT NULL,
edad VARCHAR(4) NOT NULL,
PRIMARY KEY (id_usuario)
);
```
### Tercer Paso: Coloca los datos de acceso a MySQL en el archivo 'config/conexion.php'. 
define('DB_USER', 'root');  //nombre del usuario DB_USER
define('DB_PASSWORD', '***********');    //contraseña de MySQL DB_PASSWORD
define('DSN', 'mysql:host=localhost;port=3306;dbname=conexionpdo');

## Preguntas y Crítiicas
[autor del Script](http://miscapu.blogspot.com).
