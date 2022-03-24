<?php

use App\Math\Calculatrice;

if(!empty($_POST)){
    $validOperation = ['add', 'sub', 'mult','div','average'];
    if(in_array($_POST['action'],$validOperation)){
        $calculatrice = new Calculatrice;
        switch($_POST['action']){
            case 'add':
                $result = $calculatrice->add(floatval($_POST['number1']), floatval($_POST['number2']));
                break;
            case 'sub':
                $result = $calculatrice->substract(floatval($_POST['number1']), floatval($_POST['number2']));
                break;
            case 'mult':
                $result = $calculatrice->multiply(floatval($_POST['number1']), floatval($_POST['number2']));
                break;
            case 'div':
                $result = $calculatrice->divide(floatval($_POST['number1']), floatval($_POST['number2']));
                break;
            default:
                $result = $calculatrice->average(floatval($_POST['number1']), floatval($_POST['number2']));
        }
    }else{
        $error = 'Veuillez saisir une opération valide';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <?php
            if(isset($error)){
                echo '<p class="wrongAction">' . $error . '</p>';
            }
        ?>
        <input type="number" name="number1" placeholder="Nombre 1">
        <input type="number" name="number2" placeholder="Nombre 2">
        <select name="action" id="">
            <option value="add">Addition</option>
            <option value="sub">Soustraction</option>
            <option value="mult">Multiplication</option>
            <option value="div">Division</option>
            <option value="average">Moyenne</option>
        </select>
        <button type="submit">Calculer</button>
    </form>
    <?php
    if(isset($result)) echo '<p>Le résultat est :' . $result . '</p>';
    ?>
</body>
</html>