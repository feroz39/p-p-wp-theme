<?php
	$title           = $args['title']           ?? '';
	$imageorstat     = $args['imageorstat']     ?? '';
	$stats           = $args['stats']           ?? [];
	$image           = $args['image']           ?? '';
	$gallery         = $args['gallery']         ?? [];
	$content         = $args['content']         ?? '';
	$backgroundcolor = $args['backgroundcolor'] ?? '';
?>
<section class="px-6 md:px-12 py-36 <?= esc_attr( $backgroundcolor == "beige" ? "bg-beige" : "" ) ?>">
	<div class="max-w-screen-xl mx-auto">
		<h2 class="font-serif text-3xl font-medium text-brand">
			<?= $title;?>
		</h2>
	</div>
	<div class="flex flex-col-reverse max-w-screen-xl mx-auto mt-10 md:flex-row md:justify-between">
		<div class="md:w-6/12">
			<?php if($content): ?>
				<?php get_template_part( 'parts/post-body', null, ['content'=>$content] ); ?>
			<?php endif; ?>
		</div>
		<div class="mb-12 md:w-5/12 md:mb-0">
			<?php if($imageorstat == "stat"): ?>
				<div class="text-base border border-gray-200 rounded-lg bg-white/80">
          <?php if(!empty($stats)): ?>
          	<?php foreach ($stats as $stat): ?>
              <div class="flex flex-col items-start p-5 border-b border-gray-200 md:flex-row md:justify-between">
                <p class="font-semibold md:w-2/5">
									<?= esc_html( $stat["title"] ); ?>
								</p>
                <div class="md:w-3/5 md:text-right prose-md prose-a:text-orange">
									<?= $stat["text"]; ?>
								</div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
			<?php else: ?>
				<?php $random = bin2hex(random_bytes(4)); ?>
				<?php get_template_part( 'parts/molecules/asset-carousel', null, ['gallery'=>$gallery, 'id'=>$random] ); ?>
			<?php endif; ?>
		</div>
	</div>
</section>