<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
</head>
<body>
    <h2><?php echo $data["titulo"]; ?></h2>

    <form id="editarVehiculo" name="editarVehiculo" method="POST" action="index.php?c=Vehiculos&a=editar_vehiculo&id=<?php echo $data["vehiculo"]["id"]; ?>" autocomplete="off">
        <input type="text" name="id" style="display: none;" value=<?php echo $data["vehiculo"]["id"] ?>>
        <label for="">placa</label>
        <input type="text" id="txtPlaca" name="txtPlaca" value=<?php echo $data["vehiculo"]["placa"] ?>><br>
        <label for="">Marca</label>
        <input type="text" id="txtMarca" name="txtMarca" value=<?php echo $data["vehiculo"]["marca"] ?>><br>
        <label for="">Modelo</label>
        <input type="text" id="txtModelo" name="txtModelo" value=<?php echo $data["vehiculo"]["modelo"] ?>><br>
        <label for="">Año</label>
        <input type="text" id="txtAnio" name="txtAnio" value=<?php echo $data["vehiculo"]["anio"] ?>><br>
        <label for="">Color</label>
        <input type="text" id="txtColor" name="txtColor" value=<?php echo $data["vehiculo"]["color"] ?>><br>

        <button type="submit" id="editar" name="editar">Editar</button>
    </form>
</body>
</html>