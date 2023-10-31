<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
		get_template_part( 'template-parts/dynamic-footer' );
	} else {
		get_template_part( 'template-parts/footer' );
	}
}
?>

<?php wp_footer(); ?>
<footer class="main-footer">
<div class="footer_info">
	<div class="f_logo">
	<?php $flogo = get_field('footer_logo'); ?>
	<img class="flogo_img img-responsive" href="<?php echo esc_url( $skip_link_url ); ?>" 
	src="<?php echo $flogo['url']; ?>" alt="<?php echo $flogo['alt']; ?>">
	</div>
	<div class="empty"></div>
	<div class="info">
		<div class="mobileno">
			<?php
			// $button_url = get_field('button_lose');
			$f_tellink = get_field('mobile_number'); // Replace 'link_field' with the name of your ACF link field

			if ($f_tellink) {
    		$url = $f_tellink['url']; // Get the URL
    		$label = $f_tellink['title']; // Get the link text (label)
    
    		// You can also get the target (e.g., _blank for opening in a new tab/window)
    		$target = $f_tellink['target'];
			}
       		 // Output the link
    		echo '<a class="m_no" href="' . esc_url($url) . '" target="' . esc_attr($target) . '">' . esc_html($label) . '</a>';?>
			</div>
			<div class="timezone">
				<?php $time_zone = get_field('time_zone'); ?>
				<div class="t_zone"><?php echo $time_zone; ?></div>
			</div>
		<div class="sociallinks">
		<div class="twitter">
			<?php
			$twitter_link = get_field('twitter_link'); // Replace 'link_field' with the name of your ACF link field

			if ($twitter_link) {
    		$url = $twitter_link['url']; // Get the URL
    		$label = $twitter_link['title']; // Get the link text (label)
    
    		// You can also get the target (e.g., _blank for opening in a new tab/window)
    		$target = $twitter_link['target'];
			}
        	// Output the link
    		echo '<a class="twitter_link" href="' . esc_url($url) . '" target="' . esc_attr($target) . '">' . esc_html($label) . '</a>';?>
		</div>
		<div class="instagram">
		<?php
			$instagram_link = get_field('insta_link'); // Replace 'link_field' with the name of your ACF link field

			if ($instagram_link) {
    		$url = $instagram_link['url']; // Get the URL
    		$label = $instagram_link['title']; // Get the link text (label)
    
    		// You can also get the target (e.g., _blank for opening in a new tab/window)
    		$target = $instagram_link['target'];
			}
        	// Output the link
    		echo '<a class="insta_link" href="' . esc_url($url) . '" target="' . esc_attr($target) . '">' . esc_html($label) . '</a>';?>
		</div>
		<div class="facebook">
		<?php
			
			$facebook_link = get_field('fb_link'); // Replace 'link_field' with the name of your ACF link field

			if ($facebook_link) {
    		$url = $facebook_link['url']; // Get the URL
    		$label = $facebook_link['title']; // Get the link text (label)
    
    		// You can also get the target (e.g., _blank for opening in a new tab/window)
    		$target = $facebook_link['target'];
			}
        	// Output the link
    		echo '<a class="fb_link" href="' . esc_url($url) . '" target="' . esc_attr($target) . '">' . esc_html($label) . '</a>';?>
		</div>
	</div>
	</div>
</div>
<div class="copyright">
<?php $copyright_text = get_field('copyright_text'); ?>
<div class="copyright_text"><?php echo $copyright_text; ?></div>
</div>
</footer>
</body>
</html>
