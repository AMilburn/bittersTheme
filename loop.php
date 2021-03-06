<?php // If there are no posts to display, such as an empty archive page ?>
<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php $count = 0; ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- modulo goes here -->
		<?php $count++; ?>
				<!-- odd numbers go left, even numbers go right -->
				<?php if ( $count%2==0 ){ ?>
					<div class="left-side-post">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h2 class="entry-title">
					        	<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
					          	<?php the_title(); ?>
					        	</a>
				     		</h2>
							<section class="entry-content">
								<?php the_excerpt(); ?>
								<?php wp_link_pages( array(
				          		'before' => '<div class="page-link"> Pages:',
				          		'after' => '</div>'
				        		)); ?>
							</section><!-- .entry-content -->
						</article><!-- #post-## -->
					</div>
				<?php } else {?>
					<div class="right-side-post">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h2 class="entry-title">
					        	<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
					          	<?php the_title(); ?>
					        	</a>
					     	 </h2>	
							<section class="entry-content">
								<?php the_excerpt(); ?>
								<?php wp_link_pages( array(
				          		'before' => '<div class="page-link"> Pages:',
				          		'after' => '</div>'
				        		)); ?>
							</section><!-- .entry-content -->
						</article><!-- #post-## -->
					</div>		
				<?php } ?>
		<?php comments_template( '', true ); ?>

<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
