<?php
$images = $args['gallery'] ?? '';
if( !empty($images) ):
?>
<section class="splide asset-carousel">
  <div class="splide__arrows splide__arrows--ltr">
    <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide" aria-controls="splide33-track">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
    </button>
    <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide" aria-controls="splide33-track">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
    </button>
  </div>
  <div class="splide__track">
    <ul class="splide__list">
      <?php foreach( $images as $image ): ?>
      <li class="splide__slide">
        <img
          alt="<?= esc_attr($image['alt']); ?>"
          loading="lazy"
          width="800"
          height="800"
          class="object-cover w-full rounded-lg cursor-pointer aspect-video"
          src="<?= esc_url($image['url']); ?>"
        />
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>