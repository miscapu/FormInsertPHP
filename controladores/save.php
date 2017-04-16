<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 15/04/2017
 * Time: 22:48
 */
include '../config/conexion.php';
//recibiendo valores del formulario via post de index.php
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];

/**
 * @param $nombre
 * @param $usuario
 * @param $email
 * @param $edad
 * @param $dbc
 */
insert($nombre,$usuario,$email,$edad,$dbc);
function insert($nombre, $usuario, $email, $edad, $dbc){

    $stmt = $dbc->prepare("INSERT INTO usuario (nombre,usuario,email,edad) VALUES (:nombre, :usuario, :email, :edad)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':edad', $edad);
    
    $stmt->execute();
	
	//$count=$stmt->rowCount();
	
	//echo $count. "Nuevos Registros fueron ingresados satisfactoriamente";
	echo "Nuevos Registros fueron ingresados satisfactoriamente";


	}