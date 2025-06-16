<?php if (get_row_layout() === 'body_panel'): ?>
<!-- ACF: Header Section White -->
<?php
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $background_color = get_sub_field('background_color');
    $logo = get_sub_field('logo');
    $logo_url = get_sub_field('logo_url');
    $address = get_sub_field('address');
    $map = get_sub_field('map');
    $office_hours = get_sub_field('office_hours');
    $contact = get_sub_field('contact');
?>

<?php 
// echo '<pre>';
// var_dump($map);
// echo '</pre>';
?>

<section id="body-section-tenant" class="px-6 border-b py-36 md:px-12 border-b-neutral-200 <?= $background_color === 'beige' ? 'bg-beige' :'bg-white' ; ?>">
	<div class="grid max-w-screen-xl mx-auto">
		<?php if($title): ?>
		<h2 class="font-serif text-3xl font-medium text-brand">
				<?= esc_html( $title ); ?>
		</h2><?php endif; ?>
	</div>
	<div class="grid max-w-screen-xl gap-8 mx-auto mt-10 md:grid-cols-12 md:gap-0">
		<?php if($content): ?>
		<div class="pr-10 md:col-span-7 col-span-full">
		<?php get_template_part( 'parts/post-body', null, ["content"=>$content] ); ?>
		</div><?php endif; ?>

		<div class="md:col-span-4 md:col-start-8 col-span-full">
			<div class="pl-10 border border-white border-l-orange">
				<div class="space-y-10">
					<?php if($logo): ?>
					<img
							alt="<?= $logo['title'] ?>"
							loading="lazy"
							width="384"
							height="200"
							class="w-full h-auto rounded-md"
							src="<?= $logo['url'] ?>"
					/><?php endif; ?>

					<?php if($address || $map): ?>
					<div>
						<h5>Location</h5>
						<?php if($address): ?>
						<p class="mt-2 text-brand/80">
							<?= esc_html( $address ); ?>
						</p><?php endif; ?>
						<?php 
						if( $map ): ?>
							<div class="w-full mt-2 acf-map aspect-video" data-zoom="16">
									<div class="marker" data-lat="<?php echo esc_attr($map['lat']); ?>" data-lng="<?php echo esc_attr($map['lng']); ?>"></div>
							</div>
						<?php endif; ?>
					</div><?php endif; ?>

					<?php if($office_hours): ?>
					<div>
						<h5 class="mb-2">Opening Hours</h5>
						<?php foreach ($office_hours as $index => $hour): ?>
							<div class="text-brand/80">
								<?php if($hour['open_or_closed']): ?>
								<p>
									<span class="capitalize"><?= $hour['day']; ?></span>: 
									<?= $hour['from_hours']; ?> to <?= $hour['to_hours']; ?>
								</p>
								<?php else: ?>
									<div>
										<span class="capitalize"><?= $hour['day']; ?>: Closed</span>
									</div>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div><?php endif; ?>
					
					<?php if($contact): ?>
					<div>
						<h5 class="mb-2">Contact</h5>
						<div class="flex flex-col space-y-0">
							<?php if($contact['email']): ?>
							<a class="text-brand/80" title="email to <?= $contact['email'] ?>" href="mailto:<?= $contact['email'] ?>">
								Email
							</a><?php endif; ?>

							<?php if($contact['phone']): ?>
							<a class="text-brand/80" title="phone to <?= $contact['phone'] ?>" href="tel:<?= $contact['phone'] ?>">
								Phone
							</a><?php endif; ?>

							<?php if($contact['linkedin_url']): ?>
							<a class="text-brand/80" title="go to <?= $contact['linkedin_url'] ?>" href="<?= $contact['linkedin_url'] ?>" target="_blank">
								LinkedIn
							</a><?php endif; ?>

							<?php if($contact['website']): ?>
							<a class="text-brand/80" title="go to <?= $contact['website'] ?>" href="<?= $contact['website'] ?>" target="_blank">
								Website
							</a><?php endif; ?>
						</div>
					</div><?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>