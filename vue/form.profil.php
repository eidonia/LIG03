<div class="row">
	<div class="col-md-12">
		<div class="row">
			<form class="form-horizontal" role="form" method="post" action="?page=profil&action=<?= $action ?>&type=<?= $type ?>" enctype="multipart/form-data">
				<div class="col-md-4">
					<div class="col-md-12">
						<img src="vue/image/<?= $imgAvatar ?>" alt="<?= $textAvatarAlt ?>" />
					</div>
					<div class="col-md-12">
						<label for="avatar"><?= $textAvatar ?></label>
						<input type="file" id="avatar" name="avatar">
						<p class="help-block">(JPG, PNG ou GIF | max. 1Mo)</p>
						<input type="hidden" name="MAX_FILE_SIZE" value="1048576">
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="inputPrenom" class="col-md-4 control-label">Prénom</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="inputPrenom" placeholder="<?= $user->prenom() ?>" name="prenom">
								</div>
							</div>
							<div class="form-group">
								<label for="inputNom" class="col-md-4 control-label">Nom</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="inputNom" placeholder="<?= $user->nom() ?>" name="nom">
								</div>
							</div>
							<div class="form-group">
								<label for="inputMail" class="col-md-4 control-label">E-mail</label>
								<div class="col-md-8">
									<input type="email" class="form-control" id="inputMail" placeholder="<?= $user->mail() ?>" name="mail">
								</div>
							</div>
							<div class="form-group">
								<label for="inputAdresse" class="col-md-4 control-label">Adresse</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="inputAdresse" placeholder="<?= $user->adresse() ?>" name="adresse">
								</div>
							</div>
							<div class="form-group">
								<label for="inputCodePostale" class="col-md-4 control-label">Code Postale</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="inputCodePostale" placeholder="<?= $user->codePostale() ?>" name="codePostale">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPays" class="col-md-4 control-label">Pays</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="inputPays" placeholder="<?= $user->pays() ?>" name="pays">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-md-4 control-label">Mot de passe</label>
								<div class="col-md-8">
									<input type="password" class="form-control" id="inputPassword" placeholder="<?= $textPass ?>" name="password">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPasswordCheck" class="col-md-4 control-label">Vérification</label>
								<div class="col-md-8">
								<input type="password" class="form-control" id="inputPasswordCheck" placeholder="<?= $textPassVerif ?>" name="passwordCheck">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
				</div>
				<div class="col-md-2">
					<button type="button" class="btn btn-danger">Annuler</button>
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-success">Envoyer</button>
				</div>
			</form>
		</div>
	</div>
</div>
