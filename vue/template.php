<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title><?= titre($dTitre) ?></title>
	</head>

	<body>
		<header>
			<!-- Header start -->
			<nav>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="?page=shop">Shop</a></li>
				</ul>
			</nav>
			<!-- Header end -->
		</header>
		
		<section>
			<div class="HomeSection">
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
	</body>
</html>
