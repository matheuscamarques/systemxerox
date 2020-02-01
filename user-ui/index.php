<?php session_start();?>

<html>
    <head>
        <title><?php $title = $_SESSION['user']; echo "Cliente: ".$title;  ?></title>
        	
<link rel="stylesheet" type="text/css"  href="estilo.css" />
    </head>
<body>
<ul id="nav" style="border:1px solid white"> 
    <li><a href="./index.php">HOME</a></li> 
    <li><a href="./pedido.php">FAZER PEDIDO</a></li> 
    <li><a href="./meu_pedido.php">MEUS PEDIDOS</a></li> 
    <li><a href="#">CONTATO</a></li> 
    <li style="float:right"><a class="active" href="#about">Sair</a></li>
  </ul>
  



    <article><?php
      ?></article>



</body>
</html>







