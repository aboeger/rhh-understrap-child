<?php
/**
 * Single post partial template for Staff Member
 *
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="staff-header">

		<?php the_title( '<h1 class="staff-name">', '</h1>' ); ?>
    <?php echo do_shortcode('[pods field="staff_title"]'); ?>



	</header><!-- .entry-header -->
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="entry-content">

        <?php the_content(); ?>

        <?php
        wp_link_pages(
          array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
            'after'  => '</div>',
          )
        );
        ?>

      </div><!-- .entry-content -->
    </div>
    <div class="col-md-6">
      <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    </div>

  </div>

</div>


</article><!-- #post-## -->
