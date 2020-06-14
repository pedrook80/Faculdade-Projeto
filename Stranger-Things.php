<?php @ session_start()?>
<!DOCTYPE html >
<html>
	<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap(stranger).css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/vsicon.png">
<title>Stranger Things</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83545183-7', 'auto');
  ga('send', 'pageview');

</script></head>
<body>	
<!-- Main Container -->
<div class="corp"><div align="center" class="center"><img alt="" src="images/logo2.png"/></div>
 <div class="container">
  <!-- Header -->
  <header class="header">
  </header>
<div class=" menu-item-43">
    <nav id="menu" class="container">
      <ul id="menu-top-menu" class="sf-menu">
        <li id="menu-item-09"><a href="index.php">Início</a></li>
        <li id="menu-item-10"><a href="categoria123.php">#</a></li>
        <li id="menu-item-11"><a href="categoriaA.php">A</a></li>
        <li id="menu-item-12"><a href="categoriaB.php">B</a></li>
        <li id="menu-item-13"><a href="categoriaC.php">C</a></li>
        <li id="menu-item-14"><a href="categoriaD.php">D</a></li>
        <li id="menu-item-15"><a href="categoriaE.php">E</a></li>
        <li id="menu-item-16"><a href="categoriaF.php">F</a></li>
        <li id="menu-item-17"><a href="categoriaG.php">G</a></li>
        <li id="menu-item-18"><a href="categoriaH.php">H</a></li>
        <li id="menu-item-19"><a href="categoriaI.php">I</a></li>
        <li id="menu-item-20"><a href="categoriaJ.php">J</a></li>
        <li id="menu-item-21"><a href="categoriaK.php">K</a></li>
        <li id="menu-item-22"><a href="categoriaL.php">L</a></li>
        <li id="menu-item-23"><a href="categoriaM.php">M</a></li>
        <li id="menu-item-24"><a href="categoriaN.php">N</a></li>
        <li id="menu-item-25"><a href="categoriaO.php">O</a></li>
        <li id="menu-item-26"><a href="categoriaP.php">P</a></li>
        <li id="menu-item-27"><a href="categoriaQ.php">Q</a></li>
        <li id="menu-item-28"><a href="categoriaR.php">R</a></li>
        <li id="menu-item-29"><a href="categoriaS.php">S</a></li>
        <li id="menu-item-30"><a href="categoriaT.php">T</a></li>
        <li id="menu-item-31"><a href="categoriaU.php">U</a></li>
        <li id="menu-item-32"><a href="categoriaV.php">V</a></li>
        <li id="menu-item-33"><a href="categoriaW.php">W</a></li>
        <li id="menu-item-34"><a href="categoriaX.php">X</a></li>
        <li id="menu-item-35"><a href="categoriaY.php">Y</a></li>
        <li id="menu-item-36"><a href="categoriaZ.php">Z</a></li>
        <?php
            if ((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { ?>
         <li id='menu-item-38'><a href='login.php'>Login / Cadastro</a></li>
        <?php }  else { ?>
      <li id='menu-item-38'><a href='profile.php'>Perfil</a></li>
      <?php  } ?>
      </ul>
    </nav></div>
    	<select id="select" class="container" onchange="window.location=this.value">
        	<option value="#" selected="selected">Menu - Lista de Série s A - Z...</option>
    		<option value="index.php"> Início</option>
    		<option value="categoria123.php">Categoria #</option>
    		<option value="categoriaA.php">Categoria A</option>
   	 		<option value="categoriaB.php">Categoria B</option>
    		<option value="categoriaC.php">Categoria C</option>
    		<option value="categoriaD.php">Categoria D</option>
    		<option value="categoriaE.php">Categoria E</option>
    		<option value="categoriaF.php">Categoria F</option>
    		<option value="categoriaG.php">Categoria G</option>
    		<option value="categoriaH.php">Categoria H</option>
    		<option value="categoriaI.php">Categoria I</option>
    		<option value="categoriaJ.php">Categoria J</option>
    		<option value="categoriaK.php">Categoria K</option>
    		<option value="categoriaL.php">Categoria L</option>
    		<option value="categoriaM.php">Categoria M</option>
    		<option value="categoriaN.php">Categoria N</option>
    		<option value="categoriaO.php">Categoria O</option>
    		<option value="categoriaP.php">Categoria P</option>
    		<option value="categoriaQ.php">Categoria Q</option>
    		<option value="categoriaR.php">Categoria R</option>
    		<option value="categoriaS.php">Categoria S</option>
    		<option value="categoriaT.php">Categoria T</option>
    		<option value="categoriaU.php">Categoria U</option>
    		<option value="categoriaV.php">Categoria V</option>
    		<option value="categoriaW.php">Categoria W</option>
    		<option value="categoriaX.php">Categoria X</option>
    		<option value="categoriaY.php">Categoria Y</option>
    		<option value="categoriaZ.php">Categoria Z</option>
        <?php
          if ((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { ?>
         <option value="login.php">Login / Cadastro</option>
        <?php }  else { ?>
      <option value="profile.php">Perfil</option>
      <?php  } ?>
      </select>
  <div class="gallery">
<div class="thumbnail"><a><img src="images/stranger-things.jpg" alt="Assista série online." width="2000" class="cards"/></a>
    <h4><a href="Stranger-Things.php">STRANGER THINGS</a></h4>
		<p class="tag">Ambientada em Montauk, Long Island, conta a história de um garoto que desaparece misteriosamente. Enquanto a polícia, a família e os amigos procuram respostas, eles acabam mergulhando em um extraordinário mistério, envolvendo um experimento secreto do governo, forças sobrenaturias e uma garotinha muito, muito estranha.</p>
      <p class="text_column2">Criado por: Matt Duffer, Ross Duffer (2016)</p>
      <p class="text_column2">Gênero: Drama, Fantasia, Suspense</p>
      <p class="text_column2">País: EUA</p>
      <p class="text_column2">Atores: Winona Ryder, David Harbour, Millie Brown, mais...</p>
      <p class="text_column2">Status: Em produção</p>
      <p class="text_column2">Duração: 60 minutos</p>
		<div class="ver"></div>
		<h3 class="thumb22"><span>1ª Temporada</span></h3>
			<div id="epsetemps">
        		<ul class="temps" id="temp1">
            <li><a href="Stranger-Things-T01EP01.php" class="text">Stranger Things T01EP01</a></li>
            <li><a href="Stranger-Things-T01EP02.php" class="text">Stranger Things T01EP02</a></li>
            <li><a href="Stranger-Things-T01EP03.php" class="text">Stranger Things T01EP03</a></li>
            <li><a href="Stranger-Things-T01EP04.php" class="text">Stranger Things T01EP04</a></li>
            <li><a href="Stranger-Things-T01EP05.php" class="text">Stranger Things T01EP05</a></li>
            <li><a href="Stranger-Things-T01EP06.php" class="text">Stranger Things T01EP06</a></li>
            <li><a href="Stranger-Things-T01EP07.php" class="text">Stranger Things T01EP07</a></li>
            <li><a href="Stranger-Things-T01EP08.php" class="text">Stranger Things T01EP08</a></li>
            </ul></div>
		<h3 class="heading"><span style="color:#875F08">2ª Temporada Em breve</span></h3></div></div>
            <!-- Seção final -->
  			<footer id="contact">
    			<p class="hero_header text_column2">SENTIU FALTA DE ALGUMA SÉRIE </p>
    			<div class="button"><a style="text-decoration:none; color:#FFFFFF" href="contato.php">CONTATE-NOS</a></div>
  			</footer>
  <!-- Seção fim -->
  		<div class="copyright">&copy;2020 - <a style="text-decoration:none" href="index.php"><strong style="color:#12E19D">VIA SÉRIE </strong></a></div>
        </div>
        </body>
</html>
