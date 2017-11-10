<?php
/**
 * @package osmrtnice
 */
?>
<div <?php post_class( 'item' ); ?>>
	<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'post-thumb', array( 'class' => '' ) );
		} else {
			?>
			<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/default.png"
				 alt="<?php the_title(); ?>"/>
		<?php } ?></a>
	<h2 class="itemtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="itemdate"><a href="<?php the_permalink(); ?>"><?php stacker_posted_on() ?></a></div>
</div><!--End Post -->
