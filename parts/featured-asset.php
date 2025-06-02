<?php if (get_row_layout() === 'featured_assets_panel'): ?>
<!-- ACF: Featured Assets Panel -->

<?php $assets = get_sub_field('assets_link'); ?>

	<?php if(!empty($assets)): ?>
	<section class="relative splide featured-carousel" role="group" aria-label="Featured Carousel">
		<div class="splide__arrows splide__arrows--ltr">
			<button class="splide__arrow splide__arrow--prev" type="button" aria-label="Go to last slide" aria-controls="splide02-track">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
			</button>
			<button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide" aria-controls="splide02-track">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
			</button>
		</div>
		<div class="splide__track">
			<ul class="splide__list">
				<?php foreach ($assets as $asset_path): ?>
				<?php 
					$path = trim(parse_url($asset_path["assets_page"], PHP_URL_PATH), '/');
					$asset = get_page_by_path(basename( untrailingslashit( $path ) ), OBJECT, 'assets');
					if (!$asset) continue;
					$asset_id = $asset->ID;
					$title = get_the_title($asset_id);
					$slug = get_post_field('post_name', $asset_id);
					$excerpt = get_the_excerpt( $asset_id );
					$thumbnail_url = get_the_post_thumbnail_url($asset_id, 'full');

					// ACF fields (must pass post ID)
					$address = get_field('address', $asset_id);
					$listingTable = get_field('listing_table', $asset_id);
				?>
				<?php 
				// echo '<pre>';
				// var_dump($path);
				// echo '</pre>';
				?>
					<li class="splide__slide">
						<div id="featured-asset" style="background-image: url(<?= $thumbnail_url ? esc_url( $thumbnail_url ) : ""; ?>);" class="relative h-full py-32 bg-center bg-cover sm:px-12">
							<div class="flex flex-col justify-center h-full px-12 mx-auto max-w-7xl lg:px-24">
								<div class="relative z-50 w-full overflow-hidden bg-white rounded-lg lg:w-5/12">
									<div class="flex items-center justify-between px-10 py-6 bg-beige"><p class="text-orange">Featured Investments</p></div>
									<div id="fade" class="p-6 bg-white md:p-10">
										<?php if($title): ?>
										<h3 class="font-serif text-4xl font-medium text-brand">
											<?= esc_html( $title ); ?>
										</h3>
										<?php endif; ?>
										<?php if($address): ?>
										<p class="mt-1 text-orange">
											<?= esc_html( $address ); ?>
										</p><?php endif; ?>

										<?php if($listingTable): ?>
										<div class="mt-4 font-sans text-sm border-b divide-y text-brand divide-neutral-200 border-b-neutral-200">
											<?php foreach ($listingTable as $item): ?>
											<div class="flex justify-between py-2">
												<p class="font-light max-w-[190px]">
													<?= esc_html( $item['title'] ); ?>
												</p>
												<div class="font-medium text-right">
													<p><?= $item['text']; ?></p>
												</div>
											</div><?php endforeach; ?>
										</div><?php endif; ?>

										<div class="h-4"></div>
										<?php if($slug): ?>
										<?php get_template_part( 'parts/atoms/text-button', null, [
											"textColor"=>"text-orange",
											"slug"=>$slug,
										] ); ?><?php endif; ?>
									</div>
								</div>
							</div>
							<div class="absolute inset-0 bg-black/20"></div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
	<?php endif; ?>

<?php endif; ?>
