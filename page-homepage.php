<?php
/*
Template Name: Home
 */
?>


<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<section class='invert-section bg-cover' style='background-image:url(<?php the_field('banner_image');?>'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-8 col-md-10'>
					<h1>
						<?php the_field('home_title');?>
					</h1>
				</div>
				<div class='col-lg-3 col-md-2'></div>
			</div>
		</div>
	</section>
	<section>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='heading-bordered'></div>
					<h2>
						<?php the_field('home_subtitle');?>
					</h2>
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-9'>
					<div class='padding-right no-padding-right-sm'>
						<?php the_content();?>
					</div>
				</div>
				<div class='col-sm-3'>
					<a class='btn btn-default btn-skew' href='<?php the_field('home_learn_more_link');?>'>
						Learn More
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class='no-padding-top'>
		<div class='container'>
			<div class='home-line'></div>
			<?php if( have_rows('homepage_numbers') ): ?>
				<div class='row'>
					<?php 
					$number = 1;
					while( have_rows('homepage_numbers') ): the_row(); 
		// vars
					$title = get_sub_field('number_title');
					$text = get_sub_field('number_text');
					?>

					<div class='col-sm-4'>
						<h3 class='display-num'>
							<?php echo $number; ?>
						</h3>
						<h5>
							<?php echo $title; ?>
						</h5>
						<p>
							<small>
								<?php echo $text; ?>
							</small>
						</p>
					</div>
					<?php 
					$number++;
					endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<section class='invert-section bg-cover' style='background-image:url(<?php bloginfo('template_url'); ?>/images/banner_value.png);'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='heading-bordered'></div>
					<h2>
						<?php the_field('values_title');?>
					</h2>
					<p class='text-columns-2'>
						<?php the_field('values_text');?>
					</p>
				</div>
			</div>
			<div class='row margin-top'>
				<div class='col-lg-12'>
					<div class='text-center'>
						<a class='btn btn-default btn-skew' href='<?php the_field('contact_us_link');?>'>
							Contact Us
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='heading-bordered'></div>
					<h2>
						<?php the_field('home_portfolio_title');?>
					</h2>
				</div>
			</div>
		<?php endwhile; // end of the loop. ?>
		<div class='row'>
			<?php $portfolioLoop = new WP_Query( array('post_type' => 'portfolio', 'posts_per_page' => 3) ); ?>

			<?php while ( $portfolioLoop->have_posts() ) : $portfolioLoop->the_post(); ?>
				<div class='col-sm-4'>
				<a target="_blank" href='<?php the_field('company_website');?>'>
						<div class='portfolio-card'>
							<img src='<?php the_field('company_image');?>'>
						</div>
					</a>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
		<div class='row margin-top'>
			<div class='col-lg-12'>
				<div class='text-center'>
					<a class='btn btn-default btn-skew' href='<?php the_field('portfolio_link');?>'>
						See All
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part( 'content', 'teaser' ); ?>


<?php get_footer(); ?>