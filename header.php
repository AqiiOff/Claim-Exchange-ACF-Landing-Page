<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'hello_elementor_enable_skip_link', true );
$skip_link_url = apply_filters( 'hello_elementor_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.cdnfonts.com/css/poetsen-one" rel="stylesheet">
	<link href="/assets/fonts/Lato-Regular.ttf" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="/assets/js/accordion.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<?php
$logo = get_field('logo');
?>
<div id="container">
<header>
    <div class="logo"><img class="logo_img img-responsive" href="<?php echo esc_url( $skip_link_url ); ?>" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></div>
    <div class="nav"></div>
</header>


