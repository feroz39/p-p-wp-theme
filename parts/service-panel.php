<?php if (get_row_layout() === 'services_panel'): ?>
<!-- ACF: Horizontal Panel -->

<?php
    $title = get_sub_field('title');
    $sub_title = get_sub_field('sub_title');
    $text = get_sub_field('text');
    $slug = get_sub_field('slug');
    $link_text = get_sub_field('link_text');
    $related_page = get_sub_field('related_page');
?>
<?php 
// echo '<pre>';
// var_dump(get_vimeo_id($video_url));
// echo '</pre>';
?>

<section id="service-panel" class="px-6 border-b py-36 md:px-12 border-b-neutral-200">
  <div class="max-w-screen-xl mx-auto">
    <div id="intro" class="w-full md:w-8/12">
    	<?php if($title): ?>  
    	<p class="font-sans text-orange">
        <?= esc_html( $title ); ?>
      </p><?php endif; ?>
			<?php if($title): ?>  
      <h2 class="mt-4 font-serif text-3xl font-medium tracking-tight text-brand">
				<?= esc_html( $sub_title ); ?>
			</h2><?php endif; ?>
			<?php if($title): ?>  
      <p class="mt-4 font-sans text-lg font-light text-brand">
        <?= esc_html( $text ); ?>
      </p><?php endif; ?>

      <div class="h-4"></div>
      <?php if($slug && $link_text): ?>
			<?php get_template_part( 'parts/atoms/text-button', null, [
					"text"=>$link_text ? $link_text : "Read more",
					"slug"=>$slug,
			] ); ?><?php endif; ?>
    </div>
		<?php if(!empty($related_page)): ?>
    <div id="intro-service-panel" class="grid grid-cols-1 gap-8 pt-24 md:grid-cols-3">
      <?php foreach ($related_page as $item) : ?>
				<?php
					$page_id = url_to_postid($item["page_link"]);
					$title = get_the_title($page_id);
					$excerpt = get_the_excerpt( $page_id );
					$thumbnail_url = get_the_post_thumbnail_url($page_id, 'full');
				?>
				<?php if ($page_id): ?>
        <a class="group/postcard" title="Case Study: How we safely doubled our investor’s money (in 2 years)" href="<?= esc_url( $slug ); ?>">
					<div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
						<div class="relative overflow-hidden aspect-video">
							<?php if( $thumbnail_url): ?>
							<img
									alt="Cover Image for <?= esc_attr( $title ) ?>"
									width="1600"
									height="1600"
									class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
									src="<?= esc_url( $thumbnail_url ); ?>"
							/><?php endif; ?>
							</div>
							<div class="p-10">
							<h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">
								<?= esc_html( $title ) ?>
							</h2>
							<p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">
								<?= esc_html( $excerpt ) ?>
							</p>
							<div class="h-4"></div>
							<?php get_template_part( 'parts/atoms/text-button', null, [
									"textColor"=>"text-orange", "groupClass"=>"postcard"
							] ); ?>
						</div>
					</div>
				</a><?php endif; ?>
      <?php endforeach; ?>
    </div><?php endif; ?>
  </div>
</section>


<?php endif; ?>