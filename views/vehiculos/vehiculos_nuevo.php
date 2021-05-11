<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php //echo $data["titulo"] 
            ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <h2><?php echo $data["titulo"] ?></h2>

    <div class="caja">
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off">

            <label for="">Placa</label>
            <input type="text" id="placa" name="placa" placeholder="Placa">

            <label for="">Marca</label>
            <input type="text" id="marca" name="marca" placeholder="Marca">

            <label for="">Modelo</label>
            <input type="text" id="modelo" name="modelo" placeholder="Modelo">

            <label for="">Año</label>
            <input type="text" id="anio" name="anio" placeholder="Año">

            <label for="">Color</label>
            <input type="text" id="color" name="color" placeholder="Color">

            <button id="guardar" name="guardar" type="submit" class="boton">Guardar</button>

        </form>
    </div>


</body>

</html>