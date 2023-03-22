<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="favicon.ico" sizes="32x32" type="image/png">
		<link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{{ isset($title) ? $title : 'Sitio Web' }}</title>
	</head>
	<body>
		<x-header/>

		<section class="section">
			@yield('section-pricipal')
		</section>

		<footer>
			<h3>Footer</h3>
		</footer>
		
	</body>
</html>