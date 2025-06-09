<?php get_header(); ?>

<div class="min-h-screen">
  <div style="opacity: 1;">
    <main>
      <?php
      $category = get_queried_object();
			$category_slug = isset($_GET['cat']) ? sanitize_text_field($_GET['cat']) : '';
			?>
			<?php if ($category->slug === 'news-views' && $category->parent == 0): ?>
			
				<?php 
					$page = get_page_by_path('news-views');
					if ($page) :
				?>
					<div id="motion-section">
						<section class="relative z-10 px-12">
							<div class="max-w-screen-xl pt-40 mx-auto md:pt-64">
								<p class="text-lg text-orange md:w-7/12">
									<?= esc_html(get_the_title($page->ID)); ?>
								</p>
								<h1 class="mt-4 font-serif text-5xl font-medium tracking-tight text-brand">
									Welcome to the P&P newsroom.
								</h1>
								<div class="mt-4 text-orange">
									<p>
										<?= apply_filters('the_content', $page->post_content); ?>
									</p>
								</div>
								<div class="flex flex-col mt-16 space-y-4 sm:flex-row sm:space-x-4 sm:space-y-0">
									<p class="flex-none mt-2 text-sm">Filter by:</p>
									<div class="flex-1 w-full">
										<a href="/news-views" class="inline-block px-3 pt-1 pb-2 m-2 text-sm leading-none border rounded-full cursor-pointer border-orange border-opacity-70 text-orange">All</a>
										<a href="/news-views/?cat=insights" class="inline-block px-3 pt-1 pb-2 m-2 text-sm leading-none border rounded-full cursor-pointer border-orange border-opacity-70 text-orange">Insights</a>
										<a href="/news-views/?cat=case-studies" class="inline-block px-3 pt-1 pb-2 m-2 text-sm leading-none border rounded-full cursor-pointer border-orange border-opacity-70 text-orange">Case Studies</a>
										<a href="/perth-cbd-white-paper" class="inline-block px-3 pt-1 pb-2 m-2 text-sm leading-none border rounded-full cursor-pointer border-orange border-opacity-70 text-orange">White Papers</a>
									</div>
								</div>
							</div>
						</section>
					</div>

					<?php if(!$category_slug): ?>
						<?php get_template_part( "parts/feature-posts", null, ["page"=> $page] ); ?>
					<?php endif; ?>
					
				<?php endif; ?>
			<?php else: ?>
				<div id="motion-section">
					<section class="relative z-10 px-12">
						<div class="max-w-screen-xl pt-40 mx-auto md:pt-64">
							<h1 class="text-lg text-orange md:w-7/12">
								<?= esc_html($category->name); ?>
							</h1>
							<?php if (!empty($category->description)) : ?>
								<div class="mt-4 prose prose-lg prose-h2:text-5xl prose-h2:font-medium prose-h2:font-serif prose-h2:tracking-tight prose-h2:text-brand prose-h2:mb-4 prose-h3:text-orange prose-h3:text-base prose-h3:font-normal prose-h4:text-brand prose-h4:text-base">
									<?= wp_kses_post(wpautop($category->description)); ?>
								</div>
							<?php endif; ?>
						</div>
					</section>
				</div>
			<?php endif; ?>
			

			<?php
				if ($category->slug === 'news-views') {
					$args = [
						'category_name' => $category_slug,
						'posts_per_page' => -1,
					];
				} else {
					$args = [
						'cat' => $category->term_id,
						'posts_per_page' => 10,
					];
				}

				// var_dump($category_slug);
				
				$query = new WP_Query($args);
			?>
      <?php if ( $query->have_posts() ) : ?>
      <div id="motion-section">
        <section class="<?= $category_slug ? 'px-12 py-40': '';?>">
          <div class="grid max-w-screen-xl grid-cols-3 gap-12 mx-auto <?= !$category_slug ? 'mt-24': '';?>">
            <?php $i = 0; while ( $query->have_posts() ) : $query->the_post(); ?>
						<?php
							if ( $i == 0 && !$category_slug ) {
								$i++;
								continue; // Skip the first post
							}
						?>
              <?php get_template_part( 'parts/molecules/post-loop-item', null, null ); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </section>
      </div>
      <?php else : ?>
        <p>No posts found.</p>
      <?php endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
