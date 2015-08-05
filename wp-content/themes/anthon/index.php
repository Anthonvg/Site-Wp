<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
</head>
<body>
	<h1><?php bloginfo('name') ?></h1>
	<h2>
		<?php 

			bloginfo('description');
			echo "<br>";
			bloginfo('admin_email'); 
			echo "<br>";
			bloginfo('language');


		?>	
	</h2>	
	
</body>
</html>