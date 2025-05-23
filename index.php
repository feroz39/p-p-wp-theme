<?php get_header(); ?>
<section id="home-hero" class="relative h-screen">
  <div class="h-screen px-6 bg-brand/90 md:px-12 bg-blend-multiply">
    <div class="relative z-10 flex flex-col justify-center h-screen mx-auto font-sans font-light text-white max-w-7xl">
      <div class="flex items-center justify-between max-w-3xl">
        <div class="">
          <h1 class="py-2 font-serif text-4xl font-medium tracking-tight md:text-6xl">Creating a shared investment journey in Australian real estate.</h1>
          <p class="mt-4 text-lg">An investor-first commercial property syndicator in Australia, providing transparent investment journeys through managed property funds. Don’t just invest in real estate—own it, alongside us.</p>
          <div class="h-6"></div>
          <div class="items-center font-sans cursor-pointer text-orange group w-fit">
            <div class="inline-flex">
              <a title="about-us" class="text-lg leading-none" href="/about-us">Get to know us</a>
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
      <a target="" class="inline-flex font-sans text-white cursor-pointer" href="https://www.propertiesandpathways.com.au/assets/capital-growth-fund-2">
        <p class="">View our latest investment</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-5 h-5 ml-2 text-white transition-transform duration-300 group-hover/button:translate-x-2">
          <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
        </svg>
      </a>
    </div>
  </div>
  <img
    alt="Journey Lines Graphic"
    width="1300"
    height="1300"
    class="absolute bottom-0 right-0 z-0 object-cover object-left-top px-6 overflow-hidden bg-transparent h-1/4 md:w-3/4"
    src="<?php echo get_template_directory_uri(); ?>/assets/img/journey-lines-orange.svg"
  />
  <img
    alt="Aerial view of Perth city skyline"
    width="1200"
    height="1200"
    class="absolute inset-0 -z-10 h-screen max-h-[1100px] min-h-[900px] object-cover w-full md:hidden"
    src="https://pandp-admin.com/wp-content/uploads/2025/05/home-hero-video-image-optimised.webp"
  />
  <video autoplay="" loop="" id="bg" muted="" class="absolute inset-0 -z-10 h-screen max-h-[1100px] min-h-[900px] object-cover grayscale w-full hidden md:block" src="https://pandp-admin.com/wp-content/uploads/2025/05/home-hero-video.mp4"></video>
</section>
<?php wp_footer(); ?>
</body>
</html>