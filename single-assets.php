<?php get_header(); ?>
<?php
	$hero_section = get_field('hero_section');
	$subtitle = get_field('subtitle');
	$text = get_field('text');
	$address = get_field('address');
	$other_address = get_field('other_address');
	$investmentstatus = get_field('investmentstatus');
	$toplinks = get_field('toplinks');
	$content = get_field('content');
	$keystats = get_field('keystats');
	$components = get_field('components');
	$sections = get_field('section');
	$performance_content = get_field('performance_content');
	$listing_table = get_field('listing_table');
	$show_read_more = get_field('show_read_more');
	$link_text = get_field('link_text');
	$cta = get_field('cta');
?>

<div class="min-h-screen">
  <div style="opacity: 1;">
    <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <section class="relative z-10 px-6">
        <div class="max-w-screen-xl pt-40 mx-auto md:pt-64">
          <h1 class="text-lg font-medium text-orange md:w-7/12">
						<?php the_title(); ?>
					</h1>
					
					<?php if($subtitle): ?>
          <h2 class="mt-4 font-serif text-5xl font-medium tracking-tight text-brand">
						<?= esc_html($subtitle); ?>
					</h2><?php endif; ?>

					<?php if($text): ?>
          <p class="mt-4 font-sans text-lg font-light text-brand md:w-7/12">
						<?= esc_html($text); ?>
					</p><?php endif; ?>
					
          <div class="mt-6"></div>

          <div class="flex flex-col items-start mt-16 space-y-6 md:flex-row md:items-center md:space-y-0 md:space-x-10">
						
						<?php if($investmentstatus): ?>
            <p class="inline-flex items-center px-4 py-2 text-base font-normal text-white border border-transparent rounded-full <?= $investmentstatus == "open" ? "bg-green-600" : "bg-red-600"; ?>">
							<?= $investmentstatus == "open" ? "Open" : "Closed" . " for investment"; ?>
						</p><?php endif; ?>

						<?php if(!empty($toplinks)): ?>
							<?php foreach($toplinks as $link): ?>
								<?php
									get_template_part( 'parts/atoms/text-button', null, [
										"textColor"=>"text-orange",
										"text"=>$link["link"]["title"],
										"slug"=>$link["link"]["url"],
										"target"=>$link["link"]["target"]
									] )	;
								?>
							<?php endforeach; ?>
						<?php endif; ?>
          </div>
        </div>
      </section>
			
			<?php if($hero_section['video_url']): ?>
				<section class="relative px-6 overflow-hidden md:px-12">
					<div class="relative z-10 max-w-screen-xl pt-20 mx-auto md:pt-28">
					<iframe
						class="w-full rounded-lg aspect-video"
						src="https://player.vimeo.com/video/<?= esc_attr(get_vimeo_id($hero_section['video_url'])); ?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
						allow="autoplay; fullscreen; picture-in-picture"
						width="1280"
						height="720"
						title="<?= get_the_title(); ?>"
						data-lf-form-tracking-inspected-lynor8x6blv4wqjz="true"
						data-lf-yt-playback-inspected-lynor8x6blv4wqjz="true"
						data-lf-vimeo-playback-inspected-lynor8x6blv4wqjz="true"
					></iframe>
					</div>
					<div class="absolute inset-x-0 bottom-0 z-0 h-1/2 bg-beige"></div>
				</section>
			<?php elseif($hero_section['hero_image']): ?>
				<section class="relative px-6 overflow-hidden md:px-12">
					<div class="relative z-10 max-w-screen-xl pt-20 mx-auto md:pt-28">
						<img
							src="<?= esc_attr( $hero_section['hero_image']['url'] ) ?>"
							alt="<?= get_the_title(); ?>"
							width="1280"
							height="720"
							class="object-cover rounded-lg aspect-video"
						/>
					</div>
					<div class="absolute inset-x-0 bottom-0 z-0 h-1/2 bg-beige"></div>
				</section>
			<?php endif; ?>

			<?php if($content): ?>
			<section class="px-6 bg-beige md:px-12 py-36">
				<div class="max-w-screen-xl mx-auto">
				<div class="md:w-8/12">
					<div class="font-serif text-3xl font-medium text-brand">
					<?= $content ; ?>
					</div>
				</div>
				<div class="h-28"></div>

							<?php if(!empty($keystats)): ?>
								<?php get_template_part( 'parts/key-stats', null, ["stats"=>$keystats, "type"=>2] ) ?>
				<?php endif; ?>
				</div>
			</section><?php endif; ?>

			<?php if (have_rows('components')): ?>
				<?php while (have_rows('components')): the_row(); ?>
			
				<?php get_template_part( 'parts/body-section', null, null ); ?>
				<?php get_template_part( 'parts/card-section', null, ["type"=>"asset"] ); ?>
				<?php get_template_part( 'parts/body-column-2', null, null ); ?>

				<?php endwhile; ?>
			<?php endif; ?>

			<?php if(!empty($sections)): ?>
				<?php foreach ($sections as $section): ?>
					<?php get_template_part( 'parts/assets-section', null, $section ); ?>
				<?php endforeach; ?>
			<?php endif; ?>

			<?php if($cta): ?>
				<?php 
				// echo '<pre>';
				// var_dump($cta);
				// echo '</pre>';
				?>
				<?php get_template_part( 'parts/molecules/cta-asset', null, $cta[0]['cta'] ); ?>
			<?php endif; ?>

    <?php endwhile; endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>