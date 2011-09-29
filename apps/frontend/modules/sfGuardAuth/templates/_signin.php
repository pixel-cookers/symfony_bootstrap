<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post" class="nav secondary-nav">
	<?php echo $form['_csrf_token'] ;?>
	<?php echo $form['username']->render(array("placeholder" => "Utilisateur", "class" => "small")) ?>
	<?php echo $form['password']->render(array("placeholder" => "Mot de passe", "class" => "small")) ?>
	<button type="submit" class="btn primary">Connexion</button>
</form>