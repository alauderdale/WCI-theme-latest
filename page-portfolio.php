<?php
/*
Template Name: Portfolio
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'content', 'page_header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<section>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='heading-bordered'></div>
					<h2>
						<?php the_field('subtitle');?>
					</h2>
				</div>
			</div>
			<div class='row'>
				<?php $portfolioLoop = new WP_Query( array('post_type' => 'portfolio') ); ?>

				<?php while ( $portfolioLoop->have_posts() ) : $portfolioLoop->the_post(); ?>
					<div class='col-sm-4'>
						<a target="_blank" href='<?php the_field('company_website');?>'>
							<div class='portfolio-card no-shadow'>
								<img src='<?php the_field('company_image');?>'>
							</div>
						</a>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		</section>
<?php endwhile; // end of the loop. ?>
<?php get_template_part( 'content', 'teaser' ); ?>
<?php get_footer(); ?>