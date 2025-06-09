<?php
$page  = $args['page'] ?? [];

/* Feature Posts from Insights page */
$featured_posts = get_field('featured_posts', $page->ID);
?>
<section class="px-6 pt-36 md:px-12">
    <div class="grid max-w-screen-xl gap-12 mx-auto sm:grid-cols-2">
      <?php
				$args = [
					'post_type' => 'post',
					'posts_per_page' => 1,
				];
				$query = new WP_Query($args);
			?>
			<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php get_template_part( 'parts/molecules/post-loop-item', null, null ); ?>
				<?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      <?php if(!empty($featured_posts)): ?>
      <div>
        <h2 class="mb-4">Featured Posts</h2>
        <?php foreach($featured_posts as $index => $post_item): ?>
            <?php
                $post_id = url_to_postid($post_item["post_link"]);
                $post = get_post($post_id);
                $categories = get_the_category($post_id);
            ?>
                <a id="no-image-card" class="flex flex-col overflow-hidden border-t-2" href="/perths-cbd-office-market-review-q1-2024">
                <div class="flex flex-col justify-between py-4">
                    <h3 class="text-lg text-orange">
                        <?= $post->post_title; ?>
                    </h3>
                    <?php if (!empty($categories)): ?>
                    <div class="flex flex-row mt-2 space-x-4">
                        <p class="w-24 text-sm">
                            <?= $categories[0]->name; ?>
                        </p>
                    </div><?php endif; ?>
                </div>
                </a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
</section>
