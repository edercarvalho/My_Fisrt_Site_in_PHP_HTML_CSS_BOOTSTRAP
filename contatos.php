<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Emaltec Solutions - Contatos </title>
<link rel="shortcut icon" href="img/icon_titulo.gif"> <!-- Imagem para barra de titulo --!>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="row-fluid top navbar-fixed-top"> <!-- e classe desenha uma linha fluida onde as mudanças de posição que acontecer nessa classe nao interfirão nos outros objetos-->
  <div class="container"> <!--Este containeinicialmente era para colocar nossa logo e da um espaço da margem igual que fizemos no fireworks -->
    <div class="span4"><img src="img/logo2.png"></div>
    <div class="span8">
      <ul class="nav nav-tabs menu">
        <li > <a href="index.html">Início</a> </li>
        <li > <a href="sobre.html">Sobre</a></li>
        <li ><a href="projetos.html">Projetos</a></li>
        <li class="active"><a href="contatos.html">Contatos</a></li>
      </ul>
    </div>
  </div>
</div>


<div class="container  margintop" >
<div class="row-fluid">
<div class="span6 border">
<form class="form-horizontal" method="post">
<?php  include(enviar.php)?>
 <label for="Nome" >Nome :</label>
 <input type="text" id="inputName" placeholder="Nome">
 <h4><b>Telefone :</b></h4>
 <input type="text" id="inputPhone" placeholder="Telefone">
  <h4><b>Email :</b></h4>
  <input type="text" id="inputEmail" placeholder="Email">
  <h4><b>Mensagem:</b></h4>
  <textarea rows="3"></textarea><br><br>
  <button type="submit" class="btn">Enviar</button>
   
  
</form>
</div><div class="span4">
<h2>Siga nos!</h2>
<a href="http://www.hotmmail.com"><img src="img/icones_redes_face.jpg"></a>
<img src="img/icones_redes_sociais_linkdin.jpg">
<img src="img/icones_redes_twiter.jpg">
<img src="img/icones_redes_sociais_youtube.jpg">
<br><br>
<h2>Telefones:</h2>
 (085)8622-9115.
</div>

</div>
</div>
<br>
<br>
<br>
<br>


<div class="row-fluid rodape">  
<div class="container">    
   <p> Copyright | Esmalteca Solution SA | Todos os direito reservado a  Esmaltec SA </p> 
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap.min.js"></script>
</body>
</html>

