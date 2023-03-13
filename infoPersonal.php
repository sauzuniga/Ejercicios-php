<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion personal</title>
    <style>
        table, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form action="infoPersonal.php" method="post">
        Nombre completo:    <input type="text" name="nombre" ><br>
        Lugar de nacimiento(país y departamento):  <input type="text" name="lugar_de_nacimiento" ><br>
        Edad: <input type="text" name="edad" ><br>
        Codigo del estudiante:  <input type="text" name="codigo" ><br>
        <input type="submit" name="btnenviar">
</form>
        <?php
        $nombreCom=$_POST["nombre"];
        $lugarNacimiento=$_POST["lugar_de_nacimiento"];
        $edad=$_POST["edad"];
        $cod=$_POST["codigo"];

        ?>
        <br>
        <table>
            <tr>
                <th>Nombre completo</th>
                <th>Lugar de nacimiento</th>
                <th>edad</th>
                <th>Codigo de estudiante</th>
            </tr>
            <tr>
                <td><?php echo $nombreCom ?></td>
                <td><?php echo $lugarNacimiento ?></td>
                <td><?php echo $edad ?></td>
                <td><?php echo $cod ?></td>

            </tr>
        </table>
</body>
</html>