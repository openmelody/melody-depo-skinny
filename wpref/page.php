<?php get_header(); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
						
	<div class="post">

		<h3><?php the_title(); ?><?php edit_post_link('Edit', '<span class="edit">', '</span>'); ?></h3>

		<?php the_content('[Read more &rarr;]'); ?>
			
	</div><!-- end post -->

<?php endwhile; ?>
								
<?php else : ?>
	
	<div class="post">
		<h2>Doh! File Not Found</h2>
		<p>Sorry, what you're looking for isn't here.</p>
	</div><!-- end post -->
	
<?php endif; ?>
	
<?php get_footer(); ?>