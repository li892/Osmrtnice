<?php
/**
 * @package osmrtnice
 */
?>
<div <?php post_class( 'inside item' ); ?>>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post-page', array( 'class' => 'featured-image' ) ); ?></a>
	<h2 class="itemtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="itemdate"><a href="<?php the_permalink(); ?>"><?php stacker_posted_on(); ?></a></div>
	<div id="content">
		<?php
			wp_link_pages();
			the_content();
			posts_nav_link( ' &#183; ', 'previous page', 'next page' );
			edit_post_link( __( 'Edit', 'stacker-lite' ), '<span class="edit-link">', '</span>' );
		?>
		<div id="bottommeta">
			<?php the_tags( __( 'Tags: ', 'stacker-lite' ), '  ', '' ); ?>
		</div>
<!--- google oglasi  update 9/2017  --->
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-2184241449874460"
     data-ad-slot="7469546393"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>
