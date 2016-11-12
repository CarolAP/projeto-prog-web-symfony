<!DOCTYPE html>
<html>
<head>
	<title> PAGINA HOME</title>
</head>
<body>

<h1> Olá, <?php echo $nome ?> </h1>
<h1> Sua senha é: <?php echo $senha ?> </h1>

<p> Usando links ... </p>
<br>

<a href="<?php echo $view['router']->path('show_post') ?>"> Ver todos os posts</a> 



</body>
</html>

