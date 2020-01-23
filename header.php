<?php
// Template name : header

?><!doctype html>
<html <?php language_attributes(); ?> class="m-0">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body>
<div class="container nav-container">
        <nav class="navbar navbar-expand-lg px-5 d-flex navbar-dark navbar-custom">
            <a class="navbar-brand text-uppercase" href="#">Composition</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="/wp-challenge">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#">Magasin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="/wp-challenge/archi">Architecte d'intérieur</a>
				</li>
				<li class="nav-item">
                    <a class="nav-link text-uppercase" href="/wp-challenge/about">A propos</a>
				</li>
				<li class="nav-item">
                    <a class="nav-link text-uppercase" href="/wp-challenge/blog">Blog</a>
				</li>
				<li class="nav-item">
                    <a class="nav-link text-uppercase" href="/wp-challenge/contact">Contact</a>
				</li>
            </div>
        </nav>
</div>