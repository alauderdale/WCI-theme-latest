<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>

</div>
<!-- end main content -->
<footer class='global-footer'></footer>
<div class='container'>
  <div class='row'>
    <div class='col-lg-12'>
      <div class='border-top'></div>
    </div>
  </div>
</div>
<section>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-6'>
        <p class='quarter-margin-bottom'>
          <small>
            ©2015 Walnit Creek Investments
          </small>
        </p>
      </div>
      <div class='col-sm-6'>
        <div class='pull-right no-float-right-sm'>
          <ul class='list-inline menu-social'>
          <?php $socialLoop = new WP_Query( array('post_type' => 'social', 'posts_per_page' => 3) ); ?>
            <?php while ( $socialLoop->have_posts() ) : $socialLoop->the_post(); ?>
              <li>
                <a class='btn btn-default btn-skew' target="_blank" href='<?php the_field('link_url');?>'>
                  <i class='fa <?php the_field('icon_class');?>'></i>
                </a>
              </li>
              <?php wp_reset_postdata(); ?>
            <?php endwhile; // end of the loop. ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/classie.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/nav.js" type="text/javascript"></script>
</div>
</body>
</head>
</html>



<?php wp_footer(); ?>

</body>
</html>
