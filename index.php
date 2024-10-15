<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatorio</title>
</head>
<body>
    <h1>Generador de Número Aleatorio</h1>
    <?php
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
    ?>
</body>
</html>
