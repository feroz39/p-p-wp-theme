<?php 
/* Template Name: Home Page Template */ 
?>
<?php get_header('dark'); ?>

<?php if (have_rows('components')): ?>

<div class="min-h-screen">
	<div style="opacity: 1;">
		<main id="...slug">

			<?php while (have_rows('components')): the_row(); ?>

			<?php get_template_part( 'parts/home-hero', null, null ); ?>
			<?php get_template_part( 'parts/page-hero-white', null, null ); ?>
			<?php get_template_part( 'parts/horizontal-panel', null, null ); ?>
			<?php get_template_part( 'parts/featured-asset', null, null ); ?>
			<?php get_template_part( 'parts/service-panel', null, null ); ?>
			<?php get_template_part( 'parts/content-marketing', null, null ); ?>
			<?php get_template_part( 'parts/testimonial-section', null, null ); ?>

      <?php if (get_row_layout() === 'key_stats'): ?>
        <section class="px-6 pt-36 md:px-12 bg-beige">
          <?php get_template_part('parts/key-stats', null, ["stats"=>get_sub_field('stats'),"type"=>1]); ?>
        </section>
      <?php endif; ?>

      <?php endwhile; ?>

    </main>
  </div>
</div>

<?php endif; ?>

<?php get_footer('cta'); ?>