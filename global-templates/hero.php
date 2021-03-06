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
			    <?php 
			    	$title = get_field('lead_title');
			    		echo '<header class="entry-header">'.vcu_online_title_breaker($title).'</header>';?>
			    <p class="lead"><?php echo get_field('lead_story');?></p>
			    <?php echo vcu_online_button_repeater();?>
			</div>
	 	 </div>		
	</div>	
</div>
<div class="wrapper" id="secondary">
	<div class="container">
		 <div class="row secondary-message-row">
				<?php echo vcu_online_secondary_message();?>
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

