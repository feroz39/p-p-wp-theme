<?php if (get_row_layout() === 'content_marketing'): ?>
<!-- ACF: Content Marketing -->

<?php 
$title = get_sub_field('title');
$text = get_sub_field('text');
$text_link = get_sub_field('text_link');
$post_items = get_sub_field('post_repeater');

?>

<?php 
// echo '<pre>';
// var_dump($post_items);
// echo '</pre>';
?>

<section id="content-marketing" class="px-6 border-b py-36 md:px-12 border-b-neutral-200">
  <div class="max-w-screen-xl mx-auto">
    <div class="w-full md:w-8/12">
      <?php if($title): ?>
      <p class="text-lg text-orange">
        <?= esc_html( $title ); ?>
      </p><?php endif; ?>
      <?php if($text): ?>
      <h2 class="mt-4 font-serif text-3xl font-medium">
        <?= esc_html( $text ); ?>
      </h2><?php endif; ?>
      <div class="h-4"></div>
      <?php if($text_link): ?>
      <?php get_template_part( 'parts/atoms/text-button', null, [
        "textColor"=>"text-orange",
        "text"=>"View all news",
        "slug"=>$text_link,
      ] ); ?><?php endif; ?>
    </div>
    <?php if(!empty($post_items)): ?>
    <div class="grid max-w-screen-xl grid-cols-1 gap-8 pt-16 mx-auto md:grid-cols-3">
      <?php foreach ($post_items as $item) : ?>
        <?php get_template_part( 'parts/molecules/post-card', null, ["item"=>$item] ) ?>
      <?php endforeach; ?>
    </div><?php endif; ?>
  </div>
</section>
<?php endif; ?>
