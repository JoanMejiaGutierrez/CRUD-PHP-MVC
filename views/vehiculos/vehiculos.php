<?php

?>

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
    <br><br>
    <a href="index.php?c=vehiculos&a=agregar_vehiculo">Agregar</a>
    <br><br>
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelos</th>
                <th>Año</th>
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($data["vehiculos"] as $dato){
                    ?>
                    <tr>
                        <td><?php echo $dato["placa"]; ?></td>
                        <td><?php echo $dato["marca"]; ?></td>
                        <td><?php echo $dato["modelo"]; ?></td>
                        <td><?php echo $dato["anio"]; ?></td>
                        <td><?php echo $dato["color"]; ?></td>
                        <td><a href="index.php?c=vehiculos&a=editarVehiculo&id=<?php echo $dato["id"]; ?>">Editar</a>    |   <a href="index.php?c=vehiculos&a=eliminar_vehiculo&id=<?php echo $dato["id"]; ?>">Eliminar</a></td>
                    </tr>
                    
            <?php } ?>
        </tbody>
    </table>
</body>
</html>