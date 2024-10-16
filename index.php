<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatorio</title>
</head>
<body>
    <h1>Guia de Ejercicios PHP</h1>

        <!--Formulario-->
    <!-- Ejercicio 1: Verificar Edad -->
    <h2 style="color: blue; font-family: Arial, sans-serif; font-size: 24px; text-align: center;">
        --SECCION FORMULARIOS--
    </h2>
    <h3>Formulario de Edad</h3>
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <input type="submit" name="ejercicio" value="Enviar Edad">
    </form>
    
    <!-- Ejercicio 2: Verificar Edad -->
    <h3>Ejercicio 3: Verificar Nivel de estudios</h3>
    <form action="" method="post">
        <label for="nombre_estudios">Nombre: </label>
        <input type="text" id="nombre_estudios" name="nombre_estudios" required><br><br>
        <p>Nivel de estudios: </p>
        <input type="radio" id="no_estudios" name="estudios" value="No tiene estudios" required>
        <label for="no_estudios">No tiene estudios</label><br>

        <input type="radio" id="primarios" name="estudios" value="Estudios primarios">
        <label for="primarios">Estudios primarios</label><br>

        <input type="radio" id="secundarios" name="estudios" value="Estudios secundarios">
        <label for="secundarios">Estudios secundarios</label><br><br>

        <input type="submit" name="ejercicio" value="Enviar Estudios">
    </form>

    <!--Ejercicio 3: Seleccionar deportes-->
    <h3>Ejercicio 3: Seleccionar deportes</h3>
    <form action="" method="POST">
        <label for="nombre_deportes">Nombre: </label>
        <input type="text" id ="nombre_deportes" name="nombre_deportes" required> <br><br>
        <p>Deportes que practica: </p>
        <input type="checkbox" id="futbol" name="deportes[]" value="Futbol">
        <label for="futbol">Fútbol</label><br>

        <input type="checkbox" id="basket" name="deportes[]" value="Baloncesto">
        <label for="basket">Baloncesto</label><br>

        <input type="checkbox" id="tenis" name="deportes[]" value="Tenis">
        <label for="tenis">Tenis</label><br>

        <input type="checkbox" id="voley" name="deportes[]" value="Voley">
        <label for="voley">Voley</label><br>

        <input type="submit" name="ejercicio" value="Enviar Deportes">
    </form>
    <!--Ejercicio 4: Control ingresos-->
    <h3>Ejercicio 4: Control ingresos</h3>
    <form action="" method="POST">
        <p>Ingrese el Nombre: </p>
        <input type="text" name="nombre" required> <br>
        
        <p>Seleccione en qué rango se ubica sus ingresos: </p>
        <select name="ingresos" required>
            <option value="">Seleccione un rango</option>
            <option value="1">100-1000</option>
            <option value="2">1001-2000</option>
            <option value="3">2001-3000</option>
            <option value="4">Mayor a 3000</option>
        </select>
        <br>
        
        <input type="submit" name="ejercicio" value="Confirmar">
        <br> <br>
    </form>
    <!--Ejercicio 5: Gestionar Contratos-->
    <h3>Ejercicio 5: Gestionar Contrato</h3>
    <form action="" method="POST">
        <p>Completar Contrato: </p><br>
        <textarea name="contrato" rows="8" cols="80">
            En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
        </textarea><br>
        <input type="submit" name="ejercicio" value="Enviar">



    </form>
    <?php
        // Definir la función que genera un número aleatorio y muestra el resultado
        function mostrarNumeroAleatorio() {
            // Generar un número aleatorio entre 1 y 100
            $num = rand(1, 100);
            
            // Mostrar el número generado
            echo "<p>El número generado es: <strong>$num</strong></p>";

            // Verificar si es menor, igual o mayor a 50
            if ($num < 50) {
                echo "<p>El número es menor a 50.</p>";
            } elseif ($num == 50) {
                echo "<p>El número es igual a 50.</p>";
            } else {
                echo "<p>El número es mayor a 50.</p>";
            }
        }
        function sitioActivo(){
        //Otro Ejercicio
        $dia = date("d");
        if ($dia <= 20) {
            echo '<p style="color: green;">Sitio Activo</p>';
        } else {
            echo '<p style="color: red;">Sitio Inactivo</p>';
        }
        }
        function mostrarTiposDatos(){
            $edad = 25;
            $estatura = 1.5;
            $booleano = true;
            $nombre = "Pedro";
            //Muestro los valores
            echo "<h2><strong>Mostrar Valores </strong></h2>";
            echo "Entero: $edad <br>";
            echo "Float: $estatura  <br>";
            echo "String: $nombre  <br>";
            echo "Booleano: $booleano <br>";
            echo "<br>";

        }
        function variableString(){
            $anio = 2024;
            $dia = 16;
            $mes = 10;
            $fecha = $anio."/".$mes."/".$dia;
            echo "<h2>Fecha: </h2>";
            echo "La fecha es: $fecha";
            echo "<br> <hr>";

        }
        function condicionalIf(){
            $num = rand(min: 1, max:3);
            echo "<h3><strong>Estructura If: Numeros aleatorios</strong></h3>";

            if($num == 1){
                echo "<p>El numero es <strong>Uno</strong>.</p>";
            }elseif($num == 2){
                echo "<p>El numero es <strong>Dos</strong>.</p>";
            } else{
                echo "<p>El numero es <strong>Tres</strong>.</p>";                
            }
            echo "<br> <hr>";
        }
        function tablaMultiplicarFor(){
            echo "<h3>TABLA DE MULTIPLAR DEL 2: Estructuras repetitivas</h3>";
            echo "Tabla de Multiplar del 2 For";
            echo "<ul>";
            $resultado = 0;
            for($i =1; $i <=10;$i++){
                $resultado = 2 * $i;
                echo "<li> 2 x $i = $resultado</li>";
            }
            echo "</ul>";
            echo "<br><hr>";
        }
        function tablaMultiplicarWhile(){
            echo "Tabla usando While";
            $i = 1;
            echo "<ul>";
            while ($i <= 10) {
                $resultado = 2 * $i;
                echo "<li>2 x $i = $resultado</li>";
                $i++;
            }
            echo "</ul>";
            echo "<br> <hr>";
        }
        function tablaMultiplarDoWhile(){
            echo "Tabla usando Do While";
            $i = 1;
            echo "<ul>";
            do {
                $resultado = 2 * $i;
                echo "<li>2 x $i = $resultado</li>";
                $i++;
            } while ($i <= 10);
            echo "</ul>";
            echo "<br> <hr>";

        }
        // Función que procesa los datos y muestra el resultado
        function procesarFormularioEdad() {
            // Verificar que los datos del formulario estén presentes
            if (isset($_POST['nombre']) && isset($_POST['edad'])) {
                $nombre = $_POST['nombre'];
                $edad = $_POST['edad'];

                // Mostrar los datos ingresados
                echo "<h2>Resultado</h2>";
                echo "<p>Nombre: <strong>$nombre</strong></p>";
                echo "<p>Edad: <strong>$edad</strong></p>";

                // Verificar si la persona es mayor o menor de edad
                if ($edad >= 18) {
                    echo "<p>$nombre es mayor de edad.</p>";
                } else {
                    echo "<p>$nombre es menor de edad.</p>";
                }
            }
            echo "<br> <hr>";
        }
        function procesarFormularioEstudios(){
            if(isset($_POST['nombre_estudios']) && isset($_POST['estudios'])){
                $nombre = $_POST['nombre_estudios'];
                $estudios = $_POST['estudios'];
                echo "<h3>Resultado de los Estudios</h3>";
                echo "<p>Nombre: <strong>$nombre</strong></p>";
                echo "<p>Nivel de estudios: <strong>$estudios</strong></p>";
            }
        }
        function procesarDeportes(){
            if(isset($_POST['nombre_deportes']) && isset($_POST['deportes'])){
                $nombre = $_POST['nombre_deportes'];
                $deportes = $_POST['deportes'];
                $cantidad_deportes = count($deportes);

                echo "<h3>Resultado de los Deportes</h3>";
                echo "<p>Nombre: <strong>$nombre</strong></p>";
                echo "<p>Cantidad de deportes practicados: <strong>$cantidad_deportes</strong></p>";
                echo "<p>Deportes practicados:</p><ul>";

                // Iterar a través de cada deporte y mostrarlo
                foreach ($deportes as $deporte) {
                    echo "<li>$deporte</li>"; // Muestra cada deporte como un elemento de lista
                }
                
                echo "</ul>"; // Cierra la lista
            }
        }
        function controlGastos(){
            if(isset($_POST['ingresos'])== 4){
                $nombre = $_POST['nombre'];
                $ingresos = $_POST['ingresos'];
                echo "Nombre: $nombre <br>";
                if($ingresos == 4){
                    echo "Debe pagar impuestos";
                }else{
                    echo "No debe pagar impuestos";
                }
            echo "<br> <hr>";
            }
        }
        function gestionarContratos(){
            echo $_POST['contrato'];
        }
        // Procesar formularios según el botón que fue presionado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['ejercicio'] == 'Enviar Edad') {
                procesarFormularioEdad();
            } elseif ($_POST['ejercicio'] == 'Enviar Estudios') {
                procesarFormularioEstudios();
            } elseif ($_POST['ejercicio'] == 'Enviar Deportes') {
                procesarDeportes();
            } elseif ($_POST['ejercicio'] == 'Confirmar') {
                controlGastos();
            }elseif ($_POST['ejercicio'] == 'Enviar') {
                gestionarContratos();
            }
        }
        echo "<br><hr>";
        sitioActivo();
        mostrarNumeroAleatorio();
        mostrarTiposDatos();
        variableString();
        condicionalIf();
        tablaMultiplicarFor();
        tablaMultiplicarWhile();
        tablaMultiplarDoWhile();

    ?>

</body>
</html>
