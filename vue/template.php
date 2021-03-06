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
					<?= require('controleur/mainNavbar.php') ?>
				</ul>
				</div>
			</nav>
			<!-- Header end -->
		</header>
		
		<section>
			<div class="row">
				<div class="col-md-8">
				<!-- Body start -->
					<article>
						<!-- News start -->
						<?= contenu($dContenu) ?>
						<!-- News end -->
					</article>
				</div>

				<aside>
				<div class="col-md-4">
					<!-- RightBlock start -->
					<?= blocDroit() ?>
					<!-- RightBlock end -->
				</div>
				</aside>
			</div>
		</section>
		<footer>
		<hr>
			<!-- Footer start -->
			<?= footer() ?>
			<!-- Footer end-->
		</footer>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>
