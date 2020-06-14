<?php @ session_start()?>
<!DOCTYPE html >
<html>
	<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gotham</title>
<link href="css/bootstrap(gotham).css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/vsicon.png"></head>
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
         <li id='menu-item-37'><a href='login.php'>Login / Cadastro</a></li>
        <?php }  else { ?>
      <li id='menu-item-37'><a href='profile.php'>Perfil</a></li>
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
    <div class="thumbnail"><a><img class="cards" src="images/gotham-se.jpg" alt="Gotham" width="2000"/></a>
    <h4>GOTHAM</h4>
		<p class="tag">Antes de Batman, a cidade de Gotham já existia. James Gordon (Ben McKenzie) é um detetive iniciante polícia. Corajoso, sincero e ansioso para mostrar serviço, o recém-promovido tem como missão solucionar o caso do assassinato dos bilionários Thomas e Martha Wayne, um dos casos mais complexos da cidade. Com seu parceiro, o oficial Harvey Bullock (Donal Logue), Gordon conhece o único sobrevivente do assassinato: Bruce (David Mazuouz), um garoto de 12 anos, filho do casal, por quem ele imediatamente sente uma grande afeição.</p>
      <p class="text_column2">Criado por: Bruno Heller (2014)</p>
      <p class="text_column2">Gênero: Drama, Policial</p>
      <p class="text_column2">País: EUA</p>
      <p class="text_column2">Atores: Ben McKenzie, Donal Logue, David Mazouz, mais ...</p>
      <p class="text_column2">Status: Em produção</p>
      <p class="text_column2">Duração: 42 minutos</p>
		<a href="#" download="2 Broke Girls">Baixar Todas as Temporadas</a></div>
		<div class="ver"></div>
		<h3 class="thumb22"><span>1ª Temporada <strong style="color:red">EM BREVE</strong></span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:FD4013A545409CD57E8AE2BC75BEEE52BBA13558&dn=Gotham%201%c2%aa%20Temporada%20%282014%29%20BRRip%20720p%20Dual%20Audio%20%2b%20Legendas%20%28ToTTi9%29%20ThePirateFilmes&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.ccc.de%3a80%2fannounce" download="Gotham"><img src="images/download.png" /></a></span></h3>
			<!--<div id="epsetemps">
        		<ul class="temps" id="temp1">
            <li><a href="#" class="text">Gotham T01EP01</a></li>
            <li><a href="#" class="text">Gotham T01EP02</a></li>
            <li><a href="#" class="text">Gotham T01EP03</a></li>
            <li><a href="#" class="text">Gotham T01EP04</a></li>
            <li><a href="#" class="text">Gotham T01EP05</a></li>
            <li><a href="#" class="text">Gotham T01EP06</a></li>
            <li><a href="#" class="text">Gotham T01EP07</a></li>
            <li><a href="#" class="text">Gotham T01EP08</a></li>
            <li><a href="#" class="text">Gotham T01EP09</a></li>
            <li><a href="#" class="text">Gotham T01EP10</a></li>
            <li><a href="#" class="text">Gotham T01EP11</a></li>
            <li><a href="#" class="text">Gotham T01EP12</a></li>
            <li><a href="#" class="text">Gotham T01EP13</a></li>
            <li><a href="#" class="text">Gotham T01EP14</a></li>
            <li><a href="#" class="text">Gotham T01EP15</a></li>
            <li><a href="#" class="text">Gotham T01EP16</a></li>
            <li><a href="#" class="text">Gotham T01EP17</a></li>
            <li><a href="#" class="text">Gotham T01EP18</a></li>
            <li><a href="#" class="text">Gotham T01EP19</a></li>
            <li><a href="#" class="text">Gotham T01EP20</a></li>
            <li><a href="#" class="text">Gotham T01EP21</a></li>
            <li><a href="#" class="text">Gotham T01EP22</a></li>
            <li><a href="#" class="text">Gotham T01EP23</a></li>
            </ul></div>-->
		<h3 class="heading"><span>2ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:E008D3A54314F157110BE0D833307D4CFBE18E91&dn=Gotham%20-%202%c2%aa%20Temporada%20%282016%29%20Dual%20%c3%81udio%20%2b%20Legendas%20720p%20%28By-LuanHarper%29&tr=udp%3a%2f%2ftracker.trackerfix.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2710%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2710%2fannounce&tr=http%3a%2f%2fpow7.com%2fannounce&tr=%2audp%3a%2f%2fopen.demonii.com%3a1337%2fannounce&tr=udp%3a%2f%2fcoppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.istole.it%3a80%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=http%3a%2f%2ftracker.blazing.de%2fannounce&tr=http%3a%2f%2ft2.pow7.com%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2f%2fannounce" download="Gotham"><img src="images/download.png" /></a></span></h3>
			<div id="temp2">
			<ul id="lista_eps2">
     		<li><a href="Gotham-T02EP01.php" class="text">Gotham T02EP01</a></li>
            <li><a href="Gotham-T02EP02.php" class="text">Gotham T02EP02</a></li>
            <li><a href="Gotham-T02EP03.php" class="text">Gotham T02EP03</a></li>
            <li><a href="#" class="text">Gotham T02EP04 <strong style="color:green">(EM BREVE)</strong></a></li>
            <li><a href="#" class="text">Gotham T02EP05 <strong style="color:green">(EM BREVE)</strong></a></li>
            <li><a href="Gotham-T02EP06.php" class="text">Gotham T02EP06</a></li>
            <li><a href="Gotham-T02EP07.php" class="text">Gotham T02EP07</a></li>
            <li><a href="#" class="text">Gotham T02EP08 <strong style="color:green">(EM BREVE)</strong></a></li>
            <li><a href="Gotham-T02EP09.php" class="text">Gotham T02EP09</a></li>
            <li><a href="Gotham-T02EP10.php" class="text">Gotham T02EP10</a></li>
            <li><a href="Gotham-T02EP11.php" class="text">Gotham T02EP11</a></li>
            <li><a href="Gotham-T02EP12.php" class="text">Gotham T02EP12</a></li>
            <li><a href="Gotham-T02EP13.php" class="text">Gotham T02EP13</a></li>
            <li><a href="Gotham-T02EP14.php" class="text">Gotham T02EP14</a></li>
            <li><a href="Gotham-T02EP15.php" class="text">Gotham T02EP15</a></li>
            <li><a href="Gotham-T02EP16.php" class="text">Gotham T02EP16</a></li>
            <li><a href="Gotham-T02EP17.php" class="text">Gotham T02EP17</a></li>
            <li><a href="Gotham-T02EP18.php" class="text">Gotham T02EP18</a></li>
            <li><a href="Gotham-T02EP19.php" class="text">Gotham T02EP19</a></li>
            <li><a href="Gotham-T02EP20.php" class="text">Gotham T02EP20</a></li>
            <li><a href="Gotham-T02EP21.php" class="text">Gotham T02EP21</a></li>
            <li><a href="Gotham-T02EP22.php" class="text">Gotham T02EP22</a></li>
            </ul></div>
			<h3 class="heading"><span>3ª Temporada <strong style="color:#717272; font-size: 14px">Em Breve Mais Epsodios</strong></span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:0F798C2582A589C9EC32BB4B810FA08186666AFD&dn=Gotham%202017%203%c2%aa%20Temporada%20Completa%20%5bWEB-DL%5d%20WWW.BLUDV.COM&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2750%2fannounce&tr=udp%3a%2f%2fexplodie.org%3a6969%2fannounce&tr=http%3a%2f%2fglotorrents.pw%3a80%2fannounce&tr=udp%3a%2f%2fp4p.arenabg.com%3a1337%2fannounce&tr=udp%3a%2f%2ftorrent.gresille.org%3a80%2fannounce&tr=udp%3a%2f%2ftracker.aletorrenty.pl%3a2710%2fannounce&tr=udp%3a%2f%2ftracker.coppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.piratepublic.com%3a1337%2fannounce" download="Gotham"><img src="images/download.png" /></a></span></h3>
            <div>
            <ul>
			<p><a class="text2"></a></p>
            <li><a href="Gotham-T03EP01.php" class="text">Gotham T03EP01</a></li>
            <li><a href="Gotham-T03EP02.php" class="text">Gotham T03EP02</a></li>
            <li><a href="Gotham-T03EP03.php" class="text">Gotham T03EP03</a></li>
            <li><a href="Gotham-T03EP04.php" class="text">Gotham T03EP04</a></li>
            <li><a href="Gotham-T03EP05.php" class="text">Gotham T03EP05</a></li>
            <li><a href="Gotham-T03EP06.php" class="text">Gotham T03EP06 / <a href="Gotham-T03EP06-leg" style="text-decoration:none; color:green">LEGENDADO</a></a></li>
            <li><a href="Gotham-T03EP07-leg.php" class="text">Gotham T03EP07 / <a href="Gotham-T03EP07-leg" style="text-decoration:none; color:green">LEGENDADO</a></li>
            <li><a href="Gotham-T03EP08-leg.php" class="text">Gotham T03EP08 / <a href="Gotham-T03EP08-leg" style="text-decoration:none; color:green">LEGENDADO</a></li>
            <li><a href="Gotham-T03EP09.php" class="text">Gotham T03EP09 <a href="Gotham-T03EP09-leg" style="text-decoration:none; color:green">LEGENDADO</a></a></li>
            <li><a href="Gotham-T03EP10.php" class="text">Gotham T03EP10 <a href="Gotham-T03EP10-leg" style="text-decoration:none; color:green">LEGENDADO</a></a></li>
            <li><a href="Gotham-T03EP11.php" class="text">Gotham T03EP11 <a href="Gotham-T03EP11-leg" style="text-decoration:none; color:green">LEGENDADO</a></a></li>
            <li><a href="Gotham-T03EP12-leg.php" class="text">Gotham T03EP12 <a href="Gotham-T03E12-leg" style="text-decoration:none; color:green">LEGENDADO</a></a></li>
            <li><a href="Gotham-T03EP13-leg.php" class="text">Gotham T03EP13 <a href="Gotham-T03EP13-leg" style="text-decoration:none; color:green">LEGENDADO</a></a></li>
            <li><a href="Gotham-T03EP14-leg.php" class="text">Gotham T03EP14 <a href="Gotham-T03EP14-leg" style="text-decoration:none; color:green">LEGENDADO</a> <img src="images/new.png" alt="Novo episodio '3ª Temporada episodio 14 Legendado" width="29px"/></a></li>
            <!--<li><a href="#" class="text">Gotham T03EP15</a></li>
            <li><a href="#" class="text">Gotham T03EP16</a></li>
            <li><a href="#" class="text">Gotham T03EP17</a></li>
            <li><a href="#" class="text">Gotham T03EP18</a></li>
            <li><a href="#" class="text">Gotham T03EP19</a></li>
            <li><a href="#" class="text">Gotham T03EP20</a></li>
            <li><a href="#" class="text">Gotham T03EP21</a></li>
            <li><a href="#" class="text">Gotham T03EP22</a></li>
            <li><a href="#" class="text">Gotham T03EP23</a></li>
            --></ul></div></div>
  </div>
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

