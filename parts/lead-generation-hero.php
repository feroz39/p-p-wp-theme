<?php if (get_row_layout() === 'lead_generation_hero'): ?>
<?php 
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$subtitle2 = get_sub_field('subtitle2');
$form_id = get_sub_field('gravity_form_id');
$cover_image = get_sub_field('cover_image');
?>

<div>
	<section class="relative z-10 md:min-h-screen h-auto md:max-h-[1100px] md:h-[900px] md:px-12 px-6 flex flex-col-reverse md:flex-col bg-brand/80 py-36 md:py-0">
		<div class="relative w-full h-full max-w-screen-xl mx-auto">
			<div class="flex items-center md:w-7/12 lg:w-6/12 xl:w-6/12 2xl:w-5/12 md:absolute md:inset-0">
				<div>
					<?php if($title): ?>
					<p class="text-lg text-orange">
						<?= esc_html( $title ); ?>
					</p><?php endif; ?>

					<?php if($subtitle): ?>
					<h1 class="mt-4 font-serif text-5xl font-medium tracking-tight text-white">
						<?= esc_html( $subtitle ); ?>
					</h1><?php endif; ?>
					
					<?php if($subtitle2): ?>
					<h2 class="mt-2 text-lg font-light text-white">
						<?= esc_html( $subtitle2 ); ?>
					</h2><?php endif; ?>
				</div>
			</div>
			<div class="flex items-center h-full mt-10 md:mt-0">
				<div class="right-0 w-full text-white rounded-lg md:absolute md:w-4/12 bg-brand">
					<div class="relative z-10 max-w-screen-xl p-10 mx-auto text-sm">
						<div class="font-sans prose-sm prose text-white gfield-HTML prose-p:font-light prose-img:rounded-md prose-p:text-white prose-a:no-underline hover:prose-a:underline prose-a:text-orange prose-strong:text-brand prose-h2:font-serif prose-h2:text-orange prose-h3:text-lg prose-h3:font-medium prose-h2:font-medium prose-h2:text-4xl prose-h2:leading-10">
							<div class="dark-gf">
								<?= do_shortcode('[gravityform id="'.$form_id.'" title="false" description="false" ajax="true"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php if($cover_image): ?>
	<img 
		alt="Perth CBD White Paper" 
		loading="lazy" 
		width="1280" 
		height="600" 
		decoding="async" 
		data-nimg="1" 
		class="absolute inset-0 -z-10 h-auto min-h-screen md:max-h-[1100px] md:h-[900px] object-cover grayscale w-full" 
		src="<?= esc_attr( $cover_image['url'] ); ?>"
	><?php endif; ?>
</div>
<?php endif; ?>