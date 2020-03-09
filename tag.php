<?php get_header(); ?>

<?php echo $wp_query->found_posts . 'results with tags matching '; ?> " <?php single_tag_title( $prefix = '', $display = true ); ?>"


<?php

if ( have_posts() ) :

	while ( have_posts() ) :
		the_post();
		?>

			<?php get_template_part( 'content', 'search' ); ?>


		<?php
		endwhile;



		 endif;


?>





<?php get_footer(); ?>
