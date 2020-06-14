<?php @ session_start()?>
<!DOCTYPE html >
<html>
	<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap(legends-of).css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/vsicon.png">
<title>DC's Legends Of Tomorrow</title></head>
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
    <div class="thumbnail"><img src="images/DCs-Legends-Of-Tomorrow.jpg" alt="" width="2000" class="cards"/>
      <h4>DC'S LEGENDS OF TOMORROW</h4>
      <p class="tag">Quando heróis sozinhos não são o suficiente… o mundo precisa de lendas. Rip Hunter (Arthur Darvill) viaja no tempo para reunir um improvável time de heróis e vilões para ajudá-lo a impedir um apocalipse que ameaça destruir, não apenas a terra, mas o próprio tempo.
      	<p>Criado por: Andrew Kreisberg, Greg Berlanti, Marc Guggenheim (2016)</p>
		<p>Gênero: Ação, Aventura, Ficção Científica</p>
		<p>País: EUA</p>
		<p>Atores: Victor Garber, Brandon Routh, Caity Lotz, mais...</p>
		<p>Status: Em produção</p>
		<p>Duração: 42 minutos</p></p>
		<div class="ver"></div>
		<h3 class="thumb22"><span>1ª Temporada</span></h3>
			<div id="epsetemps">
        		<ul class="temps" id="temp1">
            <li><a href="#" class="text">DCs-Legends Of Tomorrow T01EP01 <strong style="color:green">EM BREVE</strong></a></li>
            <li><a href="#" class="text">DCs-Legends Of Tomorrow T01EP02 <strong style="color:green">EM BREVE</strong></a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP03.php" class="text">DCs-Legends Of Tomorrow T01EP03</a></li>
            <li><a href="#" class="text">DCs-Legends Of Tomorrow T01EP04 <strong style="color:green">EM BREVE</strong></a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP05.php" class="text">DCs-Legends Of Tomorrow T01EP05</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP06.php" class="text">DCs-Legends Of Tomorrow T01EP06</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP07.php" class="text">DCs-Legends Of Tomorrow T01EP07</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP08.php" class="text">DCs-Legends Of Tomorrow T01EP08</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP09.php" class="text">DCs-Legends Of Tomorrow T01EP09</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP10.php" class="text">DCs-Legends Of Tomorrow T01EP10</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP11.php" class="text">DCs-Legends Of Tomorrow T01EP11</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP12.php" class="text">DCs-Legends Of Tomorrow T01EP12</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP13.php" class="text">DCs-Legends Of Tomorrow T01EP13</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP14.php" class="text">DCs-Legends Of Tomorrow T01EP14</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP15.php" class="text">DCs-Legends Of Tomorrow T01EP15</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T01EP16.php" class="text">DCs-Legends Of Tomorrow T01EP16</a></li>
          </ul></div>
			<h3 class="thumb22"><span>2ª Temporada</span></h3>
			<div id="epsetemps2">
        		<ul class="temps" id="temp2">
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T02EP01.php" class="text">DCs Legends Of Tomorrow T02EP01</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T02EP02-leg.php" class="text">DCs Legends Of Tomorrow T02EP02 LEGENDADO</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T02EP03-leg.php" class="text">DCs Legends Of Tomorrow T02EP03 LEGENDADO</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T02EP04-leg.php" class="text">DCs Legends Of Tomorrow T02EP04 LEGENDADO</a></li>
            <li><a href="DCs-Legends-Of-Tomorrow/DCs-Legends-Of-Tomorrow-T02EP05-leg.php" class="text">DCs Legends Of Tomorrow T02EP05 LEGENDADO <img src="images/new.png" alt="Novo episodio '2ª Temporada Episodio 5'" width="28px"/></a></li>
            </ul></div></div>
	</div></div>
  <!-- Footer Section -->
  <footer id="contact">
    <p class="hero_header">SENTIU FALTA DE ALGUMA SÉRIE </p>
    <div class="button"><a style="text-decoration:none; color:#FFFFFF" href="contato.php">CONTATE-NOS</a></div>
  </footer>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2020 - <a style="text-decoration:none" href="index.php"><strong style="color:#12E19D">VIA SÉRIE </strong></a></div>
</div>
<!-- Main Container Ends -->
</body>
</html>

