<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="stilo.css">
</head>
<body>
    <h1>Formulario de Datos</h1>
    <form method="POST" action="cuviii.php">
        <!-- Nombres -->
        <label for="nombre">Nombre y Apellidos:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <!-- Fecha de nacimiento -->
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <!-- Ocupación -->
        <label for="ocupacion">Ocupación:</label>
        <input type="text" id="ocupacion" name="ocupacion" required><br><br>

        <!-- Contacto -->
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" required><br><br>>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br><br>>


        <!-- Nacionalidad -->
        <label for="nacionalidad">Nacionalidad:</label>
        <select id="nacionalidad" name="nacionalidad" required>
            <option value="">Seleccione una opción</option>
            <option value="Peruana">Peruana</option>
            <option value="Mexicano">Mexicano</option>                    
            <option value="Chilena">Chilena</option>
            <option value="Brazileña">Brazileña</option>
        </select><br><br>

        <!-- Nivel de inglés -->
        <label>Nivel de Inglés:</label><br>
        <input type="radio" id="basico" name="nivel_ingles" value="Básico" required>
        <label for="basico">Básico</label><br>
        <input type="radio" id="intermedio" name="nivel_ingles" value="Intermedio">
        <label for="intermedio">Intermedio</label><br>
        <input type="radio" id="avanzado" name="nivel_ingles" value="Avanzado">
        <label for="avanzado">Avanzado</label><br>
        <input type="radio" id="fluido" name="nivel_ingles" value="Fluido">
        <label for="fluido">Fluido</label><br><br>

        <!-- Lenguajes de programación -->
        <label for="lenguajes_programacion">Lenguajes de Programación:</label><br>
        <select id="lenguajes_programacion" name="lenguajes_programacion[]" required multiple>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <option value="C++">C++</option>
        </select><br><br>

        <!-- Habilidades -->
        <label>Habilidades:</label><br>
        <input type="checkbox" id="habilidad1" name="habilidades[]" value="Desarrollo Web">
        <label for="habilidad1">Desarrollo Web</label><br>
        <input type="checkbox" id="habilidad2" name="habilidades[]" value="Análisis de Datos">
        <label for="habilidad2">Análisis de Datos</label><br>
        <input type="checkbox" id="habilidad3" name="habilidades[]" value="Diseño Gráfico">
        <label for="habilidad3">Diseño Gráfico</label><br><br>

        <!-- Aptitudes -->
        <label for="aptitudes">Aptitudes:</label>
        <input list="aptitudesList" id="aptitudes" name="aptitudes" required>
        <datalist id="aptitudesList">
            <option value="Proactivo">
            <option value="Manejo de recursos">
            <option value="Comprometido con el Trabajo">
            <option value="Desarrollo vocacional">
            <option value="Orientación a personal">
        </datalist><br><br>

        <label for="trabajo">Título del trabajo:</label>
        <input type="text" id="trabajo" name="trabajo" required><br>

         <label for="empresa">Nombre de la empresa:</label>
        <input type="text" id="empresa" name="empresa" required><br>

        <label for="inicio">Fecha de inicio:</label>
        <input type="date" id="inicio" name="inicio" required><br>

        <label for="fin">Fecha de fin:</label>
        <input type="date" id="fin" name="fin"><br>

        <label for="responsabilidades">Responsabilidades:</label>
        <textarea id="responsabilidades" name="responsabilidades" required></textarea><br>

        <label for="formacion">Formacion:</label>
        <input type="text" id="formacion" name="formacion" required><br><br>

        <!-- Perfil -->
        <label for="perfil">Perfil:</label><br>
        <textarea id="perfil" name="perfil" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
