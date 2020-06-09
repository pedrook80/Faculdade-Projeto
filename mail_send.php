<?php
	if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}

// Se nenhum valor foi recebido, o usuário não realizou o captcha
if (!$captcha_data) {
    echo "Por favor, confirme o captcha.";
    exit;
}
$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LecxiUTAAAAAEWDaColh2pioSim1ujIngabD0_i&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
$to= "andersongandolfho@hotmail.com";
$nome= $_POST['nome'];
$email= $_POST['email'];
$assunto=$_POST['assunto'];
$mensagem= $_POST['mensagem'];

	$assunt= "$assunto";
		
	$corpo= "<strong>Mensagem de contato</strong><br><br>";
	$corpo.= "<strong>Nome: </strong> $nome";
	$corpo.= "<br><strong>Email: </strong> $email";
	$corpo.= "<br><strong>Assunto: </strong> $assunto";
	$corpo.= "<br><strong>Mensagem: </strong> $mensagem";
	
	
	$header="Content-Type: text/html; charset= ISO-8859-1\n";
	
	
mail($to,$assunt,$corpo,$headers);	

header("location:contato.php?mensagem=enviado")
?>