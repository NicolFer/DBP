<?php
session_start();


include 'coneccion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $ocupacion = $_POST['ocupacion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $nacionalidad = $_POST['nacionalidad'];
    $nivel_ingles = $_POST['nivel_ingles'];
    $lenguajes_programacion = isset($_POST['lenguajes_programacion']) ? implode(", ", $_POST['lenguajes_programacion']) : '';
    $aptitudes = $_POST['aptitudes'];
    $habilidades = isset($_POST['habilidades']) ? implode(", ", $_POST['habilidades']) : '';
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
    $_SESSION['telefono'] = $telefono  ;
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

    $sql = "INSERT INTO datos (nombre, fecha_nacimiento, ocupacion, telefono, email, nacionalidad, nivel_ingles, 
    lenguajes_programacion, aptitudes, habilidades, trabajo, empresa, inicio, fin, responsabilidades, formacion, perfil)
        VALUES ('$nombre', '$fecha_nacimiento', '$ocupacion', '$telefono', '$email', '$nacionalidad', '$nivel_ingles', '$lenguajes_programacion', '$aptitudes', '$habilidades',
         '$formacion', '$trabajo', '$empresa', '$inicio', '$fin', '$responsabilidades', '$perfil')";


    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente en la base de datos.";
    } else {
        echo "Error al insertar los datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    header("Location: index.php");
    exit;
}

// Obtener los datos de la sesión para mostrar en la página
$nombre = $_SESSION['nombre'];
$ocupacion = $_SESSION['ocupacion'];
$telefono = $_SESSION['telefono'];
$email = $_SESSION['email'];
$nacionalidad = $_SESSION['nacionalidad'];
$nivel_ingles = $_SESSION['nivel_ingles'];
$lenguajes_programacion = $_SESSION['lenguajes_programacion'];
$aptitudes = $_SESSION['aptitudes'];
$habilidades = $_SESSION['habilidades'];
$trabajo = $_SESSION['trabajo'];
$empresa = $_SESSION['empresa'];
$inicio = $_SESSION['inicio'];
$fin = $_SESSION['fin'];
$responsabilidades = $_SESSION['responsabilidades'];
$formacion = $_SESSION['formacion'];
$perfil = $_SESSION['perfil'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title >FORMULARIO CV BASE</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style> 
body{
background-color: #000000;    
margin: 0;
justify-content: center;
padding: 0;
font-family: Arial, sans-serif;
display: flex;
align-items: center;
min-height: 100vh;
overflow-x: hidden;
}
.contenedor {
background-color: #fdfdfd;
width: 70%;
box-shadow: 0 0 15px rgba(0,0,0,0.1);
margin-top: 22px;
padding-bottom: 22px;
box-sizing: border-box;
}
.header {
background-color: #009797;
height: 180px;
align-items: center;
justify-content: center;
padding: 20px;
color: white;
text-align: center;
display: flex;
}
.columnas {
display: grid;
grid-template-columns: 30% 70%;
}
.columnaiz {
background-color: #f0e5f8;
padding: 20px;
box-sizing: border-box;
color: #000000;
}
.columnade {
background-color: #ffffff;
padding: 20px;
box-sizing: border-box;
color: #000000;
}
hr {
border: 0;
border-top: 1px solid;
margin: 2px 0;
padding: 0;
}
.columnade hr {
border-color: #000000;
}
.columaiz hr {
border-color: #000000;
}

.header-table {
margin: 0 auto;
width: 100%;
}

.header-table img {
width: 180px;
height: 180px;
border-radius: 50%;
}

.header-table td {
vertical-align: middle;
}
.header-table h1 {
font-size: 36px;
margin: 0;
}
.header-table p {
font-size: 20px;
margin: 5px 0 0 0;
}
.cuadrada {
width: 150px;  
height: 150px; 
object-fit: cover; 
border-radius: 8px; 
}
</style>
</head>
<body>
<div class="contenedor">
<div class="header">
<table class="header-table">
<tr>
<td style="padding-right: 15px;">
<img src="y.jpg" alt="caradelusuario" class="cuadrada">
</td>
<td>
<div style="text-align: center; padding-left: 15px;">
<h1 style="color: #ffffff;"><?php echo htmlspecialchars($nombre); ?></h1>
<p style="color: #000000;">Puesto Buscado: <?php echo htmlspecialchars($ocupacion); ?></p>
</div>
</td>
</tr>
</table>
</div>
<div class="columnas">
<div class="columnaiz">
<div>
<h3>CONTACTO</h3>
<hr>
<p style="color: #000000;"><i class="fas fa-phone-alt" style="margin-right: 3px;"></i> <?php echo htmlspecialchars($telefono); ?></p>
<p style="color: #000000;"><i class="fas fa-envelope" style="margin-right: 3px;"></i><?php echo htmlspecialchars($email); ?></p>
<p style="color: #000000;"><i class="fas fa-map-marker-alt" style="margin-right: 3px;"></i><?php echo htmlspecialchars($nacionalidad); ?></p>
<p style="color: #000000;"><i class="fa-brands fa-linkedin-in"style="margin-right: 3px;"></i><a>linkedin.com/AAAAAAA</a></p>
<br>
<h3>IDIOMAS</h3>
<hr>
<p>Español: Nativo</p>
<p>Inglés: <?php echo htmlspecialchars($nivel_ingles); ?></p>
<br>
<h3>APTITUDES</h3>
<hr>
<ul>
<li>Inteligencia emocional</li>
<li>Sociable</li>
<li>Trabajo en equipo</li>
<li>Proactivo</li>
<li>Comprometido con el trabajo</li>
<li><?php echo htmlspecialchars($aptitudes); ?></li>
</ul>
<br>
<h3>HABILIDADES</h3>
<hr>
<ul>
<?php
if (!empty($habilidades)) {
$habilidades_array = explode(", ", $habilidades);
foreach ($habilidades_array as $habilidad) {
echo "<li>" . htmlspecialchars($habilidad) . "</li>";
}}
?>
</ul>
<br>
<h3>OTROS INTERESES</h3>
<hr>
<ul>
<li>Tecnología y desarrollo</li>
<li>investigación</li>
<li>Lectura histórica</li>
</ul>
</div>
</div>
<div class="columnade">
<h3>PERFIL PROFESIONAL</h3>
<hr>
<p style="color: #000000;"><?php echo htmlspecialchars($perfil); ?></p>
<br>
<h3>EXPERIENCIA LABORAL</h3>
<hr>
<p style="color: #000000;"><b><?php echo htmlspecialchars($trabajo); ?></b></p>
<p style="color: #000000;"><b><i><?php echo htmlspecialchars($empresa); ?></i></b><span style="color:rgba(255, 103, 71, 0.5)">|<?php echo htmlspecialchars($inicio); ?> al <?php echo htmlspecialchars($fin); ?></span></p>
<ul>
<li><?php echo htmlspecialchars($responsabilidades); ?></li>
</ul>
<br>
<br>
<h3>FORMACIÓN</h3>
<hr>
<p style="color: #000000;"><b>Grado de <?php echo htmlspecialchars($formacion); ?></b></p>
<p style="color: #000000;"><b><em>ROCHE,Lima<span style="color:rgba(255, 0, 2, 0.5)">|2023-2024</span></em></b></p>
<p style="color: #000000;"><b>Licenciatura Profecional</b></p>
<p style="color: #000000;"><b><em>Universidad Católica San Pablo,Arequipa<span style="color:rgba(255, 0, 2, 0.5)">|2023</span></em></b></p>
</div>
</div>
</div>
</body>
</html>