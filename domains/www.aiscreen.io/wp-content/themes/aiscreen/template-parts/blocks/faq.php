
<section class="bl_faq">
	<div class="container">
		<div class="bl_faq__content">
			<h2>
				 <?php the_sub_field('title'); ?>
			</h2>
			<div class="bl_faq__items">
				<ul>

					<?php if (have_rows('items')) : ?>
						<?php while (have_rows('items')) : the_row(); ?>
							<li>
								<h4>
									 <?php the_sub_field('title'); ?>
								</h4>
								<div class="bl_faq__hidden">
									<p>
										<?php the_sub_field('text'); ?>
									</p>
								</div>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>

					
				</ul>
			</div>
		</div>
	</div>
</section>