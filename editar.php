<?php 
session_start();

$id = $_SESSION['id'];
$nome = isset( $_POST[ 'nome' ] ) ? $_POST[ 'nome' ] : null ;
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
$senha = isset ($_POST[ 'senha' ] ) ? $_POST[ 'senha' ] : null;
$senha = md5($senha);

$connect = mysqli_connect('127.0.0.1','root','','projeto', '3308');
$query_select = "SELECT * FROM usuarios WHERE id_usuarios = '$id'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_assoc($select);
$logarray = $array['email'];

  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.php';</script>";
 
    }else{
      if($logarray == $email){
        $query = "UPDATE usuarios SET nome = '$nome', senha = '$senha', email = '$email' WHERE id = '$id'";
        $insert = mysqli_query($connect,$query);
		$track = "SELECT * FROM usuarios WHERE id_usuarios = '$id'";
		$sel = mysqli_query($connect, $track);
		$dados = mysqli_fetch_assoc($sel);
		$_SESSION['nome'] = $dados['nome'];
		  echo"<script language='javascript' type='text/javascript'>
          alert('Editado com sucesso!');window.location.
          href='profile.php'</script>";
		 
      }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível editar esse usuário');window.location
          .href='cadastro.php'</script>";
        }
      }
?>