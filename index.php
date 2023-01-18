<!DOCTYPE html>
<html>

<head>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0" />

	<script type="text/javascript"
src="https://code.jquery.com/jquery-1.12.0.min.js">
	</script>

	<!-- Compiled and minified JavaScript -->
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
	</script>

	<script>
		$(document).ready(function () {
			$('.carousel.carousel-slider').carousel(
				{
					fullWidth: true,
					indicators: true
				}
			);
		});
	</script>
</head>

<body>
	
<p>
<a href=./login.php> <button type="button" class="btn btn-block btn-primary">Login cliente</button> </a>
<a href=./adm/login.php> <button type="button" class="btn btn-block btn-primary">Login administrador</button></a>
<h2 style="text-align:center; font-family: Arial; color: #20B2AA"> <b>FAÇA LOGIN PARA INICIAR SUAS COMPRAS</b> </h2>
	</p>
	<div class="carousel carousel-slider center">
		<div class="carousel-item pink" href="#one!">
			<img src=
"./img/d4.jpg">
		</div>

		<div class="carousel-item blue" href="#two!">
			<img src=
"./img/d2.jpg">
		</div>

		<div class="carousel-item grey" href="#three!">
			<img src=
"./img/d3.jpg">
		</div>

		<div class="carousel-item yellow" href="#four!">
			<img src=
"./img/d1.jpg">
		</div>
	</div>

	<img src="./img/d5.jpg">
	<img src="./img/d6.jpg">
	<img src="./img/d7.jpg">

</body>

</html>
