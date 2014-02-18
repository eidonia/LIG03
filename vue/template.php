<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title><?= $titre ?></title>
	</head>

	<body>
		<header>
			<!-- Header start -->
				<h1>Alexandre Novakovski</h1>
			<nav>
				<!-- MenuTop start -->
				<ul>
					<li><a href=".">Accueil</a></li>
					<li><a href="construction.php">Blog</a></li>
					<li><a href="construction.php">CV</a></li>
					<li><a href="construction.php">Contact</a></li>
				</ul>
				<!-- MenuTop end -->
			</nav>
			<!-- Header end -->
		</header>

		<section>
			<div class="section">
			<!-- Body start -->
			<article>
				<!-- News start -->
				<?= $contenu ?>
				<!-- News end -->
			</article>
			<aside>
				<!-- RightBlock start -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida adipiscing neque, vel aliquet lectus sagittis sit amet. Nunc et nibh quis orci pellentesque feugiat. Ut sagittis aliquet posuere. Maecenas suscipit felis a bibendum rhoncus. Suspendisse cursus massa sit amet sagittis malesuada. Ut at sapien eros. Proin vel diam ac justo dapibus tincidunt. Integer molestie, velit sed volutpat placerat, libero dolor aliquet dui, interdum ultricies sapien odio quis velit. Maecenas sit amet enim sed diam accumsan dignissim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse convallis, augue a rutrum scelerisque, risus eros volutpat nunc, id ullamcorper tortor mauris ac lacus. Cras et consequat erat, in ornare ante. Phasellus consectetur rhoncus pulvinar.</p>
				<!-- RightBlock end -->
			</aside>
			</div>
			<!-- Body end -->
		</section>
		<footer>
			<!-- Footer start -->
			<p>Copyright Alexandre Novakovski - Aucun droit réservés</p>
			<!-- Footer end -->
		</footer>
	</body>
</html>
