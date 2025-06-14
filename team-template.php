<?php 
/* Template Name: Team Page Template */ 
?>

<?php if (have_rows('components')): ?>
  <?php while (have_rows('components')): the_row(); ?>
    <?php if (get_row_layout() === 'header_section_white'): ?>
      <?php get_header(); ?>

    <?php elseif(get_row_layout() === 'header_section'): ?>
      <?php if(get_sub_field('background_color') == 'blue'): ?>
        <?php get_header('dark'); ?>
      <?php else: ?>
        <?php get_header(); ?>
      <?php endif; ?>
    <?php elseif (get_row_layout() === 'lead_generation_hero'): ?>
      <?php get_header('dark'); ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php else: ?>
  <?php get_header('dark'); ?>
<?php endif; ?>


<?php if (have_rows('components')): ?>

<div class="min-h-screen">
	<div style="opacity: 1;">
		<main id="...slug">

			<?php while (have_rows('components')): the_row(); ?>

			<?php get_template_part( 'parts/page-hero', null, null ); ?>
			<?php get_template_part( 'parts/page-hero-white', null, null ); ?>
			<?php get_template_part( 'parts/lead-generation-hero', null, null ); ?>
			<?php get_template_part( 'parts/section-text-form', null, null ); ?>
			<?php get_template_part( 'parts/horizontal-panel', null, null ); ?>
			<?php get_template_part( 'parts/intro-panel', null, null ); ?>
			<?php get_template_part( 'parts/body-section', null, null ); ?>
			<?php get_template_part( 'parts/featured-asset', null, null ); ?>
			<?php get_template_part( 'parts/content-marketing', null, null ); ?>
      <?php get_template_part( 'parts/card-section', null, ["type"=>"team"] ); ?>
			<?php get_template_part( 'parts/accordion', null, null ); ?>
			<?php get_template_part( 'parts/testimonial-section', null, null ); ?>
      
      <?php endwhile; ?>

    </main>
  </div>
</div>

<?php endif; ?>

<?php get_footer('cta'); ?>