<?php if (get_row_layout() === 'horizontal_panel'): ?>
<!-- ACF: Horizontal Panel -->

<?php
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $slug = get_sub_field('slug');
    $image_position = get_sub_field('image_position');
    $background_color = get_sub_field('background_color');
    $video_url = get_sub_field('video_url');
    $cover_image = get_sub_field('cover_image');
    $is_popup = get_sub_field('is_popup');
    $image_or_video = get_sub_field('image_or_video');
?>
<?php 
// echo '<pre>';
// var_dump(get_vimeo_id($video_url));
// echo '</pre>';
?>

<section 
	id="horizontal-panel" 
	x-data="{
		showModal: false,
		videoSrc: 'https://player.vimeo.com/video/<?= esc_js(get_vimeo_id($video_url)); ?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479',
		toggleScroll(disable) {
			document.body.style.overflow = disable ? 'hidden' : '';
		}
	}"
	x-effect="toggleScroll(showModal)"
	class="px-6 border-b py-36 md:px-12 border-b-neutral-200 <?= $background_color === 'beige' ? 'bg-beige' :'bg-white' ; ?>"
>
	<div class="flex max-w-screen-xl mx-auto <?= $image_position === 'right' ? 'md:flex-row flex-col-reverse' :'md:flex-row-reverse flex-col-reverse' ; ?>">
		<div class="flex flex-col justify-center w-full">
				
			<?php if($title) : ?>
			<h2 class="mt-10 font-serif text-4xl font-medium text-brand md:mt-0" style="opacity: 1;"><?= esc_html( $title ); ?></h2>
			<?php endif; ?>

			<?php if($text) : ?>
			<p class="mt-6 text-lg font-light" style="opacity: 1;"><?= esc_html( $text ); ?>
			</p>
			<?php endif; ?>

			<div class="h-6"></div>

			<?php if($slug): ?>
			<?php get_template_part( 'parts/atoms/text-button', null, [
					"text"=>$slug['title'],
					"slug"=>$slug['url'],
			] ); ?><?php endif; ?>
		</div>
		<div class="flex-none w-24"></div>
		<div class="w-full">
			<?php if( $image_or_video === "video"): ?>
				<div @click="
				showModal = true;
				videoSrc = 'https://player.vimeo.com/video/<?= esc_js(get_vimeo_id($video_url)); ?>?badge=0&autopause=0&player_id=0&app_id=58479';
				" class="relative w-full h-full cursor-pointer group/horizontalImage">
					<?php 
						get_template_part( 
							'parts/atoms/image-box',
							null, 
							[
								"width"=> "800", 
								"height"=>"800", 
								"alt"=> $title, 
								"src"=>$cover_image["url"],
								"classWrapper"=> "rounded-lg overflow-hidden",
								"imageWrapper"=> $is_popup == "0" ? "aspect-[3/2] cursor-default rounded-lg object-cover transition group-hover/horizontalImage:scale-105" : "cursor-pointer aspect-[3/2]"
							]
						);
					?>
					<div class="absolute inset-0 z-10 flex items-center justify-center">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-16 h-16 text-white transition group-hover:scale-105 group-hover/horizontalImage:text-orange"><path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd"></path></svg>
					</div>
				</div>
			<?php elseif( $image_or_video === "image"): ?>
				<?php 
					get_template_part( 
						'parts/atoms/image-box',
						null, 
						[
							"width"=> "800", 
							"height"=>"800", 
							"alt"=> $title, 
							"src"=>$cover_image["url"],
							"classWrapper"=> "rounded-lg overflow-hidden",
							"imageWrapper"=> $is_popup == "0" ? "aspect-[3/2] cursor-default rounded-lg object-cover transition group-hover/horizontalImage:scale-105" : "cursor-pointer aspect-[3/2]"
						]
					);
				?>
			<?php endif; ?>
		</div>
		<div 
			x-show="showModal"
			@keydown.escape.window="showModal = false; videoSrc = '';"
			class="fixed inset-0 z-50"
			x-transition:enter="transition ease-out duration-200"
			x-transition:enter-start="opacity-0"
			x-transition:enter-end="opacity-100"
			x-transition:leave="transition ease-in duration-150"
			x-transition:leave-start="opacity-100"
			x-transition:leave-end="opacity-0"
			style="display: none;"
		>
			<div class="fixed inset-0 bg-white/40 transition-opacity backdrop-blur-[5px]"></div>
			<div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
				<div @click.away="showModal = false; videoSrc = '';" class="relative px-1 py-1 mx-10 overflow-visible text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:w-full sm:max-w-5xl aspect-video">
					<iframe
						class="w-full h-auto aspect-video"
						:src="videoSrc"
						loading="lazy"
						allow="autoplay; fullscreen; picture-in-picture"
						width="1920"
						height="1080"
					></iframe>
					<button
						@click="showModal = false; videoSrc = '';"
						class="absolute justify-center px-3 py-3 text-sm font-semibold text-white rounded-full shadow-sm cursor-pointer -top-5 -right-5 bg-orange hover:bg-orange focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orage"
					>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path></svg>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>