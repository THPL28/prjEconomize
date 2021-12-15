<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina - inicial</title>
</head>
<body>
    <?php
    echo '<h2>BEM-VINDO!.'.$_SESSION['login'].'</h2>';
    echo'<a href="?logout"> Fazer logout!</a>';



    ?>
</body>
</html>