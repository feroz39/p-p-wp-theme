<?php
$src = $args['src'] ?? "";
$width = $args['width'] ?? "";
$height = $args['height'] ?? "";
$alt = $args['alt'] ?? "";
$imageWrapper = $args['imageWrapper'] ?? "";
$classWrapper = $args['classWrapper'] ?? "";
?>

<?php if($src): ?>
<div class="bg-orange <?= esc_attr($classWrapper ? $classWrapper : ""); ?>">
    <img
        width="<?= esc_attr( $width ) ?>"
        height="<?= esc_attr( $height ) ?>"
        alt="<?= esc_attr( $alt ) ?>"
        src="<?= esc_attr( $src ) ?>"
        class="<?= esc_attr( $imageWrapper ) ?>"
        loading="lazy"
    />
</div>
<?php endif; ?>