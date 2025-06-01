<?php
$card  = $args['card'] ?? [];
$bg  = $args['bg'] ?? [];
// echo '<pre>';
// var_dump($card);
// echo '</pre>';
?>


<div id="invest-card" class="p-6 rounded-lg md:p-10 <?= $bg === 'beige' ? 'bg-white' :'bg-beige' ; ?>" style="opacity: 1;">
    <?php if($card['icon_image']): ?>
    <div class="flex items-center justify-center w-12 h-12">
        <img
        alt="<?= esc_attr( $card['title'] ); ?>"
        loading="lazy"
        width="48"
        height="48"
        src="<?= esc_attr( $card['icon_image'] ); ?>"
        style="color: transparent;"
        />
    </div><?php endif; ?>

    <?php if($card['title']): ?>
    <h3 class="text-orange <?= esc_attr( $card['icon_image'] ? "text-xl mt-4" : "text-3xl" ); ?>">
        <?= esc_html( $card['title'] ); ?>
    </h3><?php endif; ?>

    <?php if($card['text']): ?>
    <p class="mb-4 font-light <?= esc_attr( $card['icon_image'] ? "mt-6" : "mt-2" ); ?> <?= esc_attr( $card['slug'] ? "mb-4" : "" ); ?>">
        <?= esc_html( $card['text'] ); ?>
    </p><?php endif; ?>

    <?php if($card['slug']): ?>
    <?php get_template_part( 'parts/atoms/text-button', null, [
        "text"=>$card['slug']['title'],
        "slug"=>$card['slug']['url'],
        "target"=>$card['slug']['target'],
    ] ); ?><?php endif; ?>
</div>