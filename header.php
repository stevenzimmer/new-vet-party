<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name')?></title>
	<?php wp_head() ?>
</head>
<body>
	<nav role="navigation" class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
				</button> -->
				<a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a>
			</div>
			<div id="myNavbar" class="collapse navbar-collapse">
				<span class="navbar-text navbar-right"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> (209) 489-7588 <span style="margin-left:5px;margin-right:5px">|</span> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:<?php bloginfo('admin_email')?>" class="navbar-link"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php bloginfo('admin_email')?></a></span>
			</div>
		</div>
	</nav>