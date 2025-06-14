<?php if (get_row_layout() === 'header_section_white'): ?>
    <!-- ACF: Header Section White -->
    <?php
        $title = get_sub_field('title');
        $sub_title = get_sub_field('subtitle');
        $cover_image = get_sub_field('cover_image');
    ?>

    <?php 
    // echo '<pre>';
    // var_dump($cards);
    // echo '</pre>';
    ?>

    <section class="relative z-10 md:h-[650px] px-6 md:px-12 flex flex-col-reverse md:flex-col pt-36 md:pt-64">
        <div class="w-full max-w-screen-xl pt-10 mx-auto md:pt-0">
            <div class="md:w-5/12 lg:w-6/12 xl:w-6/12 2xl:w-7/12">
            <p class="text-lg text-orange" style="opacity: 1;">Directory</p>
            <?php if($title): ?>
            <h1 class="mt-4 font-serif text-5xl font-medium tracking-tight text-brand" style="opacity: 1;">
                <?= esc_html( $title ); ?>
            </h1><?php endif; ?>
            <?php if($sub_title): ?>
            <h2 class="mt-2 text-lg font-light">
                <?= esc_html( $sub_title ); ?>
            </h2><?php endif; ?>
            </div>
        </div>
        <?php if ($cover_image): ?>
            <img
                src="<?= esc_url($cover_image); ?>" 
                alt="Cover Image for <?= esc_attr($title); ?>"
                height="650"
                width="650"
                class="md:absolute relative flex inset-y-0 right-0 mt-28 h-auto md:h-[650px] md:w-6/12 lg:w-5/12 2xl:w-5/12 object-contain object-right"
            >
        <?php endif; ?>
    </section>
<?php endif; ?>