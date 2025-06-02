
<section class="relative h-[650px] overflow-hidden bg-brand md:h-auto">
    <div class="px-8">
        <div class="relative z-20 pt-32 pb-16 mx-auto max-w-7xl md:pb-36 md:pt-48">
            <div class="text-white md:w-3/5 lg:w-1/2">
                <h1 class="font-sans text-lg font-medium text-orange"><?php the_title(); ?></h1>
                <?php if(get_field('heading')) : ?>
                <h2 class="mt-4 font-serif text-4xl font-medium text-white md:text-5xl"><?php the_field('heading'); ?></h2>
                <?php endif; ?>
                <p class="mt-4 font-sans text-lg font-light text-white">
                    <?php echo esc_html(wp_trim_words(get_the_excerpt(), 55)); ?>
                </p>
            </div>
        </div>
    </div>
    <img
        alt="Properties and Pathway Journey Lines Graphic"
        loading="lazy"
        width="1000"
        height="1000"
        class="pl-8 md:absolute md:right-0 md:top-36 md:h-auto md:w-1/2"
        src="https://pandp-admin.com/wp-content/uploads/2025/05/journey_lines_orange_cropped.webp"
    />
</section>
