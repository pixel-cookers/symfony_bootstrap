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