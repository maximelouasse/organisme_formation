<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="main.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-sm navbar-light bg-light justify-content-end mb-5">
			<a class="navbar-brand" href="#">Organisme de Formation</a>
			<div class="ml-auto collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
				<ul class="navbar-nav text-right">
					<li class="nav-item">
						<a class="nav-link" href="./formations.php">Formations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./entreprises.php">Entreprises</a>
					</li>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<?= $content; ?>
		</div>
	</body>
</html>