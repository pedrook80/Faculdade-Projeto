<?php 

$nome = isset( $_POST[ 'nome' ] ) ? $_POST[ 'nome' ] : null ;
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
$senha = isset ($_POST[ 'senha' ] ) ? $_POST[ 'senha' ] : null;
$senha = md5($senha);

$connect = mysqli_connect('127.0.0.1','root','','projeto', '3308');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_assoc($select);
$logarray = $array['email'];

  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.php';</script>";
 
    }else{
      if($logarray == $email){
        
        echo"<script language='javascript' type='text/javascript'>
          alert('Esse login já existe');window.location.
          href='login.php'</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha')";
        $insert = mysqli_query($connect,$query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.php'</script>";
        }
      }
    }
?>