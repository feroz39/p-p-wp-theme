<?php 
/* Template Name: Single Column Template */ 
?>

<?php get_header('dark'); ?>

<div class="min-h-screen">
    <div style="opacity: 1;">
        <main id="...slug">

        <?php  while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'parts/single-column-hero', null, null ); ?>
        <?php get_template_part( 'parts/post-body', null, ['content'=>get_the_content()]); ?>

        <?php endwhile; ?>

        </main>
    </div>
</div>

<?php get_footer('cta'); ?>