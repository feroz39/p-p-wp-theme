<?php if (get_row_layout() === 'body_panel'): ?>
<!-- ACF: Body Panel -->
 <?php
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $right_content = get_sub_field('right_content');
    $quote_text = get_sub_field('quote_text');
    $author = get_sub_field('author');
    $image = get_sub_field('image');
    $background_color = get_sub_field('background_color');
    $page_link = get_sub_field('page_link');
?>
<section id="body-section" class="px-6 border-b py-36 md:px-12 border-b-neutral-200 <?= $background_color == "beige" ? "bg-beige" : "bg-white" ?>">
    <?php if($title): ?>
    <div class="grid max-w-screen-xl mx-auto"><h2 class="font-serif text-3xl font-medium text-brand"><?= esc_html( $title ); ?></h2></div>
    <?php endif; ?>
    <div class="grid max-w-screen-xl gap-8 mx-auto mt-10 md:grid-cols-12 md:gap-0">
        <div class="md:col-span-6 col-span-full">
            <?php get_template_part( 'parts/post-body', null, ['content'=>$content] ); ?>
        </div>
        <div class="md:col-span-4 md:col-start-8 col-span-full">
            <div class="pl-10 border border-t-0 border-b-0 border-r-0 border-white border-l-orange">

                <?php if($image): ?>
                    <img
                        src="<?= esc_url($image['url']); ?>"
                        width="770"
                        height="580"
                        alt="<?= $author ? esc_attr($author) : ''; ?>"
                        class="w-full aspect-[4/3] rounded-md mb-4 object-cover"
                    />
                <?php endif; ?>
                <?php if($quote_text): ?>
                    <p class="font-serif text-3xl font-medium text-orange">
                        <?= esc_html( $quote_text ); ?>
                    </p>
                <?php endif; ?>
                <?php if($author): ?>
                    <p class="mt-4">
                        <?= esc_html( $author ); ?>
                    </p>
                <?php endif; ?>
                <?php if($right_content): ?>
                    <?php get_template_part( 'parts/post-body', null, ['content'=>$right_content] ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>