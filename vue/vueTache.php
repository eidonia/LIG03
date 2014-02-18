
<?php 
$titre = "Construction en cours";
ob_start();
?>
<div class="action"
<h1>Work In Progress</h1>
<p><?= $message ?></p>
</div>
<?php
$contenu = ob_get_clean();
require 'vue/template.php';
?>
