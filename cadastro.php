<?php @session_start()?>
<!DOCTYPE html >
<html><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/cadastro.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/vsicon.png">
<title>Cadastrar</title>
<?php
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  }
else {header('location:profile.php');}

?>
</head>
<body>
<!-- Main Container -->
<div class="corp"><div align="center" class="center"><img alt="" src="images/logo2.png"/></div>
 <div class="container">
  <div class=" menu-item-43">
    <nav id="menu" class="container">
      <ul id="menu-top-menu" class="sf-menu">
        <li id="menu-item-09"><a href="index.php"><b>Início</b></a></li>
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
        <li id="menu-item-37"><a href="login.php"><u>Login / Cadastro</u></a></li>
		  </ul>
    </nav></div>
    	<select id="select" class="container" onchange="window.location=this.value">
        	<option value="#">Menu - Lista de Série s A - Z...</option>
    		<option value="http://viaserie.tk/" selected="selected"> Início</option>
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
        <option value="cadastro.php">Login /Cadastro</option>
    	</select>
  <div class="gallery">
    <div class="thumbnail">
      <div class="cont" >
     
        <div class="content">      
          <div id="cadastro">
            <form action="cadastrar.php" method="POST"> 
              <h1>Cadastro</h1> 
           
              <p> 
                <label for="nome">Seu nome</label>
                <input id="nome" name="nome" required="required" type="text" placeholder="nome" >
              </p>
           
              <p> 
                <label for="email">Seu e-mail</label>
                <input id="email" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"> 
              </p>
           
              <p> 
                <label for="senha">Sua senha</label>
                <input id="senha" name="senha" required="required" minlength="8" maxlength="15" size="15" type="password" placeholder="ex. 12345678">
              </p>
           
              <p> 
                <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"/> 
              </p>
           
              <p class="link">  
                Já tem conta?
                <a href="login.php"> Ir para Login </a>
              </p>
            </form>
          </div>
        </div> 
      </div>
		</div>
  </div>
  <!-- Footer Section -->
  <footer id="contact">
    <p class="hero_header">SENTIU FALTA DE ALGUMA SÉRIE </p>
    <div class="button"><a style="text-decoration:none; color:#FFFFFF" href="contato.php">CONTATE-NOS</a></div>
  </footer>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2020 - <a style="text-decoration:none" href="index.php"><strong style="color:#12E19D">VIA SÉRIE </strong></a></div>
	</div></div>
<!-- Main Container Ends 
<aside id="text-5" class="widget widget_text clearfix"><h3 class="heading"><span>Mais Populares</span></h3><div class="textwidget"><div class="entry-listing clearfix">
</div>
</div>
</aside>-->
</body>
</html>
