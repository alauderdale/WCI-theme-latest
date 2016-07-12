<section class='invert-section bg-cover' style='background-image:url(<?php bloginfo('template_url'); ?>/images/banner_signup.png); background-color:#C2B170;'>
	<div class='container padding-top'>
		<div class='row'>
			<?php $teaserLoop = new WP_Query( array('post_type' => 'teaser', 'posts_per_page' => 1) ); ?>

			<?php while ( $teaserLoop->have_posts() ) : $teaserLoop->the_post(); ?>
				<div class='col-sm-3'></div>
				<div class='col-sm-6'>
					<h4 class='text-uppercase quarter-margin-bottom'>
					<?php the_title();?>
					</h4>
					<p>
						<small>
							<?php the_field('subtext');?>
						</small>
					</p>
				</div>
				<div class='col-sm-3'>
					<a class='btn btn-skew btn-default btn-white' href='<?php echo get_permalink( get_page_by_title( 'Contact' ) ) ?>'>
						Lets do this
					</a>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</section>