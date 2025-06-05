<?php get_header(); ?>
<div class="min-h-screen">
  <div style="opacity: 1;">
    <main>
      <section class="relative z-10 px-6 md:px-12">
        <div class="max-w-screen-xl pt-40 mx-auto md:pt-64">
          <p class="text-lg text-orange md:w-7/12"><?= single_term_title(); ?></p>
          <h1 class="mt-4 font-serif text-5xl font-medium tracking-tight text-brand">Assets under management</h1>
          <p class="mt-4 text-orange">Our portfolio is composed of high-quality assets in prime locations throughout Australia.</p>
        </div>
      </section>

      <?php
      $term = get_queried_object();
      $args = [
        'post_type' => 'assets',
        'post_status' => 'publish', 
        'posts_per_page' => -1,
        'post_parent'    => 0,
        'tax_query' => array(
          array(
            'taxonomy' => 'asset_category',
            'field' => 'slug',
            'terms' => $term->slug,
          ),
        ),
      ];
      $query = new WP_Query($args);
      ?>
      
      <?php if ($query->have_posts()) : ?>
        <section class="px-6 py-24 md:px-12">
          <div class="max-w-screen-xl mx-auto space-y-12">
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php get_template_part( 'parts/assets-card', null, null ) ?>
          <?php endwhile; ?>
          </div>
        </section>
      <?php else : ?>
        <p>No assets found in this category.</p>
      <?php endif; ?>
    </main>
</div>
</div>
<?php get_footer(); ?>
