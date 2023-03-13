<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadora.php" method="post">
        <input type="text" name="n1" ><br>
        <br>
        <input type="text" name="n2">
        <select name="operacion" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>
        <br>
        <input type="submit">
    </form>
    <?php
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    $operacion=$_POST["operacion"];
    $resultado=0;
    switch ($operacion) {
        case '+':
            $resultado=$n1+$n2;
            break;
        case "-":
            $resultado=$n1-$n2;
            break;
        case "*":
            $resultado=$n1*$n2;
            break;
        case "/":
            $resultado=$n1/$n2;
            break;
    }
    echo "El resultado de la operacion es $resultado";
    ?>
</body>
</html>