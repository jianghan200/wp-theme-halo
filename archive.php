<?php get_header(); ?>	
 <div class="container">
      
    <div class="row">

 		<div id="content" class="col-md-10 col-md-offset-1" >
 			<!-- bread crumb -->
			<?php include (TEMPLATEPATH . '/include/breadcrumb.php'); ?>

			<!-- Main loop -->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
					<?php include (TEMPLATEPATH . '/include/archive_box.php'); ?>

				<?php endwhile; ?>
				<!-- pager --> 
				<?php include (TEMPLATEPATH . '/include/pager.php'); ?>

			<?php else: ?>

			<center>
				<h3><?php _e('暂时没有文章哦!'); ?></h3>
			</center>

			<?php endif; ?>

 		</div>
  </div><!--/.row-->
</div><!--/.container-->
<?php get_footer();?>
