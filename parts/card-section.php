<?php if (get_row_layout() === 'cards_section'): ?>
<!-- ACF: Cards Section -->
<?php
	$type  = $args['type'] ?? "";
	$title = get_sub_field('title');
	$text = get_sub_field('text');
	$card_item = get_sub_field('card_item');
	$layout = get_sub_field('layout');
	$card_style = get_sub_field('card_style');
?>

<?php 
// echo '<pre>';
// var_dump($type);
// echo '</pre>';
?>

<section id="cards-section">
	<div class="relative z-10 px-6 md:px-12 flex flex-col-reverse md:flex-col overflow-hidden <?= esc_attr($type === '' ? 'pt-36 md:pt-64' : 'py-36');?>">
		<div class="w-full max-w-screen-xl pt-10 mx-auto md:pt-0">
			<div class="md:w-1/2">
				<?php if($title): ?>
				<p class="text-lg text-orange">
					<?= esc_html( $title ); ?>
				</p><?php endif; ?>


				<?php if($text): ?>
				<h2 class="mt-4 font-serif text-3xl font-medium">
					<?= esc_html( $text ); ?>
				</h2><?php endif; ?>
			</div>
			<?php if($layout == "grid") : ?>
				<?php if(!empty($card_item)) : ?>
					<div class="mx-auto grid max-w-screen-xl grid-cols-1 gap-8 pt-28  md:pt-40 relative z-10 <?= count($card_item) === 1 ? "md:grid-cols-1" : (count($card_item) === 2 ? "md:grid-cols-2" : (count($card_item) === 3 ? "md:grid-cols-3" : "md:grid-cols-4")); ?>">
						<?php foreach($card_item as $item): ?>
							<?php 
							// echo '<pre>';
							// var_dump($item["link_text"]);
							// echo '</pre>';
							?>
							<?php 
								get_template_part( 
								'parts/molecules/image-card', 
								null, 
								[
									"coverImage"=> $item["cover_image"],
									"title"=> $item["title"],
									"slug"=> $item["link"],
									"label"=> $item["label"],
									"excerpt"=> $item["text"],
									"isLinkNewTab"=> $item["link"] ? true : false,
									"linkText"=> $item["link_text"],
									"card_style"=> $card_style,
								]);
							?>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			<?php else: ?>
				<?php if(!empty($card_item)) : ?>
				<section class="relative mt-20 splide cards-carousel" aria-label="Assets Cards Carousel">
					<div class="splide__track">
						<ul class="splide__list">
							<?php foreach($card_item as $item): ?>
							<li class="splide__slide">
								<?php 
									get_template_part( 
									'parts/molecules/image-card', 
									null, 
									[
										"coverImage"=> $item["cover_image"],
										"title"=> $item["title"],
										"slug"=> $item["link"],
										"label"=> $item["label"],
										"excerpt"=> $item["text"],
										"isLinkNewTab"=> $item["link"] ? true : false,
										"linkText"=> $item["link_text"],
										"card_style"=> $card_style,
									]);
								?>
							</li><?php endforeach; ?>
						</ul>
					</div>
					<div class="splide__arrows splide__arrows--ltr">
						<button class="splide__arrow group cursor-pointer rounded-full p-3 transition-colors duration-300 hover:bg-white splide__arrow--prev 2xl:!-left-20 !-left-8 !top-1/2" aria-label="Previous slide" aria-controls="splide01-track">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="!h-10 !w-10 text-white transition-colors duration-300 group-hover:text-orange">
								<path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
							</svg>
						</button>
						<button class="splide__arrow group cursor-pointer rounded-full p-3 transition-colors duration-300 hover:bg-white splide__arrow--next 2xl:!-right-20 !-right-8 !top-1/2" aria-label="Next slide" aria-controls="splide01-track">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="!h-10 !w-10 text-white transition-colors duration-300 group-hover:!text-orange">
								<path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</div>
				</section><?php endif; ?>

			<?php endif; ?>
					
		</div>
	</div>
</section>

<?php endif; ?>