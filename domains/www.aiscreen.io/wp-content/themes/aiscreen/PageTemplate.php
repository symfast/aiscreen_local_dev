<?php
/* Template Name:  PageTemplate */

get_header();
?>

<main>
	 <?php if (have_posts()) : ?>
     <?php  while (have_posts()): the_post(); ?>
        
			<div class="wrapper-documentation">
				<div class="documentation">
					<?php the_content(); ?>
				</div>
			</div>           
		<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>