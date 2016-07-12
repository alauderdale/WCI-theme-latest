<?php
/*
Template Name: Team
 */
?>


<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


	<?php get_template_part( 'content', 'page_header' ); ?>

	<section>
		<div class='container'>
			<?php $teamLoop = new WP_Query( array('post_type' => 'person') ); ?>

			<?php while ( $teamLoop->have_posts() ) : $teamLoop->the_post(); ?>
				<div class='row'>
					<div class='col-sm-3'>
						<img class='img-responsive' src='<?php the_field('headshot');?>'>
					</div>
					<div class='col-sm-9'>
						<h2 class='text-uppercase half-margin-bottom'>
							<?php the_title();?>
						</h2>
						<h5 class='no-margin-bottom'>
							<?php the_field('title');?>
						</h5>
						<div class='heading-bordered'></div>
						<?php the_content();?>
			<?php if( have_rows('social_links') ): ?>
										<ul class='list-inline menu-social no-margin-bottom'>
				<?php 
				while( have_rows('social_links') ): the_row(); 
							// vars
				$icon = get_sub_field('icon_class');
				$link = get_sub_field('link');
				?>
				<li>
					<a class='btn btn-default btn-skew' href='<?php echo $link; ?>' target="_blank">
						<i class='fa <?php echo $icon; ?>
'></i>
					</a>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
					</div>
				</div>
				<hr>
				<?php wp_reset_postdata(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</section>



<?php endwhile; // end of the loop. ?>
<?php get_template_part( 'content', 'teaser' ); ?>


<?php get_footer(); ?>