<?php
/*
Template Name: About
 */
?>


<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<section class='invert-section bg-cover' style='background-image:url(<?php the_field('banner_image');?>)'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-8 col-md-10'>
					<h1>
						<?php the_title();?>
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
						<?php the_field('approach_title');?>
					</h2>
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-9'>
					<div class='padding-right no-padding-right-sm'>
						<?php the_content();?>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='check-list'>
						<?php if( have_rows('criteria_items') ): ?>
							<?php 
							while( have_rows('criteria_items') ): the_row(); 
							// vars
							$text = get_sub_field('title');
							?>
							<div class='media'>
								<div class='media-left media-top'>
									<div class='check'>
										<i class='fa fa-check'></i>
									</div>
								</div>
								<div class='media-body'>
									<div class='line'></div>
									<h5>
										<?php echo $text; ?>
									</h5>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class='invert-section bg-cover' style='background-image:url(<?php the_field('involvement_background');?>);'>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-9'>
				<div class='heading-bordered'></div>
				<h2>
					<?php the_field('involvement_title');?>
				</h2>
				<p>
					<?php the_field('involvement_text');?>
				</p>
			</div>
			<div class='col-sm-3'></div>
		</div>
		<div class='row margin-top'>
			<?php if( have_rows('involvement_items') ): ?>
				<?php 
				while( have_rows('involvement_items') ): the_row(); 
							// vars
				$icon = get_sub_field('icon_class');
				$text = get_sub_field('text');
				?>
				<div class='col-sm-6'>
					<div class='media'>
						<div class='media-left media-top'>
							<div class='padded no-padding-top'>
								<i class='fa <?php echo $icon; ?>'></i>
							</div>
						</div>
						<div class='media-body'>
							<p>
								<small>
									<?php echo $text; ?>
								</small>
							</p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class='row margin-top'>
		<div class='col-lg-12'>
			<div class='text-center'>
				<a class='btn btn-default btn-skew' href='<?php the_field('get_involved_link');?>'>
					Get Involved
				</a>
			</div>
		</div>
	</div>
</div>
</section>
<section>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-9'>
				<div class='heading-bordered'></div>
				<h2>
					<?php the_field('partnerships_title');?>
				</h2>
				<p>
					<?php the_field('partnerships_text');?>
				</p>
			</div>
			<div class='col-sm-3'></div>
		</div>
		<div class='row margin-top'>
			<?php if( have_rows('partnerships_items') ): ?>
				<?php 
				while( have_rows('partnerships_items') ): the_row(); 
							// vars
				$text = get_sub_field('text');
				?>
				<div class='col-sm-6'>
					<div class='media margin-bottom'>
						<div class='media-left media-top'>
							<div class='check'>
								<i class='fa fa-check'></i>
							</div>
						</div>
						<div class='media-body'>
							<p class='padding-left'>
								<small>
									<?php echo $text; ?>
								</small>
							</p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<div class='row margin-top'>
			<div class='col-lg-12'>
				<div class='text-center'>
					<a class='btn btn-default btn-skew' href='<?php the_field('get_involved_link');?>'>
						Partner With Us
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; // end of the loop. ?>
<?php get_template_part( 'content', 'teaser' ); ?>


<?php get_footer(); ?>