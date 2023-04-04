<?php
    $n1 = 0;
    $n2 = 0;
    $result = 0;
    $conta = "";
    $calc = '';

    if(isset($_POST['calcular'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['calcular'];

        switch($_POST['conta']){
            case "+":
             $result = $n1 + $n2;
            break;
            case "-":
             $result = $n1 - $n2;
            break;
            case "*":
             $result = $n1 * $n2;
            break;
            case "/":
             $result = $n1 / $n2;
            break;
            default:
             /* $result = "Preencha corretamente"; */
             echo"<script>alert('Preencha os espaços corretamente');</script>";
            break;
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        Primeiro numero <br>
        <input type="number" name="n1" value= <?= $n1 ?> required > <br>
        Segundo numero  <br>
        <input type="number" name="n2" value= <?= $n2 ?> required  > <br>
        Sinal da conta <br>
        <input type="text" name="conta" value= <?= $conta ?> > <br>
        <input class="btn" type="reset" value="Reiniciar">
        <input class="btn" type="submit" name="calcular" value="Calcular">
        <br><br>
        
        <p>Resultado da soma: <?= $result ?> </p>
    </form>

</body>
</html>