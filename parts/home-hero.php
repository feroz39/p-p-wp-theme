<?php if (get_row_layout() === 'home_hero'): ?>
<!-- ACF: Home Hero -->

<?php
    $title = get_sub_field('title');
    $caption = get_sub_field('caption');
    $link = get_sub_field('learn_more_link');
    $link_text = get_sub_field('learn_more_link_text');
    $button_link = get_sub_field('button_link');
    $video_url = get_sub_field('video_url');
?>
<?php 
// echo '<pre>';
// var_dump($slug);
// echo '</pre>';
?>

<section id="home-hero" class="relative h-screen">
  <div class="h-screen px-6 bg-brand/90 md:px-12 bg-blend-multiply">
    <div class="relative z-10 flex flex-col justify-center h-screen mx-auto font-sans font-light text-white max-w-7xl">
      <div class="flex items-center justify-between max-w-3xl">
        <div class="">
          <h1 class="py-2 font-serif text-4xl font-medium tracking-tight md:text-6xl">
            <?= $title; ?>
          </h1>
          <p class="mt-4 text-lg">
            <?= $caption; ?>
          </p>
          <div class="h-6"></div>
          <div class="items-center font-sans cursor-pointer text-orange group w-fit">
            <div class="inline-flex">
              <a title="<?= $link_text; ?>" class="text-lg leading-none" href="<?= $link; ?>">
                <?= $link_text ? $link_text : "Learn more"; ?>
              </a>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-5 h-5 ml-2 transition-transform duration-300 text-orange group-hover:translate-x-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
              </svg>
            </div>
            <span class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="absolute z-30 flex px-6 py-4 text-white transition-colors duration-300 rounded-lg group/button md:right-24 bottom-16 bg-orange hover:bg-brand md:px-8">
      <a target="<?= $button_link["target"]; ?>" class="inline-flex font-sans text-white cursor-pointer" href="<?= $button_link["url"]; ?>">
        <p class="">
            <?= $button_link["title"]; ?>
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-5 h-5 ml-2 text-white transition-transform duration-300 group-hover/button:translate-x-2">
          <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
        </svg>
      </a>
    </div>
  </div>
  <img
    alt="Journey Lines Graphic"
    fetchpriority="high"
    width="1300"
    height="1300"
    class="absolute bottom-0 right-0 z-0 object-cover object-left-top px-6 overflow-hidden bg-transparent h-1/4 md:w-3/4"
    src="<?= get_template_directory_uri(  ); ?>/assets/img/journey-lines-orange.svg"
  />  
  <video
    autoplay
    loop
    muted
    playsinline
    preload="none"
    poster="<?= get_template_directory_uri(); ?>/assets/img/home-hero-video-image-optimised.jpg"
    class="absolute inset-0 -z-10 h-screen max-h-[1100px] min-h-[900px] object-cover grayscale w-full hidden md:block"
  >
    <source src="<?= get_template_directory_uri(); ?>/assets/img/home-hero-video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</section>

<?php endif; ?>