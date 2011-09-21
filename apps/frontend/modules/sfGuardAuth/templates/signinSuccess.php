<h2>Connexion</h2>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
	<?php echo $form['_csrf_token'] ;?>
	<table>
		<tr>
			<th>Username</th>
			<td><?php echo $form['username'].$form['username']->renderError() ;?></td>
		</tr>
		<tr>
			<th>Mot de passe</th>
			<td><?php echo $form['password'].$form['password']->renderError() ;?></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" class="btn primary large" value="Connexion" /></td>
		</tr>
	</table>
</form>