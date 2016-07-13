<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="stylesheet.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="script.js" type="text/javascript"></script>
	<title>Maximaster</title>
</head>
<body>	
<div id="header" class="default">
	<h1> Приветственная надпись</h1>
</div>
<div id="menu" class="default">
	<ul class="menu">
		<?php
		if ($_SERVER[REQUEST_URI]=="/") {
			echo '<li><a href="http://ivanchikov.bitrix.develop.maximaster.ru/index.php">Главная</a></li>' ;
		}?>
		<li><a href="#">О себе</a></li>
		<li><a href="#">Контакты</a></li>
	</ul>
</div>
<div class="main">
	<div class="left-column">
		<p>left-column</p>
	</div>
	<div class="middle-column">
		<p>middle-column</p>
	</div>
	<div class="right-column">
		<p>right-column</p>
	</div>
</div>
<div class="footer">
	<p class="tfooter">
		<a href="mailto:d.ivanchikov@maximaster.ru?subject=<?php echo getUrl() ?>">Иванчиков Дмитрий Андреевич</a>
		<a class ="vk" href="https://vk.com/id80249545"></a>
	</p>
</div>
</body>
</html>


<?php
function getUrl() {
	$url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
	$url .= ( $_SERVER["SERVER_PORT"] != 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
	$url .= $_SERVER["REQUEST_URI"];
	return $url;
}
?>