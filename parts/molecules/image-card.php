<?php
$title        = $args['title']        ?? '';
$slug         = $args['slug']         ?? '';
$excerpt      = $args['excerpt']      ?? '';
$coverImage   = $args['coverImage']   ?? '';
$index        = $args['index']        ?? '';
$linkText     = $args['linkText']     ?? '';
$label        = $args['label']        ?? null;
$card_style    = $args['card_style']    ?? '';
$isLinkNewTab = $args['isLinkNewTab'] ?? false;
?>
<?php 
// echo '<pre>';
// var_dump($card_style);
// echo '</pre>';
?>

<div class="h-full overflow-hidden rounded-b-md">
    <?php if($slug): ?>
        <a href="<?= esc_attr( $slug ); ?>" title="<?= esc_attr( $title ); ?>" class="flex flex-col h-full" target="<?= esc_attr( $isLinkNewTab ? "_blank" : "_self" ); ?>">
            <?php 
                get_template_part( 
                    'parts/atoms/image-box',
                    null, 
                    [
                        "width"=> "500", 
                        "height"=>"500", 
                        "alt"=> "Cover Image for".$title, 
                        "src" => is_array($coverImage) && !empty($coverImage['url']) ? $coverImage['url'] : $coverImage,
                        "classWrapper"=> $card_style == "cardService" ? "overflow-hidden flex-none img-zoom rounded-t-md rounded-b-none" : "overflow-hidden flex-none img-zoom rounded-md",
                        "imageWrapper"=> $card_style !== "cardService" ? "cursor-pointer object-cover aspect-square rounded-md" : "cursor-pointer object-cover aspect-video"
                    ]
                );
            ?>
            <div class="justify-start  flex flex-col <?= esc_attr( $card_style == "cardService" ? "p-6 md:p-10 bg-beige rounded-b-md rounded-t-none h-full" : "mt-6" ); ?>">
                <?php if($label): ?>
                <p class="mb-2 text-sm text-brand">
                    <?= esc_html( $label ); ?>
                </p><?php endif; ?>
                <h2 class="text-xl text-orange sm:h-16">
                    <?= esc_html( $title ); ?>
                </h2>
                <?php if($excerpt): ?>
                <h4 class="mt-2 text-base font-light">
                    <?= esc_html( $excerpt ); ?>
                </h4><?php endif; ?>

                <?php if($slug): ?>
                    <div class="mt-6">
                        <?php get_template_part( 'parts/atoms/text-button', null, ["text"=> $linkText ? $linkText : "Read more", "title"=> $title, "textColor"=>"text-orange"]) ?>
                    </div>
                <?php endif; ?>
            </div>
        </a>
    <?php else: ?>
        <div class="flex flex-col h-full">
            <?php 
                get_template_part( 
                    'parts/atoms/image-box',
                    null, 
                    [
                        "width"=> "500", 
                        "height"=>"500", 
                        "alt"=> "Cover Image for".$title, 
                        "src" => is_array($coverImage) && !empty($coverImage['url']) ? $coverImage['url'] : $coverImage,
                        "classWrapper"=> $card_style == "cardService" ? "overflow-hidden flex-none img-zoom rounded-t-md rounded-b-none" : "overflow-hidden flex-none img-zoom rounded-md",
                        "imageWrapper"=> $card_style !== "cardService" ? "cursor-pointer object-cover aspect-square rounded-md" : "cursor-pointer object-cover aspect-video"
                    ]
                );
            ?>
            <div class="justify-start  flex flex-col <?= esc_attr( $card_style == "cardService" ? "p-6 md:p-10 bg-beige rounded-b-md rounded-t-none h-full" : "mt-6" ); ?>">
                <?php if($label): ?>
                <p class="mb-2 text-sm text-brand">
                    <?= esc_html( $label ); ?>
                </p><?php endif; ?>
                <h2 class="text-xl text-orange sm:h-16">
                    <?= esc_html( $title ); ?>
                </h2>
                <?php if($excerpt): ?>
                <h4 class="mt-2 text-base font-light">
                    <?= esc_html( $excerpt ); ?>
                </h4><?php endif; ?>

                <?php if($slug): ?>
                    <div class="mt-6">
                        <?php get_template_part( 'parts/atoms/text-button', null, ["text"=> $linkText || "Read more", "title"=> $title, "textColor"=>"text-orange"]) ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>