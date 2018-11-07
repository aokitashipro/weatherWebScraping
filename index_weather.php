<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>天気予報 webスクレピング</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
</head>
<body>
	<div class="heading-section">
		<h3>本日・明日の天気</h3>
		<section id="weather">
			<?php include_once "weather_info.php"; ?>
		</section>
	</div>
</body>
</html>
