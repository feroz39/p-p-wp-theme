<?php if (get_row_layout() === 'header_section'): ?>
<!-- ACF: Header Section -->
    <?php
        $title = get_sub_field('title');
        $sub_title = get_sub_field('sub_title');
        $text = get_sub_field('text');
        $header_image = get_sub_field('header_image');
        $cards = get_sub_field('card');
        $background_color = get_sub_field('background_color');
    ?>

    <?php 
    // echo '<pre>';
    // var_dump($cards);
    // echo '</pre>';
    ?>

    <section id="parent-header-Page_Pagecomponents_Components_HeaderSection" class="relative h-[650px] overflow-hidden  md:h-auto <?= esc_attr($background_color) == 'white' ? 'bg-white text-brand' : 'bg-brand text-white'; ?>">
        <div class="px-6 md:px-12">
            <div class="relative z-20 pt-32 pb-16 mx-auto max-w-7xl md:pt-48 <?= empty($cards) ? 'md:pb-36' : 'md:pb-64' ; ?>">
            <div class="md:w-3/5 lg:w-1/2">
                <h1 class="font-sans text-lg font-medium text-orange" style="opacity: 1;"><?= esc_html($title); ?></h1>
                <h2 class="mt-4 font-serif text-4xl font-medium md:text-5xl" style="opacity: 1;"><?= esc_html($sub_title); ?></h2>
                <p class="mt-4 font-sans text-lg font-light" style="opacity: 1;"><?= esc_html($text); ?></p>
            </div>
            </div>
        </div>
        <div>
            <img
            alt="Properties and Pathway Journey Lines Graphic"
            fetchpriority="high"
            width="1000"
            height="1000"
            class="pl-8 md:absolute md:right-0 md:top-36 md:h-auto md:w-1/2"
            src="<?= $header_image ? esc_url($header_image['url']) : 'https://pandp-admin.com/wp-content/uploads/2025/05/journey_lines_orange_cropped.webp'; ?>"
            style="color: transparent;"
            />
        </div>
    </section>

    <?php if (!empty($cards)): ?>
    <section class="px-6 py-32 md:px-12 md:-mt-32 md:py-0">
        <div class="relative z-20 grid gap-8 mx-auto max-w-7xl md:grid-cols-3">
            <?php foreach ($cards as $card): ?>
                <?php get_template_part( 'parts/molecules/card', null, ['card' => $card]); ?>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>
<?php endif; ?>