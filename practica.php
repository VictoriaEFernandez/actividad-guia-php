<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a Base de Datos</title>
</head>
<body>
    <h1>Resultado de la Conexión</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";  // Contraseña vacía
    $dbname = "sistema-alojamiento-bd";  // Cambia esto por el nombre de tu base de datos

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("<p style='color:red;'>Error de conexión: " . $conn->connect_error . "</p>");
    }
    echo "<p style='color:green;'>Conexión exitosa</p>";

    // Aquí puedes ejecutar tus consultas SQL y mostrar los resultados
    // Ejecutar una consulta
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);

    // Mostrar los resultados
    if ($result->num_rows > 0) {
        echo "<h2>Usuarios registrados:</h2><ul>";
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["Nombre"] . " " . $row["Apellido"] . " (" . $row["CorreoElectronico"] . ")</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No se encontraron usuarios.</p>";
    }
    // Consulta SQL para seleccionar todos los usuarios y su rol
    $sql = "
        SELECT u.UsuarioID, u.Nombre, u.Apellido, u.CorreoElectronico, r.Nombre AS Rol
        FROM usuarios u
        LEFT JOIN roles r ON u.RolID = r.RolID
    ";

    $result = $conn->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Mostrar resultados en una tabla
        echo "<table border='1'>
                <tr>
                    <th>UsuarioID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo Electrónico</th>
                    <th>Rol</th>
                </tr>";
        
        // Recorrer los resultados y mostrarlos
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["UsuarioID"] . "</td>
                    <td>" . $row["Nombre"] . "</td>
                    <td>" . $row["Apellido"] . "</td>
                    <td>" . $row["CorreoElectronico"] . "</td>
                    <td>" . $row["Rol"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron usuarios.";
    }
    // Cerrar conexión
    $conn->close();
    ?>
</body>
</html>
