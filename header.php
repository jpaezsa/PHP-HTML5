<?php
	require 'functions.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="<?php the_website('description'); ?>"/>
	<meta name="keywords" content=""/>
	<meta name="owner" content=""/>
	<meta name="rating" content="General"/>
	<meta name="robots" content="index, follow"/>
	<link rel="author" href="humans.txt" />
	<!--Icons-->
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png"/>
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png"/>
	<link rel="apple-touch-icon" href="images/icons/apple-touch-icon-57x57.png"/>
	<link rel="shortcut icon" href="images/icons/favicon.png"/>
	<!--Facebook Tags-->
	<meta name="og:title" content="<?php the_website('title'); ?>"/>
	<meta name="og:type" content="website"/>
	<meta name="og:url" content="<?php the_website('url'); ?>"/>
	<meta name="og:image" content="images/fb-image.png"/>
	<meta name="og:site_name" content="<?php the_website('name'); ?>"/>
	<meta name="og:description" content="<?php the_website('title'); ?>"/>
	<link href="<?php the_website('url'); ?>" rel="index" title="<?php the_website('title'); ?>"/>
	<!--[if IE]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" href="css/ie.css" media="screen"/>
	<![endif]-->
	<link rel="stylesheet" href="style.css" media="screen"/>
