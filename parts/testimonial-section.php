<?php if (get_row_layout() === 'testimonial_section'): ?>
<!-- ACF: Testimonial Section -->

<?php $post_items = get_sub_field('post_item'); ?>

<?php if(!empty($post_items)): ?>
<section class="px-6 bg-white border-b border-b-neutral-200 py-36 md:px-12">
	<div class="mx-auto max-w-7xl">
	<section class="relative splide testimonial-carousel" role="group" aria-label="Testimonial Carousel">
		<div class="splide__track">
			<ul class="splide__list">
				<?php foreach ($post_items as $item) : ?>
				<?php 
					$path = trim(parse_url($item, PHP_URL_PATH), '/');
					$testimonial = get_page_by_path(basename( untrailingslashit( $path ) ), OBJECT, 'testimonials');
					if (!$testimonial) continue;
					$post_id = $testimonial->ID;
					$title = get_the_title($post_id);
					$slug = get_post_field('post_name', $post_id);
					$content = get_post_field('post_content', $post_id);
					$thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');

					// ACF fields (must pass post ID)
					$name = get_field('client_name', $post_id);
					$company = get_field('company_name', $post_id);
				?>
					<li class="splide__slide">
						<div class="space-x-8 overflow-visible flex-nowrap">
							<div class="flex flex-col overflow-hidden rounded-lg bg-beige md:flex-row">
								<div class="relative md:w-1/3">
									<?php if ($thumbnail_url): ?>
									<img
										alt="<?= esc_attr( $title ); ?>"
										loading="lazy"
										width="1000"
										height="1000"
										class="aspect-[3/2] h-full object-cover"
										src="<?= esc_url( $thumbnail_url ); ?>"
									/>
									<?php endif; ?>
								</div>
								<div class="flex flex-col justify-between p-12 md:w-2/3">
									<div>
										<div class="font-serif text-2xl font-medium tracking-tight text-orange line-clamp-3">
											<p><?=$content; ?></p>
										</div>
										<?php if ($name || $company): ?>
										<p class="mt-4 font-sans text-brand">
											<?= esc_html($name); ?><?= $name && $company ? ' &amp; ' : ''; ?><?= esc_html($company); ?>
										</p>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="absolute w-16 ml-12 splide__arrows md:left-1/3 xl:bottom-12 bottom-12 splide__arrows--ltr">
			<button
				class="splide__arrow splide__arrow--prev !left-0 !bg-transparent !block"
				type="button"
				aria-label="Previous slide"
				aria-controls="splide01-track"
			>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="!h-6 !w-6">
					<path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
				</svg>
			</button>
			<button
				class="splide__arrow splide__arrow--next !right-0 !bg-transparent !block"
				type="button"
				aria-label="Next slide"
				aria-controls="splide01-track"
			>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="!h-6 !w-6">
					<path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
				</svg>
			</button>
		</div>
	</section>
	</div>
</section>
<?php endif; ?>
<?php endif; ?>
