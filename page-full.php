<?php

/*
	Template Name: Hero Page Template
*/

get_header();  ?>
<!-- this is where the custom title goes -->

<!-- THIS IS THE CUSTOM IMAGE -->
<div class="custom-hero-image" style="background-image: url('<?php header_image(); ?>')">
	<div class="site-title"> <?php echo bloginfo( 'name' ); ?> </div>
	<div class="site-description"> <?php echo bloginfo( 'description' ); ?> </div>
</div>

<!-- THIS IS THE CUSTOM IMAGE GOING AWAY -->
<!-- custom menu goes here? -->
<?php  dynamic_sidebar( 'body-widget-area-1' ); ?> 
<div class="main">
	<div class="container" >

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<?php  
    	$thumb_id = get_post_thumbnail_id();
    	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
    	$thumb_url = $thumb_url_array[0];
    	?>
		<?php if ( has_post_thumbnail( $post_id ) ){ ?>
			<div class="mainPost" style="background-image: url('<?php echo $thumb_url; ?>')">
				<div class="postText">
		      <h2><?php the_title(); ?></h2> 
		      <?php the_content(); ?>
		      </div>
			</div>	
		<?php } else {?>
			<div class="mainPost" style="background-image: url('<?php bloginfo('template_url'); ?>/images/dark_wall.png')"> <!-- change default background image -->
				<div class="postText">
			      <h2><?php the_title(); ?></h2>
			      <?php the_content(); ?>
				</div>	
			</div>
		<?php } ?>
    <?php endwhile; // end the loop?>
	<div class="blog-preview clearfix">
	    <?php // 2 Featured blog posts
	    $args = array( 'numberposts' => 2 );
	    $lastposts = get_posts( $args );
	    foreach($lastposts as $post) : setup_postdata($post);?>
		<?php if (has_post_thumbnail( $post->ID ) ){ ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<a href="<?php the_permalink(); ?>"><div class="featured-post" style="background-image: url('<?php echo $image[0]; ?>')">
			<div class="post-title">
    			<h2><?php the_title(); ?></h2>
    		</div>
		</div></a>
		<?php } else {?>
		<a href="<?php the_permalink(); ?>"><div class="featured-post" style="background-image: url('<?php bloginfo('template_url'); ?>/images/dark_wall.png')"> <!-- change default background image -->
			<div class="post-title">
    			<h2><?php the_title(); ?></h2>
    		</div>
		</div></a>
		<?php } // End of if statement?> 
	    <?php endforeach; // End the loop ?>
	</div>
	<?php  dynamic_sidebar( 'body-widget-area-2' ); ?> 	
	<div class="testflex">
		<?php echo do_shortcode('[instagram-feed class=feed-one imagepadding=0 showheader=false showbutton=false showfollow=false]');  ?>  <!--- Instagram feed widget -->
	</div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>