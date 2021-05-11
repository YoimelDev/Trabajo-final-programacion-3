<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"] ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="body">

    <h2><?php echo $data["titulo"] ?></h2>

    <br><br>

    <a href="index.php?c=vehiculos&a=nuevo">Agregar</a>

    <br><br>

    <table border="1" width="80%" class="tabla">
        <thead class="head">
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>

        <tbody class="body-table">
            <?php foreach ($data["vehiculos"] as $dato) {
                echo "<tr>";
                echo "<td>"  . $dato["placa"] . "</td>";
                echo "<td>"  . $dato["marca"] . "</td>";
                echo "<td>"  . $dato["modelo"] . "</td>";
                echo "<td>"  . $dato["anio"] . "</td>";
                echo "<td>"  . $dato["color"] . "</td>";
                echo "<td> <a href='index.php?c=vehiculos&a=modificar&id=" . $dato["id"] . "'>Modificar</a> </td>";
                echo "<td> <a href='index.php?c=vehiculos&a=eliminar&id=" . $dato["id"] . "'>Eliminar</a> </td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

</body>

</html>