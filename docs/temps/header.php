<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Bootdation<?php if($pn !== 'home'): ?> :: <?php echo $pn; ?><?php endif; ?></title>
	<!-- <link href="/base/style.css" rel="stylesheet"> -->
	<!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
	<link href="../style.css" rel="stylesheet">
	<link href="assets/css/docs.css" rel="stylesheet">
	<link href="assets/css/pygments-manni.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="assets/ico/favicon.png">
</head>
<body<?php if($pn === 'home'): ?> class="bs-docs-home"<?php endif; ?>>
	<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">
		<div class="container">
			<a href="index.php" class="navbar-brand">Bootdation</a>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="nav-collapse collapse bs-navbar-collapse">
				<ul class="nav navbar-nav">
					<li<?php if($pn === 'Getting Started') { echo ' class="active"'; }?>>
						<a href="getting-started.php">Getting started</a>
					</li>
					<li<?php if($pn === 'CSS') { echo ' class="active"'; }?>>
						<a href="css.php">CSS</a>
					</li>
					<li<?php if($pn === 'Components') { echo ' class="active"'; }?>>
						<a href="components.php">Components</a>
					</li>
					<li<?php if($pn === 'Javascript') { echo ' class="active"'; }?>>
						<a href="javascript.php">JavaScript</a>
					</li>
					<li<?php if($pn === 'Foundation') { echo ' class="active"'; }?>>
						<a href="foundation.php">Foundation</a>
					</li>
				</ul>
			</div>
		</div> <!-- .container -->
	</div> <!-- .navbar -->