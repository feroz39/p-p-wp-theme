<?php get_header(); ?>

<div class="min-h-screen">
  <div style="opacity: 1;">
    <main>
      <section class="relative z-10 px-6 md:px-12">
        <div class="max-w-screen-xl pt-40 mx-auto md:pt-64">
          <p class="text-lg text-orange md:w-7/12">All Assets</p>
          <h1 class="mt-4 font-serif text-5xl font-medium tracking-tight text-brand">Assets under management</h1>
          <p class="mt-4 text-orange">Our portfolio is composed of high quality assets in prime locations throughout Australia.</p>
        </div>
      </section>
      <?php
      $args = [
        'post_type' => 'assets',
        'post_status' => 'publish', 
        'posts_per_page' => -1,
        'post_parent'    => 0,
      ];

      $query = new WP_Query($args);?>
      <?php if ( $query->have_posts() ) : ?>
      <section class="px-6 py-24 md:px-12">
        <div class="max-w-screen-xl mx-auto space-y-12">
          <?php 
            while ( $query->have_posts() ) : $query->the_post();

            /* All variables */
            // $title = get_the_title();
            // $slug = get_post_field('slug');
            // $excerpt = get_the_excerpt();
            // $thumbnail_url = get_the_post_thumbnail_url();
            // $cat = get_categories();
            
          ?>
          <?php 
          // echo '<pre>';
          // var_dump($slug);
          // echo '</pre>';
          ?>
            <?php get_template_part( 'parts/assets-card', null, null ) ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </section>
      <?php else : ?>
        <p>No posts found.</p>
      <?php endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
