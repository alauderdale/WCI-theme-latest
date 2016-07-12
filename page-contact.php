<?php
/*
Template Name: Contact
 */
?>

<?php get_header(); ?>


<?php
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
	wpcf7_enqueue_scripts();
}

if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
	wpcf7_enqueue_styles();
}
?>

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
			<div class='col-sm-9'>
				<div class='padding-right no-padding-right-sm'>
					<?php the_content();?>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='col-lg-12'>
				<?php the_field('contact_form_shortcode');?>
			</div>
		</div>
	</div>
</section>


<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>