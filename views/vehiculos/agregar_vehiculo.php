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

    <form id="nuevoVehiculo" name="nuevoVehiculo" method="POST" action="index.php?c=Vehiculos&a=guardarVehiculo" autocomplete="off">
        <label for="">placa</label>
        <input type="text" id="txtPlaca" name="txtPlaca"><br>
        <label for="">Marca</label>
        <input type="text" id="txtMarca" name="txtMarca"><br>
        <label for="">Modelo</label>
        <input type="text" id="txtModelo" name="txtModelo"><br>
        <label for="">Año</label>
        <input type="text" id="txtAnio" name="txtAnio"><br>
        <label for="">Color</label>
        <input type="text" id="txtColor" name="txtColor"><br>

        <button type="submit" id="guardar" name="guardar">Guardar</button>
    </form>
</body>
</html>