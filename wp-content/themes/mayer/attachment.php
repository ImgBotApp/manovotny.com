<?php
/**
 * The attachment template. Used when viewing a single attachment.
 *
 * @package    Mayer
 * @version    1.0.0
 * @since      1.0.0
 */
?>
<?php get_header(); ?>

	<div id="primary-wrapper">
		<div id="primary" class="container">

			<?php if ( is_rtl() ) { ?>
				<?php get_sidebar(); ?>
			<?php } // end if ?>

			<main id="main" class="site-main col-lg-8 col-md-8" role="main">

				<?php if ( function_exists( 'yoast_breadcrumb' ) ) { ?>
					<?php yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' ); ?>
				<?php } // end if ?>

				<?php while ( have_posts() ) { ?>
					<?php the_post(); ?>
					<div <?php post_class(); ?>>

						<h1 class="post-title entry-title">
							<?php the_title(); ?>
						</h1><!-- .post-title -->

						<?php get_template_part( 'partials/post-meta' ); ?>

						<div class="post-content">
							<?php $att_image = wp_get_attachment_image_src( get_the_ID() , 'large' ); ?>
							<img src="<?php echo $att_image[0];?>" class="attachment-large" alt="<?php echo get_the_title(); ?>" />
						</div><!-- .post-content -->

					</div><!-- div -->
				<?php } // end while ?>

				<?php get_template_part( 'partials/attachment-pagination' ); ?>

			</main><!-- #main -->

			<?php if ( ! is_rtl() ) { ?>
				<?php get_sidebar(); ?>
			<?php } // end if ?>

		</div><!-- #primary -->

	</div><!-- /#primary-wrapper -->

<?php get_footer(); ?>