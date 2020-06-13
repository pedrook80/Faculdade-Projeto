<?php @ session_start()?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap(2broke).css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/vsicon.png">
<title>2 Broke Girls</title>
</head>			
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
        <li id="menu-item-09"><a href="index.html">Início</a></li>
        <li id="menu-item-10"><a href="categoria123.html">#</a></li>
        <li id="menu-item-11"><a href="categoriaA.html">A</a></li>
        <li id="menu-item-12"><a href="categoriaB.html">B</a></li>
        <li id="menu-item-13"><a href="categoriaC.html">C</a></li>
        <li id="menu-item-14"><a href="categoriaD.html">D</a></li>
        <li id="menu-item-15"><a href="categoriaE.html">E</a></li>
        <li id="menu-item-16"><a href="categoriaF.html">F</a></li>
        <li id="menu-item-17"><a href="categoriaG.html">G</a></li>
        <li id="menu-item-18"><a href="categoriaH.html">H</a></li>
        <li id="menu-item-19"><a href="categoriaI.html">I</a></li>
        <li id="menu-item-20"><a href="categoriaJ.html">J</a></li>
        <li id="menu-item-21"><a href="categoriaK.html">K</a></li>
        <li id="menu-item-22"><a href="categoriaL.html">L</a></li>
        <li id="menu-item-23"><a href="categoriaM.html">M</a></li>
        <li id="menu-item-24"><a href="categoriaN.html">N</a></li>
        <li id="menu-item-25"><a href="categoriaO.html">O</a></li>
        <li id="menu-item-26"><a href="categoriaP.html">P</a></li>
        <li id="menu-item-27"><a href="categoriaQ.html">Q</a></li>
        <li id="menu-item-28"><a href="categoriaR.html">R</a></li>
        <li id="menu-item-29"><a href="categoriaS.html">S</a></li>
        <li id="menu-item-30"><a href="categoriaT.html">T</a></li>
        <li id="menu-item-31"><a href="categoriaU.html">U</a></li>
        <li id="menu-item-32"><a href="categoriaV.html">V</a></li>
        <li id="menu-item-33"><a href="categoriaW.html">W</a></li>
        <li id="menu-item-34"><a href="categoriaX.html">X</a></li>
        <li id="menu-item-35"><a href="categoriaY.html">Y</a></li>
        <li id="menu-item-36"><a href="categoriaZ.html">Z</a></li>
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
    		<option value="index.html"> Início</option>
    		<option value="categoria123.html">Categoria #</option>
    		<option value="categoriaA.html">Categoria A</option>
   	 		<option value="categoriaB.html">Categoria B</option>
    		<option value="categoriaC.html">Categoria C</option>
    		<option value="categoriaD.html">Categoria D</option>
    		<option value="categoriaE.html">Categoria E</option>
    		<option value="categoriaF.html">Categoria F</option>
    		<option value="categoriaG.html">Categoria G</option>
    		<option value="categoriaH.html">Categoria H</option>
    		<option value="categoriaI.html">Categoria I</option>
    		<option value="categoriaJ.html">Categoria J</option>
    		<option value="categoriaK.html">Categoria K</option>
    		<option value="categoriaL.html">Categoria L</option>
    		<option value="categoriaM.html">Categoria M</option>
    		<option value="categoriaN.html">Categoria N</option>
    		<option value="categoriaO.html">Categoria O</option>
    		<option value="categoriaP.html">Categoria P</option>
    		<option value="categoriaQ.html">Categoria Q</option>
    		<option value="categoriaR.html">Categoria R</option>
    		<option value="categoriaS.html">Categoria S</option>
    		<option value="categoriaT.html">Categoria T</option>
    		<option value="categoriaU.html">Categoria U</option>
    		<option value="categoriaV.html">Categoria V</option>
    		<option value="categoriaW.html">Categoria W</option>
    		<option value="categoriaX.html">Categoria X</option>
    		<option value="categoriaY.html">Categoria Y</option>
    		<option value="categoriaZ.html">Categoria Z</option>
            <?php
            if ((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { ?>
         <option value="login.php">Login / Cadastro</option>
        <?php }  else { ?>
      <option value="profile.php">Perfil</option>
      <?php  } ?>
    	</select>
  <div class="gallery">
<div class="thumbnail"><a href="2-Broke-Girls.php"><img src="images/2broke.jpg" alt="Assista série online." width="600" height="348" class="cards"/></a>
    <h4><a href="2-Broke-Girls.php">2 BROKE GIRLS</a></h4>
      <p class="tag">2 Broke Girls narra a vida de duas garçonetes: Max, uma garota pobre, e Caroline, que nasceu rica mas perdeu tudo por causa de seu pai. As duas se tornam amigas quandocomeçama trabalhar juntas em um restaurante. Elas tem um sonho de abrir um loja de cupcakes mas para isso precisam juntar 250 mil doláres. A cada episódio é mostrado a dificuldade que elas têm em pagar as contas e tentar economizar para realizar o sonho de suas vidas. O humor da série se dá, principalmente, nos momentos em que Max apresenta à Caroline coisas do cotidiano de um bairro pobre, que ela jamais havia vivenciado, e Caroline apresentando à Max costumes sofisticados.</p>
      <p class="text_column2">Criado por: Whitney Cummings, Michael Patrick King</p>
      <p class="text_column2">Gênero: Comédia</p>
      <p class="text_column2">País: EUA</p>
      <p class="text_column2">Atores: Kat Dennings, Beth Behrs, Matthew Moy </p>
      <p class="text_column2">Status: Em produção</p>
      <p class="text_column2">Duração: 22 minutos</p>
      <div class="position_baixo">
      <div class="alinhamento">
          <h3 class="thumb22"><span>1ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:9C29DBB28FF4176B00EB043214D045478DA1F3ED&dn=2%20Broke%20Girls%201%c2%aa%20Temporada%20%282011%29%20BDRip%20720p%20Dual%20Audio%20%28ToTTi9%29%20ThePirateFilmes&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.ccc.de%3a80%2fannounce" download="2 Broke Girls"><img src="images/download.png" style="width: 30px"  /></a></span></h3>
		<div id="epsetemps">
        <ul class="temps" id="temp1">
        	<li><a href="2-Broke-Girls-T01EP01.php" class="text">2 Broke Girls T01EP01</a></li>
            <li><a href="2-Broke-Girls-T01EP02.php" class="text">2 Broke Girls T01EP02</a></li>
            <li><a href="2-Broke-Girls-T01EP03.php" class="text">2 Broke Girls T01EP03</a></li>
            <li><a href="2-Broke-Girls-T01EP04.php" class="text">2 Broke Girls T01EP04</a></li>
            <li><a href="2-Broke-Girls-T01EP05.php" class="text">2 Broke Girls T01EP05</a></li>
            <li><a href="2-Broke-Girls-T01EP06.php" class="text">2 Broke Girls T01EP06</a></li>
            <li><a href="2-Broke-Girls-T01EP07.php" class="text">2 Broke Girls T01EP07</a></li>
            <li><a href="2-Broke-Girls-T01EP08.php" class="text">2 Broke Girls T01EP08</a></li>
          	<li><a href="2-Broke-Girls-T01EP09.php" class="text">2 Broke Girls T01EP09</a></li>
            <li><a href="2-Broke-Girls-T01EP10.php" class="text">2 Broke Girls T01EP10</a></li>
            <li><a href="2-Broke-Girls-T01EP11.php" class="text">2 Broke Girls T01EP11</a></li>
            <li><a href="2-Broke-Girls-T01EP12.php" class="text">2 Broke Girls T01EP12</a></li>
            <li><a href="2-Broke-Girls-T01EP13.php" class="text">2 Broke Girls T01EP13</a></li>
            <li><a href="2-Broke-Girls-T01EP14.php" class="text">2 Broke Girls T01EP14</a></li>
            <li><a href="2-Broke-Girls-T01EP15.php" class="text">2 Broke Girls T01EP15</a></li>
            <li><a href="2-Broke-Girls-T01EP16.php" class="text">2 Broke Girls T01EP16</a></li>
            <li><a href="2-Broke-Girls-T01EP17.php" class="text">2 Broke Girls T01EP17</a></li>
            <li><a href="2-Broke-Girls-T01EP18.php" class="text">2 Broke Girls T01EP18</a></li>
            <li><a href="2-Broke-Girls-T01EP19.php" class="text">2 Broke Girls T01EP19</a></li>
            <li><a href="2-Broke-Girls-T01EP20.php" class="text">2 Broke Girls T01EP20</a></li>
            <li><a href="2-Broke-Girls-T01EP21.php" class="text">2 Broke Girls T01EP21</a></li>
            <li><a href="2-Broke-Girls-T01EP22.php" class="text">2 Broke Girls T01EP22</a></li>
            <li><a href="2-Broke-Girls-T01EP23.php" class="text">2 Broke Girls T01EP23</a></li>
            <li><a href="2-Broke-Girls-T01EP24.php" class="text">2 Broke Girls T01EP24</a></li>
          </ul></div></div>
			<div class="alinhamento1">
          <h3 class="heading"><span>2ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:4B1C6E88AA8762D272D0DD8A336298F6468E2428&dn=2%20Broke%20Girls%20-%202%c2%aa%20Temporada%20%282012%29%20Dublado%20720p%20%28By-LuanHarper%29&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.trackerfix.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2710%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2710%2fannounce&tr=http%3a%2f%2fpow7.com%2fannounce&tr=%2audp%3a%2f%2fopen.demonii.com%3a1337%2fannounce&tr=udp%3a%2f%2fcoppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.istole.it%3a80%2fannounce&tr=http%3a%2f%2ftracker.blazing.de%2fannounce&tr=http%3a%2f%2ft2.pow7.com%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2f%2fannounce" download="2 Broke Girls"><img src="images/download.png" style="width: 30px"   /></a></span></h3>
				  <div id="temp2"><ul id="lista_eps2">
			<li><a href="2-Broke-Girls-T02EP01.php" class="text">2 Broke Girls T02EP01</a></li>
			<li><a href="2-Broke-Girls-T02EP02.php" class="text">2 Broke Girls T02EP02</a></li>
			<li><a href="2-Broke-Girls-T02EP03.php" class="text">2 Broke Girls T02EP03</a></li>
            <li><a href="2-Broke-Girls-T02EP04.php" class="text">2 Broke Girls T02EP04</a></li>
            <li><a href="2-Broke-Girls-T02EP05.php" class="text">2 Broke Girls T02EP05</a></li>
            <li><a href="2-Broke-Girls-T02EP06.php" class="text">2 Broke Girls T02EP06</a></li>
            <li><a href="2-Broke-Girls-T02EP07.php" class="text">2 Broke Girls T02EP07</a></li>
            <li><a href="2-Broke-Girls-T02EP08.php" class="text">2 Broke Girls T02EP08</a></li>
            <li><a href="2-Broke-Girls-T02EP09.php" class="text">2 Broke Girls T02EP09</a></li>
            <li><a href="2-Broke-Girls-T02EP10.php" class="text">2 Broke Girls T02EP10</a></li>
            <li><a href="2-Broke-Girls-T02EP11.php" class="text">2 Broke Girls T02EP11</a></li>
            <li><a href="2-Broke-Girls-T02EP12.php" class="text">2 Broke Girls T02EP12</a></li>
            <li><a href="2-Broke-Girls-T02EP13.php" class="text">2 Broke Girls T02EP13</a></li>
            <li><a href="2-Broke-Girls-T02EP14.php" class="text">2 Broke Girls T02EP14</a></li>
            <li><a href="2-Broke-Girls-T02EP15.php" class="text">2 Broke Girls T02EP15</a></li>
            <li><a href="2-Broke-Girls-T02EP16.php" class="text">2 Broke Girls T02EP16</a></li>
            <li><a href="2-Broke-Girls-T02EP17.php" class="text">2 Broke Girls T02EP17</a></li>
            <li><a href="2-Broke-Girls-T02EP18.php" class="text">2 Broke Girls T02EP18</a></li>
            <li><a href="2-Broke-Girls-T02EP19.php" class="text">2 Broke Girls T02EP19</a></li>
            <li><a href="2-Broke-Girls-T02EP20.php" class="text">2 Broke Girls T02EP20</a></li>
            <li><a href="2-Broke-Girls-T02EP21.php" class="text">2 Broke Girls T02EP21</a></li>
            <li><a href="2-Broke-Girls-T02EP22.php" class="text">2 Broke Girls T02EP22</a></li>
            <li><a href="2-Broke-Girls-T02EP23.php" class="text">2 Broke Girls T02EP23</a></li>
            <li><a href="2-Broke-Girls-T02EP24.php" class="text">2 Broke Girls T02EP24</a></li>
         </ul></div></div><br/>
		<div class="alinhamento">
		<h3 class="heading"><span>3ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:289227CAC50768010D82B3158AAA80A8BE58B342&dn=2%20Broke%20Girls%20-%203%c2%aa%20Temporada%20%282013%29%20Dublado%20720p%20%28By-LuanHarper%29&tr=udp%3a%2f%2ftracker.trackerfix.com%3a80%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2710%2fannounce&tr=udp%3a%2f%2f9.rarbg.to%3a2710%2fannounce&tr=http%3a%2f%2fpow7.com%2fannounce&tr=%2audp%3a%2f%2fopen.demonii.com%3a1337%2fannounce&tr=udp%3a%2f%2fcoppersurfer.tk%3a6969%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.istole.it%3a80%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=http%3a%2f%2ftracker.blazing.de%2fannounce&tr=http%3a%2f%2ft2.pow7.com%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2f%2fannounce" download="2 Broke Girls"><img src="images/download.png" style="width: 30px"   /></a></span></h3>
			<div id="temp3"><ul class="temps" id="lista_eps3">
        	<li><a href="2-Broke-Girls-T03EP01.php" class="text">2 Broke Girls T03EP01</a></li>
        	<li><a href="2-Broke-Girls-T03EP02.php" class="text">2 Broke Girls T03EP02</a></li>
       	 	<li><a href="2-Broke-Girls-T03EP03.php" class="text">2 Broke Girls T03EP03</a></li>
        	<li><a href="2-Broke-Girls-T03EP04.php" class="text">2 Broke Girls T03EP04</a></li>
        	<li><a href="2-Broke-Girls-T03EP05.php" class="text">2 Broke Girls T03EP05</a></li>
        	<li><a href="2-Broke-Girls-T03EP06.php" class="text">2 Broke Girls T03EP06</a></li>
        	<li><a href="2-Broke-Girls-T03EP07.php" class="text">2 Broke Girls T03EP07</a></li>
        	<li><a href="2-Broke-Girls-T03EP08.php" class="text">2 Broke Girls T03EP08</a></li>
        	<li><a href="2-Broke-Girls-T03EP09.php" class="text">2 Broke Girls T03EP09</a></li>
        	<li><a href="2-Broke-Girls-T03EP10.php" class="text">2 Broke Girls T03EP10</a></li>
        	<li><a href="2-Broke-Girls-T03EP11.php" class="text">2 Broke Girls T03EP11</a></li>
        	<li><a href="2-Broke-Girls-T03EP12.php" class="text">2 Broke Girls T03EP12</a></li>
        	<li><a href="2-Broke-Girls-T03EP13.php" class="text">2 Broke Girls T03EP13</a></li>
        	<li><a href="2-Broke-Girls-T03EP14.php" class="text">2 Broke Girls T03EP14</a></li>
        	<li><a href="2-Broke-Girls-T03EP15.php" class="text">2 Broke Girls T03EP15</a></li>
        	<li><a href="2-Broke-Girls-T03EP16.php" class="text">2 Broke Girls T03EP16</a></li>
        	<li><a href="2-Broke-Girls-T03EP17.php" class="text">2 Broke Girls T03EP17</a></li>
        	<li><a href="2-Broke-Girls-T03EP18.php" class="text">2 Broke Girls T03EP18</a></li>
        	<li><a href="2-Broke-Girls-T03EP19.php" class="text">2 Broke Girls T03EP19</a></li>
        	<li><a href="2-Broke-Girls-T03EP20.php" class="text">2 Broke Girls T03EP20</a></li>
        	<li><a href="2-Broke-Girls-T03EP21.php" class="text">2 Broke Girls T03EP21</a></li>
        	<li><a href="2-Broke-Girls-T03EP22.php" class="text">2 Broke Girls T03EP22</a></li>
        	<li><a href="2-Broke-Girls-T03EP23.php" class="text">2 Broke Girls T03EP23</a></li>
        	<li><a href="2-Broke-Girls-T03EP24.php" class="text">2 Broke Girls T03EP24</a></li>
		</ul></div></div>
	<div class="alinhamento1">
	<h3 class="heading"><span>4ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="magnet:?xt=urn:btih:AD95136F29C9E0809F77718A6E114F66746E34AF&dn=2%20Broke%20Girls%204%c2%aa%20Temporada.Dual&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.opentrackr.org%3a1337%2fannounce&tr=udp%3a%2f%2ftracker.ccc.de%3a80%2fannounce&tr=http%3a%2f%2ftracker1.wasabii.com.tw%3a6969%2fannounce&tr=http%3a%2f%2ftracker.tfile.me%2fannounce&tr=udp%3a%2f%2ftracker.coppersurfer.tk%3a6969%2fannounce&tr=http%3a%2f%2fmgtracker.org%3a2710%2fannounce&tr=udp%3a%2f%2f9.rarbg.com%3a2710%2fannounce&tr=udp%3a%2f%2f9.rarbg.me%3a2710%2fannounce&tr=http%3a%2f%2ft2.pow7.com%2fannounce&tr=udp%3a%2f%2fexplodie.org%3a6969%2fannounce" download="2 Broke Girls"><img src="images/download.png" style="width: 30px"   /></a></span></h3>
			<div id="temp4"><ul id="lista_eps4">
        	<li><a href="2-Broke-Girls-T04EP01.php" class="text">2 Broke Girls T04EP01</a></li>
        	<li><a href="2-Broke-Girls-T04EP02.php" class="text">2 Broke Girls T04EP02</a></li>
       	 	<li><a href="2-Broke-Girls-T04EP03.php" class="text">2 Broke Girls T04EP03</a></li>
        	<li><a href="2-Broke-Girls-T04EP04.php" class="text">2 Broke Girls T04EP04</a></li>
        	<li><a href="2-Broke-Girls-T04EP05.php" class="text">2 Broke Girls T04EP05</a></li>
        	<li><a href="2-Broke-Girls-T04EP06.php" class="text">2 Broke Girls T04EP06</a></li>
        	<li><a href="2-Broke-Girls-T04EP07.php" class="text">2 Broke Girls T04EP07</a></li>
        	<li><a href="2-Broke-Girls-T04EP08.php" class="text">2 Broke Girls T04EP08</a></li>
        	<li><a href="2-Broke-Girls-T04EP09.php" class="text">2 Broke Girls T04EP09</a></li>
        	<li><a href="2-Broke-Girls-T04EP10.php" class="text">2 Broke Girls T04EP10</a></li>
        	<li><a href="2-Broke-Girls-T04EP11.php" class="text">2 Broke Girls T04EP11</a></li>
        	<li><a href="2-Broke-Girls-T04EP12.php" class="text">2 Broke Girls T04EP12</a></li>
        	<li><a href="2-Broke-Girls-T04EP13.php" class="text">2 Broke Girls T04EP13</a></li>
        	<li><a href="2-Broke-Girls-T04EP14.php" class="text">2 Broke Girls T04EP14</a></li>
        	<li><a href="2-Broke-Girls-T04EP15.php" class="text">2 Broke Girls T04EP15</a></li>
        	<li><a href="2-Broke-Girls-T04EP16.php" class="text">2 Broke Girls T04EP16</a></li>
        	<li><a href="2-Broke-Girls-T04EP17.php" class="text">2 Broke Girls T04EP17</a></li>
        	<li><a href="2-Broke-Girls-T04EP18.php" class="text">2 Broke Girls T04EP18</a></li>
        	<li><a href="2-Broke-Girls-T04EP19.php" class="text">2 Broke Girls T04EP19</a></li>
        	<li><a href="2-Broke-Girls-T04EP20.php" class="text">2 Broke Girls T04EP20</a></li>
        	<li><a href="2-Broke-Girls-T04EP21.php" class="text">2 Broke Girls T04EP21</a></li>
        	<li><a href="2-Broke-Girls-T04EP22.php" class="text">2 Broke Girls T04EP22</a></li>
		</ul></div></div><br/><br/>
	<div class="alinhamento">
	<h3 class="heading"><span>5ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="#" download="2 Broke Girls"><img src="images/download.png" style="width: 30px"   /></a></span></h3>
			<div id="temp5"><ul class="temps" id="lista_eps5">
        	<li><a href="2-Broke-Girls-T05EP01.php" class="text">2 Broke Girls T05EP01</a></li>
        	<li><a href="2-Broke-Girls-T05EP02.php" class="text">2 Broke Girls T05EP02</a></li>
       	 	<li><a href="2-Broke-Girls-T05EP03.php" class="text">2 Broke Girls T05EP03</a></li>
        	<li><a href="2-Broke-Girls-T05EP04.php" class="text">2 Broke Girls T05EP04</a></li>
        	<li><a href="2-Broke-Girls-T05EP05.php" class="text">2 Broke Girls T05EP05</a></li>
        	<li><a href="2-Broke-Girls-T05EP06.php" class="text">2 Broke Girls T05EP06</a></li>
        	<li><a href="2-Broke-Girls-T05EP07.php" class="text">2 Broke Girls T05EP07</a></li>
        	<li><a href="2-Broke-Girls-T05EP08.php" class="text">2 Broke Girls T05EP08</a></li>
        	<li><a href="2-Broke-Girls-T05EP09.php" class="text">2 Broke Girls T05EP09</a></li>
        	<li><a href="2-Broke-Girls-T05EP10.php" class="text">2 Broke Girls T05EP10</a></li>
        	<li><a href="2-Broke-Girls-T05EP11.php" class="text">2 Broke Girls T05EP11</a></li>
        	<li><a href="2-Broke-Girls-T05EP12.php" class="text">2 Broke Girls T05EP12</a></li>
        	<li><a href="2-Broke-Girls-T05EP13.php" class="text">2 Broke Girls T05EP13</a></li>
        	<li><a href="2-Broke-Girls-T05EP14.php" class="text">2 Broke Girls T05EP14</a></li>
        	<li><a href="2-Broke-Girls-T05EP15.php" class="text">2 Broke Girls T05EP15</a></li>
        	<li><a href="2-Broke-Girls-T05EP16.php" class="text">2 Broke Girls T05EP16</a></li>
        	<li><a href="2-Broke-Girls-T05EP17.php" class="text">2 Broke Girls T05EP17</a></li>
        	<li><a href="2-Broke-Girls-T05EP18.php" class="text">2 Broke Girls T05EP18</a></li>
        	<li><a href="2-Broke-Girls-T05EP19.php" class="text">2 Broke Girls T05EP19</a></li>
        	<li><a href="2-Broke-Girls-T05EP20.php" class="text">2 Broke Girls T05EP20</a></li>
        	<li><a href="2-Broke-Girls-T05EP21.php" class="text">2 Broke Girls T05EP21</a></li>
        	<li><a href="2-Broke-Girls-T05EP22.php" class="text">2 Broke Girls T05EP22</a></li>
				</ul></div></div>
		<div class="alinhamento1">
	  	<h3 class="heading"><span>6ª Temporada</span>&nbsp&nbsp&nbsp<span><a href="#" download="2 Broke Girls"><img src="images/download.png" style="width: 30px"   /></a></span></h3>
			<div id="temp6"><ul id="lista_eps6">
        	<li><a href="2-Broke-Girls-T06EP01-02.php" class="text">2 Broke Girls T06EP01 / 02</a></li>
        	<!--<li><a href="2-Broke-Girls-T06EP02.php" class="text">2 Broke Girls T06EP02</a></li>-->
       	 	<li><a href="2-Broke-Girls-T06EP03.php" class="text">2 Broke Girls T06EP03</a></li>
        	<li><a href="2-Broke-Girls-T06EP04.php" class="text">2 Broke Girls T06EP04</a></li>
        	<li><a href="2-Broke-Girls-T06EP05.php" class="text">2 Broke Girls T06EP05</a></li>
        	<li><a href="2-Broke-Girls-T06EP06.php" class="text">2 Broke Girls T06EP06</a></li>
        	<li><a href="2-Broke-Girls-T06EP07.php" class="text">2 Broke Girls T06EP07</a></li>
        	<li><a href="2-Broke-Girls-T06EP08.php" class="text">2 Broke Girls T06EP08</a></li>
        	<li><a href="2-Broke-Girls-T06EP09.php" class="text">2 Broke Girls T06EP09</a></li>
        	<li><a href="2-Broke-Girls-T06EP10.php" class="text">2 Broke Girls T06EP10</a></li>
        	<li><a href="2-Broke-Girls-T06EP11.php" class="text">2 Broke Girls T06EP11</a></li>
        	<li><a href="2-Broke-Girls-T06EP12.php" class="text">2 Broke Girls T06EP12</a></li>
        	<li><a href="2-Broke-Girls-T06EP13.php" class="text">2 Broke Girls T06EP13</a></li>
        	<li><a href="2-Broke-Girls-T06EP14.php" class="text">2 Broke Girls T06EP14</a></li>
        	<li><a href="2-Broke-Girls-T06EP15.php" class="text">2 Broke Girls T06EP15</a></li>
        	<li><a href="2-Broke-Girls-T06EP16.php" class="text">2 Broke Girls T06EP16</a></li>
        	<li><a href="2-Broke-Girls-T06EP17.php" class="text">2 Broke Girls T06EP17</a></li>
        	<li><a href="2-Broke-Girls-T06EP18.php" class="text">2 Broke Girls T06EP18</a></li>
        	<li><a href="2-Broke-Girls-T06EP19.php" class="text">2 Broke Girls T06EP19</a></li>
        	<li><a href="2-Broke-Girls-T06EP20.php" class="text">2 Broke Girls T06EP20</a></li>
        	<li><a href="2-Broke-Girls-T06EP21.php" class="text">2 Broke Girls T06EP21</a></li>
        	<li><a href="2-Broke-Girls-T06EP22.php" class="text">2 Broke Girls T06EP22</a></li>
				</ul></div></div></div></div>
	  </div></div></div>
            <!-- Seção final -->
  			<footer id="contact">
    			<p class="hero_header text_column2">SENTIU FALTA DE ALGUMA SÉRIE </p>
                
    			<div class="button"><a style="text-decoration:none; color:#FFFFFF" href="contato.php">CONTATE-NOS</a></div>
  			</footer>
  <!-- Seção fim -->
  		<div class="copyright">&copy;2019 - <a style="text-decoration:none" href="index.html"><strong style="color:#12E19D">VIA SÉRIE </strong></a></div>
        </div>
        </body>
</html>
