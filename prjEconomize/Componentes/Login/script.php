<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
                                                  
    if (!isset($_SESSION['login'])){
        
        if (isset($_POST['acao'])){
          $nome ='Tiago';
          $email ='tiago.looze28@gmail.com';
          $senha ='1234';

          $nomeform =$_POST['nome'];
          $emailform =$_POST['email'];
          $senhaform =$_POST['senha'];

        if($nomeform = $emailform = $senhaform){
            //Logado com sucesso 
            $_SESSION['login'] = true;
            header('Location: login.php');
            
        }else{
            //Algum erro ocorreu
            echo'Dados Inválidos!';
        }

        
        include('login.php');
    } else{
        if(isset($_GET['logout']){
        unset($_SESSION['login']);
        session_destroy();
        header('Location::login.php');
    }
        include('home.php');

    }

    


 ?>
</body>
</html>