<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 15/04/2017
 * Time: 15:48
 */
/**
 * Proyecto Conexión a una base de datos MySQL
 * Estoy utilizando PHP 7
 * Primer Paso: He creado una base de datos llamada: 'conexionpdo'
 * Crear una tabla llamada 'usuario' que
 * tendrá 5 campos: id_usuario, nombre, usuario, email y edad.
 *  usaré todos esos campos como not null porque son obligatorios o requeridos
 */
/**
 * Realizo una conexión a la base de datos MySQL con la extensión PDO de PHP
 */
/**
* Creando las variables globales con los valores de aceeso a mi
 * MySQL
 */
define('DB_USER', 'root'); //nombre del usuario DB_USER
define('DB_PASSWORD', '***********'); //contraseña de MySQL DB_PASSWORD
define('DSN', 'mysql:host=localhost;port=3306;dbname=conexionpdo');
/**
 * dsn data source name, esta compuesto de los siguientes elementos:
 * prefijo DSN = mysql,
 * host = nombre del servidor donde esta mysql = localhost
 * port = número de la puerta por donde localhost interactua
 * dbname = nombre de la base de datos que en nuestro caso es usuario
 **/
$options = array
    (
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING
    );

/**
 * ahora creo el objeto $dbc (database connection) y paso por él las
 * variables globales antes definidas y la matriz
 * dentro del bloque try catch (for more informations:
 * http://php.net/manual/en/language.exceptions.php)
 */
try{
    $dbc = new PDO(DSN, DB_USER, DB_PASSWORD, $options);
}catch(PDOException $ex){
    echo $ex->getMessage();
}