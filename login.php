<?php @session_start()?>
<!DOCTYPE html >
<html><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/cadastro.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/vsicon.png">
<title>LOGIN</title>
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
        <li id="menu-item-37"><a href="netflix.html">Seção Netflix</a></li>
        <li id="menu-item-38"><a href="login.html"><u>Login / Cadastro</u></a></li>
		  </ul>
    </nav></div>
    	<select id="select" class="container" onchange="window.location=this.value">
        	<option value="#">Menu - Lista de Série s A - Z...</option>
    		<option value="index.php/"> Início</option>
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
        <option value="login.php"  selected="selected">Login / Cadastro</option>
    	</select>
  <div class="gallery">
    <div class="thumbnail">
      

      <div class="cont" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--LOGIN-->
      <div id="login">
        <form action="logar.php" method="post" > 
          <h1>Login</h1> 
          <p> 
            <label for="email">Seu e-mail</label>
            <input id="email" name="email" required="required" type="text" placeholder="ex. contato@umprovedorqualquer.com"/>
          </p>
           
          <p> 
            <label for="senha">Sua senha</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="entrar" name="entrar"/> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="cadastro.php">Cadastre-se</a>
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
    <div class="button"><a style="text-decoration:none; color:#FFFFFF" href="contato.html">CONTATE-NOS</a></div>
  </footer>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;2019 - <a style="text-decoration:none" href="index.html"><strong style="color:#12E19D">VIA SÉRIE </strong></a></div>
	</div></div>
<!-- Main Container Ends 
<aside id="text-5" class="widget widget_text clearfix"><h3 class="heading"><span>Mais Populares</span></h3><div class="textwidget"><div class="entry-listing clearfix">
</div>
</div>
</aside>-->
</body>
</html>
