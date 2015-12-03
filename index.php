<!DOCTYPE html>
<?php get_header(); ?>

		
		<div class = "container">

			<div class = "jumbotron">
				<h2><?php the_title(); ?></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc arcu erat, congue eget ornare et, luctus eget purus. Etiam et risus metus. Nam sed mi tellus. Mauris molestie massa eu metus tempor, in hendrerit arcu adipiscing.</p>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 <?php if (++$count > 1) break; ?>
	 <?php echo '<a href="', get_permalink(), '">';
if (has_post_thumbnail()) {
	the_post_thumbnail();
}
else {
	echo 
		'<img src="',
		get_bloginfo('template_directory'), '/images/thumb-default.png',
		'" width="100" height="75" alt="thumbnail" />';
}
echo '</a>';?>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched yours criteria.'); ?></p><?php endif; ?>

			
			</div>

			<div class = "panel panel-default panel-body">
				<div class = "row">
					<div class = "col-md-2">
						<ul class="nav nav-pills nav-stacked">
							<li><a href = "#">Category One</a></li>
							<li><a href = "#">Category Two</a></li>
							<li><a href = "#">Category Three</a></li>
							<li><a href = "#">Category Four</a></li>
						</ul>
					</div>
					<div class = "col-md-10">
					
					<?php query_posts('cat=2'); ?> 
<?php if (have_posts()) : while (have_posts()) : the_post(); 
get_template( 'post.php' );
?>
	<?php the_category() ?>
	<div class="post" id="post-<?php the_ID('2'); ?>">
		 <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		 <p><?php the_content(__('(more...)')); ?></p>
		  <?php echo '<a href="', get_permalink(), '">';
if (has_post_thumbnail()) {
	the_post_thumbnail();
}
else {
	echo 
		'<img src="',
		get_bloginfo('template_directory'), '/images/thumb-default.png',
		'" width="200" height="105" alt="thumbnail" />';
}
echo '</a>';?>

		 <h4>Posted on <?php the_time('F jS, Y') ?></h4>
		 
	</div>
	<?php endwhile; else: ?>
	<?php _e('Sorry, no posts matched your criteria.'); ?>


<?php endif; ?>

						
						
					</div>
				</div>
			</div>

		</div>
		

	<?php get_footer(); ?> 