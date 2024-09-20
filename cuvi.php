<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombreyapellido"])) {
      $nameErr = "Name is required";
    } else {
      $nombreyapellido = test_input($_POST["nombreyapellido"]);
    }
    
    if (empty($_POST["fecha"])) {
      $fechaErr = "fecha is required";
    } else {
      $fecha = test_input($_POST["fecha"]);
    }
    if (empty($_POST["nacionalidad"])) {
        $fechaErr = "nacionalidad is required";
      } else {
        $nacionalidad = test_input($_POST["nacionalidad"]);
      }
    if (empty($_POST["telefono"])) {
        $fechaErr = "telefono is required";
      } else {
        $telefono = test_input($_POST["telefono"]);
      }
    if (empty($_POST["email"])) {
        $fechaErr = "email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
    if (empty($_POST["ocupacion"])) {
          $fechaErr = "ocupacion is required";
        } else {
          $ocupacion = test_input($_POST["ocupacion"]);
        }
    if (empty($_POST["nivelingles"])) {
          $fechaErr = "nivelingles is required";
        } else {
          $nivelingles = test_input($_POST["nivelingles"]);
        }
        if (empty($_POST["lenguaje"])) {
            $fechaErr = "lenguaje is required";
          } else {
            $lenguaje = test_input($_POST["lenguaje"]);
          }
        if (empty($_POST["habilidades"])) {
            $fechaErr = "habilidades is required";
          } else {
            $habilidades = test_input($_POST["habilidades"]);
          }
        if (empty($_POST["aptitudes"])) {
              $fechaErr = "aptitudes is required";
            } else {
              $aptitudes = test_input($_POST["aptitudes"]);
            }
        if (empty($_POST["perfil"])) {
              $fechaErr = "perfil is required";
            } else {
              $perfil = test_input($_POST["perfil"]);
            }
    } 

// Capturamos 
$nombreyapellido = $_POST['nombreyapellido'];
$fecha = $_POST['fecha'];
$ocupacion = $_POST['ocupacion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$nacionalidad = $_POST['nacionalidad'];
$nivelingles = $_POST['nivelingles'];
$lenguaje = $_POST['lenguaje'];
$habilidades = $_POST['habilidades'];
$aptitudes = $_POST['aptitudes'];
$perfil = $_POST['perfil'];
$foto_path = 'uploads/' . basename($_FILES['foto']['name']);
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Currículum de <?php echo htmlspecialchars($nombreyapellido); ?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
body {
  background-color: #ffffff; 
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
  width: 100%;
  box-shadow: 0 0 15px rgba(0,0,0,0.1);
  margin-top: 22px;
  padding-bottom: 22px;
  box-sizing: border-box;
}
.header {
background-color: #f79797;
height: 180px;
align-items: center;
justify-content: center;
padding: 20px;
color: white;
text-align: center;
display: flex;
}
.header-table {
margin: 0 auto;
width: 100%;
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
</style>
</head>
<body>
<div class="contenedor">
<div class="header">
<table class="header-table">
<tr>
<td style="padding-right: 20px;">
<img src="<?php echo htmlspecialchars($fotopath); ?>" alt="cara" style="max-width: 150px; max-height: 150px;">
</td>
<td>
<div style="text-align: center; padding-left: 20px;">
<h1 style="color: #ffffff;">><?php echo htmlspecialchars($nombreyapellido); ?></h1>
<p style="color: #000000;">Puesto Buscado: <?php echo htmlspecialchars($ocupacion); ?></p>
</div>
</td>
</tr>
</table>
</div>

<div class="columns">
<div class="columnaiz">
<div>
<h3>CONTACTO:</h3>
<hr>
<p style="color: #000000;"><i class="fas fa-phone-alt"></i> <?php echo htmlspecialchars($telefono); ?></p>
<p style="color: #000000;"><i class="fas fa-envelope"></i> <?php echo htmlspecialchars($email); ?></p>
<br>

<h3>IDIOMAS:</h3>
<hr>
<p style="color: #000000;">Nivel de Inglés: <?php echo htmlspecialchars($nivelingles); ?></p>
<br>

<h3>DATOS PERSONALES:</h3>
<hr>
<p style="color: #000000;"> Fecha de Nacimiento: <?php echo htmlspecialchars($fechanacimiento); ?></p>
<p style="color: #000000;">Nacionalidad: <?php echo htmlspecialchars($nacionalidad); ?></p>
<br>

<!-- Sección de Lenguajes de Programación -->
<h3>LENGUAJES DE PROGRAMACIÓN:</h3>
<hr>
<ul>
<?php foreach ($lenguaje as $lenguajes): ?>
<li><?php echo htmlspecialchars($lenguajes); ?></li>
<?php endforeach; ?>
</ul>
<br>
<h3>APTITUDES:</h3>
<hr>
<ul>
<?php foreach ($aptitudes as $aptitud): ?>
<li><?php echo htmlspecialchars($aptitud); ?></li>
<?php endforeach; ?>
</ul>
</div>
</div>
<!-- Sección de Habilidades -->
<h3>HABILIDADES:</h3>
<hr>
<ul>
<?php foreach ($habilidades as $habilidad): ?>
<li><?php echo htmlspecialchars($habilidad); ?></li>
<?php endforeach; ?>
</ul>
</div>
</div>

<!-- Columna derecha: Perfil Profesional -->
<div class="right-column">
<h3>PERFIL PROFESIONAL</h3>
<hr>
<p><?php echo nl2br(htmlspecialchars($perfil)); ?></p>
</div>
</div>
</div>
</body>
</html>