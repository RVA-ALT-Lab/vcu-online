<?php
/**
 * Hero setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( get_field('lead_image')):
?>
<?php 
	$lead_image = get_field('lead_image');
	$image_url = $lead_image['sizes']['large'];		
?>
<div class="wrapper" id="home-hero" style="background-image:url(<?php echo $image_url;?>)">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
			    <h1><?php echo get_field('lead_title')?></h1>
			    <p class="lead"><?php echo get_field('lead_story')?></p>
			</div>
	  </div>
	</div>	
</div>

<?php endif;?>

<?php 


if ( is_active_sidebar( 'hero' ) || is_active_sidebar( 'statichero' ) || is_active_sidebar( 'herocanvas' ) ) :
	?>

	<div class="wrapper" id="wrapper-hero">

		<?php		
		get_template_part( 'sidebar-templates/sidebar', 'hero' );
		get_template_part( 'sidebar-templates/sidebar', 'herocanvas' );
		get_template_part( 'sidebar-templates/sidebar', 'statichero' );
		?>

	</div>

	<?php
endif;
