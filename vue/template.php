<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<title><?= titre($dTitre) ?></title>
	</head>

	<body>
	<div class="container">
		<header>
			<!-- Header start -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="?page=shop">Shop</a></li>
					<li><a href="?page=contact">Contact</a></li>
				</ul>
				</div>
			</nav>
			<!-- Header end -->
		</header>
		
		<section>
			<div>
			<!-- Body start -->
				<article>
					<!-- News start -->
					<?= contenu($dContenu) ?>
					<!-- News end -->
				</article>
			</div>

			<aside>
				<!-- RightBlock start -->
				<?= blocDroit() ?>
				<!-- RightBlock end -->
			</aside>
		</section>
		<footer>
			<!-- Footer start -->
			<?= footer($dFooter) ?>
			<!-- Footer end-->
		</footer>
	</div>
	</body>
</html>
