<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */

?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<!-- Swiper -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

	<!-- Boostrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>wp-content\themes\themevenus\style.css" type="text/css" media="all" />
	<?php wp_head();?>
</head>

<header class="header container">
	<div class="logo">
		<a class="buttons">Logo Impsum</a>
	</div>

	<div class="headerButtons">
		<a class="buttons" href="https://google.com"> Home </a>
		<a class="buttons" href="https://google.com"> Products </a>
		<a class="buttons" href="https://google.com"> About Us </a>
		<a class="buttons" href="https://google.com"> Contact Us </a>
	</div>
</header>
	
