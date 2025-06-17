<?php if (get_row_layout() === 'intro_panel'): ?>
<!-- ACF: Intro Panel -->
    <?php
        $title = get_sub_field('title');
        $sub_title = get_sub_field('sub_title');
        $text = get_sub_field('text');
        $background_color = get_sub_field('background_color');
        $cards = get_sub_field('cards');
        $layout = get_sub_field('layout');
    ?>

    <?php 
    // echo '<pre>';
    // var_dump($layout);
    // echo '</pre>';
    ?>

<section id="intro-panel" class="px-6 border-b py-36 md:px-12 border-b-neutral-200 <?= $background_color === 'beige' ? 'bg-beige' :'bg-white' ; ?> <?= ($title || $sub_title || $text) ? 'pt-40' : ''; ?>">
    <div class="max-w-screen-xl mx-auto">
        <div id="intro" class="w-full <?= $layout == 'full' ? 'md:w-8/12' : 'md:pr-32'; ?>">
            <p class="text-lg text-orange" style="opacity: 1;"><?= esc_html( $title ); ?></p>
            <h2 class="mt-4 font-serif text-3xl font-medium" style="opacity: 1;"><?= esc_html( $sub_title ); ?></h2>
            <p class="mt-2 text-lg font-light" style="opacity: 1;"><?= esc_html( $text ); ?></p>
        </div>
        <?php if (!empty($cards)): ?>
        <div class="grid grid-cols-1 gap-4 pt-24 sm:grid-cols-2 md:grid-cols-4 md:gap-6">
            <?php foreach ($cards as $card): ?>
            <?php get_template_part( 'parts/molecules/intro-card', null, ['card' => $card, 'bg' => $background_color]); ?>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>