<?php
/*
Template Name: Default Page
*/
?>
<?php get_header(); ?>	

<div class="container">
      
    <div class="row">

 		<div id="content" class="col-md-9" >

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; else: ?>
				<center>
					<h3>
						<?php _e('Sorry, no posts matched your criteria.'); ?>
					</h3>
				</center>
			<?php endif; ?>

 		</div>

<?php get_sidebar();?>

  </div><!--/.row-->
</div><!--/.container-->
<?php get_footer();?>