<?php 
    $item  = $args['item'] ?? [];
    $path = trim(parse_url($item["post_link"], PHP_URL_PATH), '/');
    
    $post_id = url_to_postid($item["post_link"]);
    $title = get_the_title($post_id);
    $slug = get_post_field('post_name', $post_id);
    $excerpt = get_the_excerpt( $post_id );
    $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
    $cat = get_categories( $post_id )
?>
<?php 
// echo '<pre>';
// var_dump($cat);
// echo '</pre>';
?>

<a class="group/postcard" title="Case Study: How we safely doubled our investor’s money (in 2 years)" href="<?= esc_url( $slug ); ?>">
    <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
        <div class="relative overflow-hidden aspect-video">
        <?php if( $thumbnail_url): ?>
        <img
            alt="Cover Image for <?= esc_attr( $title ) ?>"
            width="1600"
            height="1600"
            class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
            src="<?= esc_url( $thumbnail_url ); ?>"
        /><?php endif; ?>
        </div>
        <div class="p-10">
        <p class="mb-2 text-sm font-medium text-brand">
            <?= esc_html( $cat[0]->name ) ?>
        </p>
        <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">
            <?= esc_html( $title ) ?>
        </h2>
        <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">
            <?= esc_html( $excerpt ) ?>
        </p>
        <div class="h-4"></div>
        <?php get_template_part( 'parts/atoms/text-button', null, [
            "textColor"=>"text-orange", "groupClass"=>"postcard"
        ] ); ?>
        </div>
    </div>
</a>