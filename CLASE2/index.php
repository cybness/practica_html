<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario_ hp</title>
</head>
<body>

    <form action="connect.php" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre"><br>
    
    <!--<label for="email">Email:</label>
    <input type="text" name="email"></br>-->

    <input type="submit" value="Enviar"><br>
    </form>

    <?php
        #$conn;
        #echo $_POST["nombre"];
    ?>

    
</body>
</html>