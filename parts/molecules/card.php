<?php
$card  = $args['card'] ?? [];
// echo '<pre>';
// var_dump($dark);
// echo '</pre>';
$post_id = url_to_postid($card['page_link']);
?>
<?php if($post_id): ?>

<?php
$title = get_the_title($post_id);
$thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
$excerpt = get_the_excerpt($post_id);
?>
<div id="image-card-0" class="h-full overflow-hidden rounded-b-md" style="opacity: 1;">
    <a title="Income Focused Investments" class="flex flex-col h-full" target="_self" href="<?= esc_url($card['page_link']); ?>">
        <?php if ($thumbnail_url) : ?>
        <div class="flex-none overflow-hidden rounded-md">
            <div class="sm:opacity-0" style="opacity: 1;">
                <img
                alt="<?= esc_attr($title); ?>"
                loading="lazy"
                width="500"
                height="500"
                class="object-cover transition-transform duration-500 ease-in-out rounded-md cursor-pointer aspect-square hover:scale-110"
                src="<?= esc_url($thumbnail_url); ?>"
                style="color: transparent;"
                />
            </div>
        </div>
        <?php endif; ?>
        <div class="flex flex-col justify-start mt-6">
        <h2 class="text-xl text-orange sm:h-16"><?= esc_html($title); ?></h2>
        <h4 class="mt-2 text-base font-light"><?= esc_html($excerpt); ?></h4>
        <div class="mt-6">
            <?php if($card['link_text']): ?>
                <?php get_template_part( 'parts/atoms/text-button', null, ["text"=>$card['link_text']] ); ?>
            <?php else: ?>
                <?php get_template_part( 'parts/atoms/text-button', null, null ); ?>
            <?php endif; ?>
        </div>
        </div>
    </a>
</div>


<?php endif; ?>