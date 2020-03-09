<div class="container">
	<div class="row">
		<div class="col-xs-12">
		<br>
		<br>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
		<div class="col-xs-4">
			<div class="pull-left">
				<?php the_post_thumbnail( 'medium' ); ?>
			</div>


		</div>

		<div class="col-xs-4 results-content">
		<?php the_title(); ?>
		<?php if ( has_post_thumbnail() ) : ?>

		<?php endif; ?>

		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" class="ghost-button">Read More</a>
		<br>
		<br>
		<?php
				$post_tags = get_the_tags();
		if ( $post_tags ) {
			foreach ( $post_tags as $tag ) {
				echo '<ul class="tags">
						<li><a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a></li></ul>';
			}
		}



		?>
			

		</div>
		</article>
			


		</div>
	</div>
</div>
