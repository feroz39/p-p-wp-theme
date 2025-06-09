<?php if (get_row_layout() === 'section_text_with_form'): ?>
<?php 
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$list = get_sub_field('list');
$form_id = get_sub_field('gravity_form_id');
?>

<section id="text-with-form" class="px-6 overflow-hidden bg-white border-b py-36 md:px-12 border-b-neutral-200">
  <div class="max-w-screen-xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-36">
      <div>
        <?php if($title): ?>
        <h2 class="font-serif text-5xl font-medium text-brand">
          <?= esc_html( $title ); ?>
        </h2><?php endif; ?>
        
        <?php if($subtitle): ?>
        <p class="mt-4">
            <?= esc_html( $subtitle ); ?>
        </p><?php endif; ?>
        
        <?php if(!empty($list)): ?>
          <?php foreach($list as $index => $item): ?>
            <div class="mt-5">
              <p class="font-medium"><?= esc_html( $item['title'] ); ?></p>
              <p class="mt-1 text-orange"><?= esc_html( $item['text'] ); ?></p>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="section-form">
        <div class="font-sans prose-sm prose text-white gfield-HTML prose-p:font-light prose-img:rounded-md prose-p:text-white prose-a:no-underline hover:prose-a:underline prose-a:text-orange prose-strong:text-brand prose-h2:font-serif prose-h2:text-orange prose-h3:text-lg prose-h3:font-medium prose-h2:font-medium prose-h2:text-4xl prose-h2:leading-10">
          <?= do_shortcode('[gravityform id="'.$form_id.'" title="false" description="false" ajax="true"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
