<div class="row">
	<div class="col-md-12">
		<h1>Bienvenue <?= $_SESSION["userLogin"] ?></h1>
	</div>
	<div class="col-md-4">
		<img src="vue/image/<?= $_SESSION["user"]["avatar"] ?>" alt="Avatar"/>
	</div>
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
				<p><a href="?page=profil&action=view">Voir mon profil.</a></p>
			</div>
			<div class="col-md-12">
				<p>Caca</p>
			</div>
			<div class="col-md-12">
				<p><a href="?page=logout">Logout</a></p>
			</div>
		</div>
	</div>
</div>
