<?php get_header(); ?>

<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article class="relative z-20 px-6 md:px-12">
    <div class="progress-bar" style="transform: scaleX(0.792717) translateZ(0px);"></div>
    <section class="max-w-screen-xl pt-40 mx-auto md:pt-64">
		<?php
		$categories = get_the_terms(get_the_ID(), 'category');
		if ($categories && !is_wp_error($categories)) {
				foreach ($categories as $category) {
						echo '<span id="header" class="inline text-lg text-orange md:w-7/12">' . esc_html($category->name) . ', </span>';
				}
		}
		?>
		<h1 class="w-full mt-4 font-serif text-5xl font-medium tracking-tight text-brand md:w-8/12"><?php the_title(); ?></h1>
		<div class="mt-4 text-sm sm:hidden">
			<p class="text-sm text-brand/40">Published</p>
			<p class="mt-1"><?php echo get_the_date('F j, Y'); ?></p>
		</div>
    </section>
    <section class="px-0 py-24">
      <div class="grid max-w-screen-xl grid-cols-1 mx-auto md:grid-cols-12">
        <div class="order-last md:col-span-2 col-span-full md:order-first">
          <div class="hidden text-sm sm:block">
            <p class="text-sm text-brand/40">Published</p>
            <p class="mt-1"><?php echo get_the_date('F j, Y'); ?></p>
          </div>
        </div>
        <div class="md:col-span-6 md:col-start-3 col-span-full">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="overflow-hidden rounded-lg bg-orange aspect-[3/2]">
							<img
								width="1280"
								height="850"
								class="object-cover h-full shadow-small"
								src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>"
								alt="<?php the_title_attribute(); ?>"
							/>
						</div>
					<?php endif; ?>
          
          <div class="h-10"></div>
          <div
            class="prose prose-lg text-brand prose-p:font-light prose-img:rounded-md prose-p:text-brand prose-a:no-underline hover:prose-a:underline prose-a:text-orange prose-strong:text-brand prose-h2:font-serif prose-h2:text-brand prose-h3:text-xl prose-h3:font-medium prose-h2:font-medium prose-h3:text-orange prose-h2:mt-6 prose-h3:font-sans prose-strong:font-medium prose-ul:font-sans prose-ul:font-light prose-p:font-sans prose-h4:text-brand"
          >
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
  </article>
  <?php endwhile; endif; ?>


	<?php
	// Related Posts
	$current_post_id = get_the_ID();
	$categories = wp_get_post_categories($current_post_id);

	if (!empty($categories)) : 
		$args = [
			'posts_per_page' => 3,
			'post_type'      => 'post', // your custom post type
			'post__not_in'   => [$current_post_id], // exclude current post
			'category__in'   => $categories,
			'orderby'        => 'date',
			'order'          => 'DESC',
		];

		$related_query = new WP_Query($args);

		if ($related_query->have_posts()): ?>
			
		<div id="motion-section">
			<section class="px-6 pt-12 md:px-12">
				<div class="max-w-screen-xl mx-auto">
					<div class="w-1/2">
						<p class="text-lg text-orange">Related posts</p>
					</div>
				</div>
				<div class="grid max-w-screen-xl grid-cols-1 gap-8 py-16 mx-auto md:grid-cols-4">
				<?php while ($related_query->have_posts()) : $related_query->the_post();?>
					<a class="group/postcard" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
						<div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
							<?php if ( has_post_thumbnail() ) : 
								$thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
							?>
								<div class="relative overflow-hidden aspect-video">
									<img
										width="1600"
										height="1600"
										class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
										src="<?php echo esc_url( $thumbnail_url ); ?>"
										alt="<?php the_title_attribute(); ?>"
									/>
								</div>
							<?php endif; ?>
							
							<div class="p-10">
								<h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2"><?php the_title(); ?></h2>
								<p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
								<div class="h-4"></div>
								<div class="text-base font-normal w-fit text-orange">
									<div class="flex items-center">
										Read more
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
											<path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
										</svg>
									</div>
									<span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
								</div>
							</div>
						</div>
					</a>
				<?php endwhile; ?>
				</div>
			</section>
		</div>
			<?php endif; wp_reset_postdata(); ?>

	<?php endif; ?>
</main>
<?php get_footer(); ?>