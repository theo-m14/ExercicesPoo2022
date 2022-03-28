<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body id="calcBody">
    <h1>Bienvenue sur la calculatrice</h1>
    <a href="/">Retour au jeu des Animaux</a>
    <form action="" method="POST">
        <?php
            if($this->error != ''){
                echo '<p class="wrongAction">' . $this->error . '</p>';
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
    if($this->result != '') echo '<p>Le résultat est :' . $this->result . '</p>';
    ?>
</body>
</html>