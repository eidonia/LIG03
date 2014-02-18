
<?php 
$titre = "Construction en cours";
ob_start();
?>
<div class="wip"
<h1>Work In Progress</h1>
<p>Merci pour votre visite :)</p>
</div>
<?php
$contenu = ob_get_clean();
require 'vue/template.php';
?>
