<div class="topbar">
	<div class="fill">
		<div class="container">
			<h3><?php echo link_to("Symfony Bootstrap", "@homepage", array("class" => "brand")) ?></h3>
			<ul class="nav">
				<li class="active"><?php echo link_to("Accueil", "@homepage") ?></li>
				<li><?php echo link_to("Contact", "@homepage") ?></li>
			</ul>
			<?php include_component("sfGuardAuth", "signin") ?>
		</div>
	</div>
</div>