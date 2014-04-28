<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/custom.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<title><?= titre($dTitre) ?></title>
	</head>

	<body>
	<div class="container">
		<header>
			<!-- Header start -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
				<ul class="nav navbar-nav">
					<li><a href="index.php" class="navbar-brand"><img src="vue/image/logo.png"></a></li>
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
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>
