<?php 

session_start();

$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
$entrar = isset( $_POST[ 'entrar' ] ) ? $_POST[ 'entrar' ] : null ;
$senha = isset ($_POST[ 'senha' ] ) ? $_POST[ 'senha' ] : null;
$senha = md5($senha);

$connect = mysqli_connect('127.0.0.1','root','','projeto','3308');
$ver = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$verifica = mysqli_query($connect,$ver);
$dados = mysqli_fetch_assoc($verifica);
  
  if (isset($dados)) {
     
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $dados['nome'];
	  	$_SESSION['id'] = $dados['id_usuarios'];
        setcookie("email",$email);
        header("Location:profile.php");
      }
      else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";   
      }
?>