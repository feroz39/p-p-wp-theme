<?php
$title        = $args['title']        ?? '';
$slug         = $args['slug']         ?? '';
$excerpt      = $args['excerpt']      ?? '';
$coverImage   = $args['coverImage']   ?? '';
$index        = $args['index']        ?? '';
$linkText     = $args['linkText']     ?? '';
$label        = $args['label']        ?? null;
$card_style   = $args['card_style']    ?? '';
$type         = $args['type']    ?? '';
$isLinkNewTab = $args['isLinkNewTab'] ?? false;
?>
<?php 
// echo '<pre>';
// var_dump($type);
// echo '</pre>';
?>

<div id="team-card-<?= esc_attr( $index ); ?>" class="h-full overflow-hidden team-card rounded-b-md">
    <?php if($slug): ?>
        <a title="Guy Doggett" href="/team/guy-doggett">
            <div class="flex-none overflow-hidden rounded-md bg-orange img-zoom">
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
            </div>
            <div class="mt-6">
                <h3 class="text-2xl text-orange">
                    <?= esc_html( $title ); ?>
                </h3>
                <?php if($excerpt): ?>
                <h4 class="mt-2 text-lg font-light">
                    <?= esc_html( $excerpt ); ?>
                </h4><?php endif; ?>
            </div>
        </a>
    <?php endif; ?>
</div>