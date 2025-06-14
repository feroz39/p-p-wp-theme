<?php 
/* Template Name: Contact Page Template */ 
?>
<?php get_header('dark'); ?>

<?php if (have_rows('components')): ?>

<div class="min-h-screen">
	<div style="opacity: 1;">
		<main id="...slug">

			<?php while (have_rows('components')): the_row(); ?>

        <?php if (get_row_layout() === 'header_section'): ?>
					<!-- ACF: Header Section / Contact Page -->
					<?php
						$title = get_sub_field('title');
						$sub_title = get_sub_field('sub_title');
						$text = get_sub_field('text');
						$header_image = get_sub_field('header_image');
						$cards = get_sub_field('card');
						$background_color = get_sub_field('background_color');
					?>

					<section class="relative z-10 px-8 pb-20" id="parent-header">
						<div class="absolute inset-x-0 top-0 h-[100vh] max-h-[700px] min-h-[650px] bg-brand z-0"></div>
						<div class="relative z-10 max-w-screen-xl pt-48 mx-auto md:pt-64">
							<?php if($title): ?>
							<h1 class="font-serif text-6xl font-medium tracking-tight text-white" style="opacity: 1;">
								<?= esc_html( $title ); ?>
							</h1><?php endif; ?>
							
							<?php if($text): ?>
							<p class="mt-4 text-lg text-orange md:w-7/12" style="opacity: 1;">
								<?= esc_html( $text ); ?>
							</p><?php endif; ?>
						</div>
						<div class="relative z-10 grid max-w-screen-xl grid-cols-1 gap-8 mx-auto pt-28 md:pt-40 md:grid-cols-3" role="tablist">
							<div role="tab" aria-selected="true" data-tab="0" class="relative flex items-center justify-center w-full h-56 text-2xl text-white rounded-md cursor-pointer group bg-orange">
								<div class="absolute hidden w-8 h-8 transform rotate-45 bg-orange -bottom-2 left-50 group-aria-selected:block"></div>
								Submit an enquiry
							</div>
							<div role="tab" aria-selected="false" data-tab="1" class="relative flex items-center justify-center w-full h-56 text-2xl text-white rounded-md cursor-pointer group bg-orange">
								<div class="absolute hidden w-8 h-8 transform rotate-45 bg-orange -bottom-2 left-50 group-aria-selected:block"></div>
								Schedule a meeting
							</div>
							<div role="tab" aria-selected="false" data-tab="2" class="relative flex items-center justify-center w-full h-56 text-2xl text-white rounded-md cursor-pointer group bg-orange">
								<div class="absolute hidden w-8 h-8 transform rotate-45 bg-orange -bottom-2 left-50 group-aria-selected:block"></div>
								Call or email
							</div>
						</div>
					</section>

        <?php endif; ?>
				<?php if (get_row_layout() === 'section_text_with_form'): ?>
					<section role="tabpanels">
						<div role="tabpanel" data-panel="0">
							<?php get_template_part( 'parts/section-text-form', null, null ); ?>
						</div>
						<?php 
							$calendly_Link = get_field('calendly_Link', 'option');
							$contact_text = get_field('contact_text', 'option');
							$get_in_touch_text = get_field('get_in_touch_text', 'option');
							$contact_number = get_field('contact_number', 'option');
							$email_address = get_field('email_address', 'option');
						?>
						<div role="tabpanel" data-panel="1" hidden>
							<section id="form-cta" class="px-6 pt-12 overflow-hidden bg-white border-b pb-36 md:px-12 border-b-neutral-200">
								<div class="max-w-screen-xl mx-auto text-center">
									<div class="calendly-inline-widget" data-url=<?= esc_attr( $calendly_Link ); ?> style="min-width:320px;height:700px"></div>
								</div>
							</section>
						</div>
						
						<div role="tabpanel" data-panel="2" hidden>
							<div class="pt-10">
								<div id="motion-section">
									<section id="form-cta" class="px-6 pt-12 overflow-hidden bg-white border-b pb-36 md:px-12 border-b-neutral-200">
										<div class="max-w-screen-xl mx-auto text-center">
											<?php if($contact_text): ?>
											<p class="mb-5">
												<?= $contact_text; ?>
											</p><?php endif; ?>
											<div class="space-y-4 text-2xl">
												<?php if($get_in_touch_text): ?>
												<p>
													<span class="text-orange">
														<?= $get_in_touch_text; ?>
													</span>
												</p><?php endif; ?>
												<?php if($contact_number): ?>
												<p>
													<a href="tel:<?= esc_attr( $contact_number ); ?>">
														<span class="text-orange">Phone: </span>
														<?= esc_html( $contact_number ); ?>
													</a>
												</p><?php endif; ?>
												<?php if($email_address): ?>
												<p>
													<a href="mailto:<?= esc_attr( $email_address ); ?>">
														<span class="text-orange">Email: </span>
														<?= esc_html( $email_address ); ?>
													</a>
												</p><?php endif; ?>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</section>
      	<?php endif; ?>
				
      <?php endwhile; ?>
    </main>
  </div>
</div>

<?php endif; ?>

<?php get_footer(); ?>