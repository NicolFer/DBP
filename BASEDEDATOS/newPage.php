<?php

$nombre = $_POST['nombre'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$ocupacion = $_POST['ocupacion'];
$teefono = $_POST['telefono'];
$email = $_POST['email'];
$nacionalidad = $_POST['nacionalidad'];
$nivel_ingles = $_POST['nivel_ingles'];
$lenguajes_programacion = isset($_POST['lenguajes_programacion']) ? implode(", ", $_POST['lenguajes_programacion']) : '';
$habilidades = isset($_POST['habilidades']) ? implode(", ", $_POST['habilidades']) : '';
$aptitudes = $_POST['aptitudes'];
$trabajo = $_POST['trabajo'];
$empresa = $_POST['empresa'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];
$responsabilidades = $_POST['responsabilidades'];
$formacion = $_POST['formacion'];
$perfil = $_POST['perfil'];

$_SESSION['nombre'] = $nombre;
$_SESSION['fecha_nacimiento'] = $fecha_nacimiento;
$_SESSION['ocupacion'] = $ocupacion;
$_SESSION['telefono'] = $telefono;
$_SESSION['email'] = $email;
$_SESSION['nacionalidad'] = $nacionalidad;
$_SESSION['nivel_ingles'] = $nivel_ingles;
$_SESSION['lenguajes_programacion'] = $lenguajes_programacion;
$_SESSION['aptitudes'] = $aptitudes;
$_SESSION['habilidades'] = $habilidades;
$_SESSION['trabajo'] = $trabajo;
$_SESSION['empresa'] = $empresa;
$_SESSION['inicio'] = $inicio;
$_SESSION['fin'] = $fin;
$_SESSION['responsabilidades'] = $responsabilidades;
$_SESSION['formacion'] = $formacion;
$_SESSION['perfil'] = $perfil;

header("Location: cuviii.php");
exit;
?>
