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
		<div class="topbar">
			<div class="fill">
				<div class="container">
					<h3><?php echo link_to("Symfony Bootstrap", "@homepage", array("class" => "brand")) ?></h3>
					<ul class="nav">
						<li class="active"><?php echo link_to("Dashboard", "@homepage") ?></li>
						<li><?php echo link_to("Contact", "@homepage") ?></li>
						<li><?php echo link_to("Deconnexion", "@sf_guard_signout") ?></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<?php echo $sf_content ?>
			<footer>
				<p>&copy; Company 2011</p>
			</footer>
		</div>
	</body>
</html>