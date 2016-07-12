<?php
/*
Template Name: Portfolio with categories
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
                    <?php
                    // A term is an item of a taxonomy (e.g. "Promotional" could be a term for the taxonomy "video_type")
                    // ...so $categories could be $terms and it would still make sense
                    $categories = get_terms('category');
                    foreach( $categories as $category ):
                    ?>
                    <div class='row'>
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h5>
                                    <?php echo $category->name; // Print the cat title ?>
                                </h5>
                            </div>
                        </div>
                     </div>
            <div class="row">
                <?php
                //select posts in this category (term), and of a specified content type (post type) 
                $posts = get_posts(array(
                'post_type' => 'portfolio',
                'taxonomy' => $category->taxonomy,
                'term' => $category->slug,
                'nopaging' => true, // to show all posts in this category, could also use 'numberposts' => -1 instead
                ));
                foreach($posts as $post): // begin cycle through posts of this category
                setup_postdata($post); //set up post data for use in the loop (enables the_title(), etc without specifying a post ID)
                ?>
                    <?php get_template_part( 'content', 'portfolio_thumb' ); ?>
                <?php endforeach; ?>
            </div>
                <?php endforeach; ?>


			</div>
		</div>
		</section>
<?php endwhile; // end of the loop. ?>
<?php get_template_part( 'content', 'teaser' ); ?>
<?php get_footer(); ?>