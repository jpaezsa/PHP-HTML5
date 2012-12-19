<?php include('header.php'); ?>
<title>Error 404 - No encontramos lo que buscas</title>
</head>

<body id="error404">
<div class="wrapper"><!--WRAPPER STARTS-->

<section id="main"><!--MAIN STARTS-->

	<div class="content"><!--CONTENT STARTS-->
		<a href="<?php the_website('url'); ?>" class="go-home"><span>&larr;</span> Volver a <?php the_website('name'); ?></a>
		<h1>Error 404</h1>
		<p>No Encontrado</p>
	</div><!--CONTENT ENDS-->

</section>
</div><!--WRAPPER ENDS-->
<?php include('footer.php'); ?>