<?php if (get_row_layout() === 'perfomance_layout'): ?>

<?php 
$section = get_sub_field('performance_section');
$first_tab = $section['first_tab'];
$tabs = $section['tab'];
?>
<?php 
// echo '<pre>';
// var_dump($first_tab);
// echo '</pre>';
?>
<section class="px-6 bg-white border-b border-b-neutral-200 py-36 md:px-12">
  <div class="mx-auto max-w-7xl">
    <h2 class="font-serif text-4xl font-medium text-brand">Past Performance</h2>
    <div class="flex mt-8 space-x-10 font-sans text-orange" role="tablist">
      <button class="cursor-pointer aria-selected:font-medium" type="button" role="tab" aria-selected="true" data-tab="0">
        <?= $first_tab['tab_name']; ?>
      </button>
      <?php if(!empty($tabs)): ?>
        <?php foreach ($tabs as $index => $tab): ?>
					<button class="cursor-pointer aria-selected:font-medium" type="button" role="tab" aria-selected="false" data-tab="<?= $index+1; ?>">
							<?= $tab['tab_name']; ?>
					</button>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="mt-6" role="tabpanels">
      <div role="tabpanel" data-panel="0">
        <div class="relative w-full overflow-hidden rounded-lg h-96 md:h-auto md:aspect-video">
          <div class="absolute inset-0 z-10 p-8 bg-black/30 md:p-16">
            <div class="flex flex-col justify-between h-full">
              <h3 class="font-serif text-5xl font-light tracking-tight text-white">
                <?= $first_tab['heading']; ?>
            	</h3>
              <div>
                <p class="font-sans text-6xl font-light text-orange">
									<?= $first_tab['orange_text']; ?>
								</p>
                <p class="mt-1 font-sans text-white">
									<?= $first_tab['description']; ?>
								</p>
              </div>
            </div>
          </div>
          <img
            alt="<?= esc_attr($first_tab["heading"]); ?>"
            loading="lazy"
            width="1600"
            height="900"
            class="absolute inset-0 z-0 object-cover h-96 md:aspect-video md:h-auto"
            src="<?= esc_attr($first_tab['background_image']["url"]); ?>"
          />
        </div>
      </div>
			<?php if(!empty($tabs)): ?>
        <?php foreach ($tabs as $index => $tab): ?>
				<div role="tabpanel" data-panel="<?= $index+1; ?>" hidden>
					<div class="p-8 rounded-lg bg-beige md:p-16">
						<div class="grid grid-cols-1 gap-6 md:grid-cols-2">
							<div class="">
								<h3 class="font-serif text-3xl font-light tracking-tight text-orange">
									<?= $tab['title']; ?>
								</h3>
								<div class="mt-6 font-sans font-light leading-loose prose text-brand prose-p:text-brand prose-p:font-light prose-p:leading-loose prose-strong:text-brand prose-strong:font-medium">
									<?= $tab['content']; ?>
								</div>
							</div>
							<div>
								<img
									alt="Picture of the author"
									loading="lazy"
									width="1600"
									height="900"
									class="object-cover rounded-lg aspect-video"
									src="<?= esc_attr($tab['image']['url']); ?>"
								/>
							</div>
						</div>
					</div>
				</div>
        <?php endforeach; ?>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php endif; ?>