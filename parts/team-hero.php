<section class="relative overflow-hidden bg-white md:h-auto">
  <div class="px-6 md:px-12">
    <div class="relative z-20 pt-32 pb-16 mx-auto max-w-7xl md:pb-36 md:pt-48">
      <div class="text-brand md:w-3/5 lg:w-1/2">
        <p class="font-sans text-lg font-medium text-orange">Our Team</p>
        <h1 class="mt-4 font-serif text-4xl font-medium text-brand md:text-5xl">
            <?php the_title(); ?>
        </h1>
        <h2 class="mt-4 font-sans text-lg font-light text-orange">
            <?php the_excerpt(  ); ?>
        </h2>
      </div>
    </div>
  </div>
    <?php 
    $image = get_field('hero_image');
    if( !empty( $image ) ): ?>
    <img
        alt="<?php the_title(); ?>"
        loading="lazy"
        width="1000"
        height="1000"
        class="pl-8 lg:absolute lg:right-0 lg:top-24 lg:h-full lg:w-auto"
        src="<?php echo esc_url($image['url']); ?>"
    /><?php endif; ?>
</section>
