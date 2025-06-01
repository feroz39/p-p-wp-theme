<?php if (get_row_layout() === 'horizontal_panel'): ?>
<!-- ACF: Horizontal Panel -->

<?php
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $slug = get_sub_field('slug');
    $image_position = get_sub_field('image_position');
    $background_color = get_sub_field('background_color');
    $video_url = get_sub_field('video_url');
    $cover_image = get_sub_field('cover_image');
    $is_popup = get_sub_field('is_popup');
    $image_or_video = get_sub_field('image_or_video');
?>
<?php 
// echo '<pre>';
// var_dump($slug);
// echo '</pre>';
?>

<section id="horizontal-panel" class="px-6 border-b py-36 md:px-12 border-b-neutral-200 <?= $background_color === 'beige' ? 'bg-beige' :'bg-white' ; ?>">
    <div class="flex max-w-screen-xl mx-auto <?= $image_position === 'right' ? 'md:flex-row flex-col-reverse' :'md:flex-row-reverse flex-col-reverse' ; ?>">
    <div class="flex flex-col justify-center w-full">
        
        <?php if($title) : ?>
        <h2 class="mt-10 font-serif text-4xl font-medium text-brand md:mt-0" style="opacity: 1;"><?= esc_html( $title ); ?></h2>
        <?php endif; ?>

        <?php if($text) : ?>
        <p class="mt-6 text-lg font-light" style="opacity: 1;"><?= esc_html( $text ); ?>
        </p>
        <?php endif; ?>

        <div class="h-6"></div>

        <?php if($slug): ?>
        <?php get_template_part( 'parts/atoms/text-button', null, [
            "text"=>$slug['title'],
            "slug"=>$slug['url'],
        ] ); ?><?php endif; ?>
    </div>
    <div class="flex-none w-24"></div>
    <div class="w-full">
        <div class="overflow-hidden rounded-lg">
        <div class="sm:opacity-0" style="opacity: 1;">
            <img
            alt="The road to wealth is paved together."
            loading="lazy"
            width="800"
            height="800"
            class="aspect-[3/2] cursor-default rounded-lg object-cover transition group-hover/horizontalImage:scale-105"
            src="<?= esc_attr($cover_image ); ?>"
            />
        </div>
        </div>
    </div>
    </div>
</section>

<?php endif; ?>