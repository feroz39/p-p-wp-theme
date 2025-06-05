<?php
$blue = $args['blue'] ?? '';
$orange = $args['orange'] ?? '';
?>

<section class="px-6 bg-white border-b border-b-neutral-200 py-36 md:px-12">
	<div class="mx-auto max-w-7xl">
	<div class="grid gap-10 md:grid-cols-2">
		<div class="flex flex-col justify-between h-48 p-6 rounded-md bg-brand md:h-60 md:p-10">
			<p class="font-serif text-3xl font-medium text-white md:text-4xl">
				<?= $blue['heading'] ?>
			</p>
			<?php if($blue['button_link']): ?>
      <?php get_template_part( 'parts/atoms/text-button', null, [
        "textColor"=>"text-orange",
        "text"=>$blue['button_text'],
        "slug"=>$blue['button_link'],
				"target"=>"_blank"
      ] ); ?><?php endif; ?>
		</div>
		<div class="flex flex-col justify-between h-48 p-6 rounded-md bg-orange md:h-60 md:p-10">
			<p class="font-serif text-3xl font-medium text-white md:text-4xl">
				<?= $orange['heading'] ?>
			</p>
			<?php if($orange['button_link']): ?>
      <?php get_template_part( 'parts/atoms/text-button', null, [
        "textColor"=>"text-white",
        "text"=>$orange['button_text'],
        "slug"=>$orange['button_link'],
				"target"=>"_blank"
      ] ); ?><?php endif; ?>
		</div>
	</div>
	</div>
</section>