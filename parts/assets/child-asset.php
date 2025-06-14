<?php
  $components          = $args['sub_components'] ?? '';
?>

<div class="min-h-screen">
  <div style="opacity: 1;">
    <main>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if (have_rows('sub_components')): ?>
          <?php while (have_rows('sub_components')): the_row(); ?>
        
          <?php get_template_part( 'parts/body-section', null, null ); ?>
          <?php get_template_part( 'parts/card-section', null, ["type"=>"asset"] ); ?>
          <?php get_template_part( 'parts/body-column-2', null, null ); ?>
          <?php get_template_part( 'parts/column-with-form', null, null ); ?>

          <?php endwhile; ?>
        <?php endif; ?>
      <?php endwhile; endif; ?>
    </main>
  </div>
</div>