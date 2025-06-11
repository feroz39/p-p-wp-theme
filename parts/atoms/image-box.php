<?php
$src = $args['src'] ?? "";
$width = $args['width'] ?? "";
$height = $args['height'] ?? "";
$alt = $args['alt'] ?? "";
$imageWrapper = $args['imageWrapper'] ?? "";
$classWrapper = $args['classWrapper'] ?? "";
?>

<?php if($src): ?>
<div class="<?= esc_attr($classWrapper ? $classWrapper : "bg-orange"); ?>">
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