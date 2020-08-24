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
    <div class="container">
      <?php the_title( '<h1 class="staff-name">', '</h1>' ); ?>

    </div>




	</header><!-- .entry-header -->
<div class="container" id="staff-container">
  <div class="row flex-column-reverse flex-md-row">
    <div class="col-md-6">
      <div class="entry-content">
        <p class="staff-title">
          <?php echo do_shortcode('[pods field="staff_title"]'); ?>
        </p>
        <hr class="solid">

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
      <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
    </div>

  </div>

</div>


</article><!-- #post-## -->
