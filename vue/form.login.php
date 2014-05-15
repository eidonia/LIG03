<form class="form-horizontal" role="form" method="post" action="?action=login">
	<div class="form-group">
		<label for="inputEmail" class="col-md-3 control-label">E-mail</label>
		<div class="col-md-9">
			<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
		</div>
	</div>
	<div class="form-group">                                                                                        
		<label for="inputPassword" class="col-md-3 control-label">Mot de passe: </label>                        
		<div class="col-md-9">                                                                                  
			<input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" name="password">
		</div>
		<div class="form-group">
			<div class="col-md-offset-4 col-md-8">
				<div class="checkbox">
		        	<label>
		                	<input type="checkbox" name="remember">Se souvenir de moi.
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-4">
			<a href="?page=profil&action=new">
				<button type="button" class="btn btn-primary">Nouveau compte</button>
			</a>
		</div>
		<div class="col-md-offset-4 col-md-4">
			<button type="submit" class="btn btn-success">Se connecter</button>
		</div>
	</div>
</form>
