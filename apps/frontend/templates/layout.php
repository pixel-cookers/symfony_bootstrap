<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include_http_metas() ?>
		<?php include_metas() ?>
		<?php include_title() ?>

		<!-- IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<link rel="shortcut icon" href="/favicon.ico" />
		<?php include_stylesheets() ?>
		<?php include_javascripts() ?>
	</head>
	<body>
		<?php include_partial("dashboard/menu") ?>
		<div class="container has_menu">
			<?php echo $sf_content ?>
			<footer>
				<p>&copy; Company 2011</p>
			</footer>
		</div>
	</body>
</html>