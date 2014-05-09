<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-4">
				<img src="vue/image/<?= $user->avatar() ?>" alt="<?= $user->login() ?>" />
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4">
							<p>Login :</p> 
						</div>
						<div class="col-md-8">
							<p><?= $user->login() ?></p>
						</div>
						<div class="col-md-4">
							<p>Prénom :</p> 
						</div>
						<div class="col-md-8">
							<p><?= $user->prenom() ?></p>
						</div>
						<div class="col-md-4">
							<p>Nom :</p> 
						</div>
						<div class="col-md-8">
							<p><?= $user->nom() ?></p>
						</div>
						<div class="col-md-4">
							<p>Mail :</p> 
						</div>
						<div class="col-md-8">
							<p><?= $user->mail() ?></p>
						</div>
						<div class="col-md-4">
							<p>Adresse :</p> 
						</div>
						<div class="col-md-8">
							<p><?= $user->adresse() ?></p>
						</div>
						<div class="col-md-4">
							<p>Code Postale :</p> 
						</div>
						<div class="col-md-8">
							<p><?= $user->codePostale() ?></p>
						</div>
						<div class="col-md-4">
							<p>Pays :</p> 
						</div>
						<div class="col-md-8">
							<p><?= $user->pays() ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<a href="?page=profil&action=edit"><button type="button" class="btn btn-default">Mettre à jour</button></a>
		</div>
	</div>
</div>
