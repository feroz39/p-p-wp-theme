<?php if (get_row_layout() === 'header_section_white'): ?>
    <!-- ACF: Header Section White -->
    <?php
        $title = get_sub_field('title');
        $sub_title = get_sub_field('subtitle');
        $sub_title_2 = get_sub_field('subtitle_2');
        $text = get_sub_field('text');
        $cover_image = get_sub_field('cover_image');
        $image_position = get_sub_field('image_position');
    ?>

    <?php 
    // echo '<pre>';
    // var_dump($cards);
    // echo '</pre>';
    ?>

    <section class="relative h-[650px] overflow-hidden bg-white md:h-auto">
        <div class="px-6 md:px-12">
            <div class="relative z-20 pt-32 pb-16 mx-auto max-w-7xl md:pb-36 md:pt-48">
                <div class="md:w-3/5 lg:w-1/2">
                    <?php if($title): ?>
                    <p class="text-lg text-orange" style="opacity: 1;"><?= esc_html( $title ); ?></p>
                    <?php endif; ?>
                    <h1 class="mt-4 font-serif text-5xl font-medium tracking-tight text-brand" style="opacity: 1;">Invest alongside us in quality retail property investment</h1>
                    <h2 class="mt-2 text-lg font-light" style="opacity: 1;">
                        Investment in Australian retail property has provided excellent opportunities for investors. It is a commonly understood commercial real estate asset class to invest in, particularly for those who recognise tenant
                        requirements and the environment in which they operate.
                    </h2>
                </div>
            </div>
        </div>
        <?php if ($cover_image): ?>
            <img
                src="<?= esc_url($cover_image); ?>" 
                alt="Cover Image for <?= esc_attr($title); ?>"
                height="<?= esc_attr( $image_position === 'full' ? '2400' : '650' ) ?>"
                width="<?= esc_attr( $image_position === 'full' ? '2400' : '650' ) ?>"
                class="<?= esc_attr( $image_position === 'full' ? 'h-[350px] md:h-[500px] object-cover' : 'md:absolute relative flex inset-y-0 -right-6 md:right-0 md:mt-28 h-auto md:h-[650px] md:w-6/12 lg:w-5/12 2xl:w-5/12 object-contain object-right' ) ?>"
            >
        <?php else: ?>
            <?php if($image_position == 'full'): ?>
            <img
                alt="Properties and Pathway Journey Lines Graphic"
                width="1000"
                height="1000"
                class="pl-8 md:absolute md:right-0 md:top-36 md:h-auto md:w-1/2"
                src="https://pandp-admin.com/wp-content/uploads/2025/05/journey_lines_orange_cropped.webp"
            />
            <?php endif; ?>
        <?php endif; ?>
    </section>

<?php endif; ?>