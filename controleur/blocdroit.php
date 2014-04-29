<?php
require_once ('controleur/login.php');

function blocDroit(){
	echo '<div class="row">';
	echo '<div class="col-md-12">';
	// BLOC LOGIN
	// Connecté ?

	if(estConnecte())
	{
		echo $_SESSION["user"];
	}
	else
	{
		echo '<form class="form-horizontal" role="form">									';
		echo '	<div class="form-group">											';
		echo '		<label for="inputEmail" class="col-md-3 control-label">Login</label>					';
		echo '		<div class="col-md-9">											';
		echo '			<input type="email" class="form-control" id="inputEmail" placeholder="Email">			';
		echo '		</div>													';
		echo '	</div>														';
		echo '	<div class="form-group">											';
		echo '		<label for="inputPassword" class="col-md-3 control-label">Mot de passe: </label>			';
		echo '		<div class="col-md-9">											';
		echo '			<input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">	';
		echo '		</div>													';
		echo '		<div class="form-group">										';
		echo '			<div class="col-md-offset-4 col-md-8">								';
		echo '				<div class="checkbox">									';
		echo '					<label>										';
		echo '						<input type="checkbox">Se souvenir de moi.				';
		echo '					</label>									';
		echo '				</div>											';
		echo '			</div>												';
		echo '		</div>													';
		echo '		<div class="form-group">										';
		echo '		<div class="col-md-offset-8 col-md-4">									';
		echo '			<button type="submit" class="btn btn-default">Se connecter</button>				';
		echo '		</div>													';
		echo '	</div>														';
		echo '</form>														';
	}
	echo '</div>';

	// Panier 

	echo '<div class="col-md-12">';
	if(isset($_SESSION['panier'])){
		echo '<div class="col-md-12">';
		foreach($_SESSION['panier'] as $i => $id){
			echo '<a href="?page=shop&produit='. $id["idProduit"] .'">';
			echo '<div class="col-md-1">'. $id["nb"] .'</div>';
			echo '<div class="col-md-9">'. $id["nom"] .'</div>';
			echo '<div class="col-md-1">'. $id["prix"] .'</div>';
			echo '</a>';
		}
	echo '</div>';
	}
	else{
		echo '<p>Votre panier est vide</p>';
	}
	echo '</div>';
}
?>
