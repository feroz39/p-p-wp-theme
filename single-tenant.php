<?php get_header(); ?>

<main>
  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if (have_rows('components')): ?>
			<?php while (have_rows('components')): the_row(); ?>
			<?php get_template_part( 'parts/tenant-hero', null, [] ); ?>
			<?php get_template_part( 'parts/body-section-tenant', null, [] ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>