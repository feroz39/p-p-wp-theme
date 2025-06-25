<?php
$address = get_field('address');
$investment_status = get_field('investmentstatus');
$listingTable = get_field('listing_table');
$show_read_more = get_field('show_read_more');
$link_text = get_field('link_text');
?>

<div id="asset-card" class="flex flex-col overflow-hidden rounded-lg md:flex-row">
    <div class="md:w-1/2 w-full relative aspect-[4/3] overflow-hidden">
    <?php if($show_read_more): ?>
    <a class="h-full img-zoom" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail( 'full', array( 'class' => 'aspect-[4/3] object-cover w-full h-full hover:shadow-medium transition-shadow duration-200', 'alt'   => "Cover Image for " . get_the_title() ) ); ?>
    </a>
    <?php else: ?>
    <div class="h-full cursor-default" title="<?php the_title(); ?>">
        <?php the_post_thumbnail( 'full', array( 'class' => 'aspect-[4/3] object-cover w-full h-full hover:shadow-medium transition-shadow duration-200', 'alt'   => "Cover Image for " . get_the_title() ) ); ?>
    </div>
    <?php endif; ?>
    <div class="absolute px-2 py-1 text-xs font-semibold text-red-200 uppercase bg-red-600 rounded-md top-3 left-3">
        <?= $investment_status; ?>
    </div>
    </div>
    <div class="flex flex-col justify-between w-full p-8 bg-beige md:p-16 md:w-1/2">
    <div id="" class="">
        <h3 class="font-serif text-3xl font-medium md:text-4xl text-orange"><?php the_title(); ?></h3>
        <?php if($address): ?>
        <p class="mt-1 text-orange">
        <?= esc_html( $address ); ?>
        </p><?php endif; ?>
        <p class="mt-4 font-light"></p>
        <?php if($listingTable): ?>
        <div class="mt-8 text-sm border border-gray-200 rounded-lg bg-beige/80">
        <?php foreach ($listingTable as $item): ?>
        <div class="flex flex-col items-start p-3 border-b border-b-gray-200 md:flex-row md:justify-between last:border-b-0">
            <p class="font-semibold md:w-2/5"><?= esc_html( $item['title'] ); ?></p>
            <div class="md:w-3/5 md:text-right prose-md prose-a:text-orange"><p><?= $item['text']; ?></p></div>
        </div><?php endforeach; ?>
        </div><?php endif; ?>

        <?php if($show_read_more): ?>
        <div class="h-8"></div>
        <?php get_template_part( 'parts/atoms/text-button', null, [
        "textColor"=>"text-orange",
        "text"=>$link_text,
        "slug"=>get_the_permalink(),
        ] ); ?><?php endif; ?>
    </div>
    </div>
</div>