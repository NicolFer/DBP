<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para crear tu Curriculum Vitae</title>
    <style>
        body{
            font-family: arial, sans-serif;
            margin:0 ;
            background-color: #e2ebea;
            overflow-x: hidden;
        }
        .container{
            width: 80%;
            margin: 10px auto;
            padding: 20px;
            box-shadow: 0 0 20px rgba(22, 13, 32, 0.1);
            background-color: #fff;
            box-sizing: border-box;
        }
        .comienzo, .compact {
            grid-column: span 2; /* Ocupa una columna */
        }
        .error {
            color: #FF0000;
        }
        form{
            display:grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;px;
            grid-column: span 1; /* puede que funcione sino en columna*/
        }

        label{
            display: block;
            font-weight: 700;
            padding: 5px;
            margin-bottom: 5px;
        }
        input, textarea{
            width: 100%;
            padding: 5px;
            margin-bottom: 15px;
            border: 0.5px solid #ccc;
            box-sizing: border-box;
        }
        select {
            width: 100%;
            height: 30px; /* Establece la altura del elemento <select> */
            overflow: auto; /* Permite que el usuario desplaze la lista de opciones */
            padding: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .radiog div, .checkboxg div {
            display: flex;
            align-items: flex-start;
        }
        .radiog input, .checkboxg input {
            margin-right: 10px;
        }        
        .phot{
            grid-column: span 2; /* Ocupa ambas columnas */
            display: flex;
            flex-direction: column;
        }
        input[type="submit"] {
            grid-column: span 2;
            border: none;
            background-color: #4682B4;
        }
        .radiog {
        display: grid;
        grid-template-columns: span 1; 
        gap: 10px;
        align-items: flex-start; 
        }
        .checkboxg {
            display: grid;
            grid-template-columns: span 2; /* Distribuye en columnas */
            gap: 10px;
            align-items: flex-start;
        }

    </style>
</head>
<body>
<!-- diviciones dentro de container -->
    <div class="container">
        <h1>Formulario para Generar crear tu Curriculum Vitae</h1>
        <form action="cuvi.php" method="post" enctype="multipart/form-data">
        <div class="single-column">
            <div><!-- divición de nombre | texto -->
                <label for="nombre">Nombre y Apellidos:<span class="error">* required field</span></label>                
                <input type="text" name="nombreyapellido" id="nombreyapellido">
            </div>
        </div>
            <div><!-- fecha de nacimiento | time(es date no time)-->
                <label for="fecha">Fecha de Nacimiento:<span class="error">* required field</span></label>                
                <input type="date" name="fecha" id="fecha">
            </div>

            <div><!-- nacionalidad | select option -->
                <label for="nacionalidad">Nacionalidad:<span class="error">* required field</span></label>
                <select name="nacionalidad" id="nacionalidad">
                    <option value="">Seleccione una opción</option>
                    <option value="Peruana">Peruana</option>
                    <option value="Mexicano">Mexicano</option>                    
                    <option value="Chilena">Chilena</option>
                    <option value="Brazileña">B razileña</option>
                </select>
            </div>

            <div><!-- teléfono | texto -->

                <label for="telefono" >Teléfono:<span class="error">* required field</span></label>
                <input type="text" name="telefono" id="telefono" >
            </div>

            <!-- email |texto-->
            <div>
                <label for="email" >Email:<span class="error">* required field</span></label>
                <input type="text" name="email" id="email" >
            </div>

            <!-- ocupación | text -->
            <div>
                <label for="ocupacion">Ocupación:<span class="error">* required field</span></label>
                <input type="text" name="ocupacion" id="ocupacion" >
            </div>

            <!-- nivel de inglés | select radio -->
            <div>
                <label for="nivelingles">Nivel de Inglés:<span class="error">* required field</span></label>
                <div class="radiog">
                <div>
                    <label for="nivelbasico">Básico  </label>                    
                    <input type="radio" name="nivelingles" id="nivelbasico" value="Básico">

                </div>
                <div>
                    <label for="nivelinter">Intermedio</label>                    
                    <input type="radio" name="nivelingles" id="nivelinter" value="Intermedio">

                </div>
                <div>
                    <label for="niveladv">Avanzado  </label>
                    <input type="radio" name="nivelingles" id="niveladv" value="Avanzado">

                </div>    
                <div>
                    <label for="nivelflu">Fluido    </label>
                    <input type="radio" name="nivelingles" id="nivelflu" value="Fluido">

                </div>  
            </div>

            <div class="compact">
            <!-- Lenguajes | opcion multiple-->
                <label for="lenguaje">Lenguajes de Programación:<span class="error">* required field</span></label>
                <div class="checkboxg">
                <div>
                <label for="C++"> C++</label><br>
                <input type="checkbox" id="C++" name="C++" value="C++">

                </div>
                <div>
                <label for="Python"> Python</label><br>
                <input type="checkbox" id="Python" name="Python" value="Python">

                </div>
                <div>
                <label for="JavaScript"> JavaScript</label><br>
                <input type="checkbox" id="JavaScript" name="JavaScript" value="JavaScript">

                </div>
                <div>
                <label for="C#"> C#</label><br>
                <input type="checkbox" id="C#" name="C#" value="C#">

                </div>
                <div>
                <label for="PHP"> PHP</label><br>                    
                <input type="checkbox" id="PHP" name="PHP" value="PHP">

                </div>    
            </div>
            <!-- Habilidades -->
            <div class="compact">
                <label for="habilidades">Habilidades:<span class="error">* required field</span></label>
                <div class="checkboxg">
                <div>
                    <label for="desarrolloweb">Desarrollo Web</label>
                    <input type="checkbox" name="habilidades" value="desarrolloweb" id="desarrolloweb">

                </div>
                <div>
                    <label for="cientificodedatos">Cientifico de Datos</label>
                    <input type="checkbox" name="habilidades" value="Cientifico de Datos" id="cientificodedatos">

                </div>
                <div>
                    <label for="circuitosdigitales">Circuitos Digitales</label>  
                    <input type="checkbox" name="habilidades" value="Circuitos Digitales" id="circuitosdigitales">

                </div>
                <div>    
                    <label for="resolucion">Resolucion de problemas</label>                                      
                    <input type="checkbox" name="habilidades" value="Resolución de problemas" id="resolucion">

                </div>
            </div>
            </div>
            <div class="compact">
            <!-- aptitudes | datalist -->

                <label for="aptitudes">Aptitudes:</label>
                <input list="aptitudes" name="aptitudes" id="aptitudes" >
                <datalist id="aptitudes">
                    <option value="Inteligencia Emocional">
                    <option value="Proactivo">
                    <option value="Manejo de recursos">
                    <option value="Comprometido con el Trabajo">
                    <option value="Trabajo en Equipo">
                    <option value="Desarrollo vocacional">
                    <option value="Lógica">
                    <option value="Gestion de Tiempo">
                    <option value="Orientación a personal">
                    <option value="Empatia">
                    <option value="Análisis de tendecias">
                    <option value="Manejo de conflictos">
                    <option value="Investigación">
                </datalist>

            </div>
            <!-- perfil | textarea -->
            <div class="compact">
                <label for="perfil">Perfil:<span class="error">* required field</span></label>
                <textarea name="perfil" id="perfil" ></textarea>
            </div>

            <div class="phot">
                <label for="foto">Subir Foto:</label>
                <input type="file" name="foto" id="foto">
            </div>

            <!--Enviar -->
            <input type="submit" value="Generar CV">
        </form>
    </div>

</body>
</html>