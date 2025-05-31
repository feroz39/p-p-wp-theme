<?php 
/* Template Name: Home Page Template */ 
?>
<?php get_header('dark'); ?> 
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
  <section class="px-6 pt-36 md:px-12 bg-beige">
    <div id="key-stats" class="grid max-w-screen-xl grid-cols-1 gap-8 mx-auto sm:grid-cols-2 xl:grid-cols-4">
      <div class="p-10 bg-white rounded-lg" style="opacity: 1;">
        <p class="font-serif text-5xl text-brand lg:text-6xl">21.97%</p>
        <p class="mt-2">average annualised investor return (completed syndicates)</p>
      </div>
      <div class="p-10 bg-white rounded-lg" style="opacity: 1;">
        <p class="font-serif text-5xl text-brand lg:text-6xl">86.13%</p>
        <p class="mt-2">reinvestment rate since inception</p>
      </div>
      <div class="p-10 bg-white rounded-lg" style="opacity: 1;">
        <p class="font-serif text-5xl text-brand lg:text-6xl">+12 yrs</p>
        <p class="mt-2">of successful investing</p>
      </div>
      <div class="p-10 bg-white rounded-lg" style="opacity: 1;">
        <p class="font-serif text-5xl text-brand lg:text-6xl">200+</p>
        <p class="mt-2">co-owners investing alongside us</p>
      </div>
    </div>
  </section>
  <section id="horizontal-panel" class="px-6 border-b py-36 md:px-12 border-b-neutral-200 bg-beige">
    <div class="flex flex-col-reverse max-w-screen-xl mx-auto md:flex-row">
      <div class="flex flex-col justify-center w-full">
        <h2 class="mt-10 font-serif text-4xl font-medium text-brand md:mt-0" style="opacity: 1;">Welcome to commercial real estate ownership.</h2>
        <p class="mt-6 text-lg font-light" style="opacity: 1;">
          Property is more than just about returns. It’s about safely moving towards lasting wealth. And sharing that journey—co-owning high-quality Australian commercial real estate that will accelerate in growth for years to
          come—strengthens that wealth more than a solo journey ever could. We should know: we’ve helped hundreds of investors prosper since 2012.
        </p>
        <div class="h-6"></div>
        <div style="opacity: 1;">
          <a title="Hear our story" class="flex text-base font-normal w-fit text-orange" target="" href="/about-us/our-story">
            <div class="group/link">
              <div class="flex items-center space-x-2">
                Hear our story
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/link:translate-x-2">
                  <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="block max-w-0 group-hover/link:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="flex-none w-24"></div>
      <div class="w-full">
        <div class="relative w-full h-full cursor-pointer group/horizontalImage">
          <div class="overflow-hidden rounded-lg">
            <div class="sm:opacity-0" style="opacity: 1;">
              <img
                alt="Welcome to commercial real estate ownership."
                loading="lazy"
                width="800"
                height="800"
                src="https://pandp-admin.com/wp-content/uploads/2023/12/PP-Team-scaled.jpg"
              />
            </div>
          </div>
          <div class="absolute inset-0 z-10 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-16 h-16 text-white transition group-hover:scale-105 group-hover/horizontalImage:text-orange">
              <path fill-rule="evenodd" d="M4.5 5.653c0-1.427 1.529-2.33 2.779-1.643l11.54 6.347c1.295.712 1.295 2.573 0 3.286L7.28 19.99c-1.25.687-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="horizontal-panel" class="px-6 border-b py-36 md:px-12 border-b-neutral-200 bg-beige">
    <div class="flex flex-col-reverse max-w-screen-xl mx-auto md:flex-row-reverse">
      <div class="flex flex-col justify-center w-full">
        <h2 class="mt-10 font-serif text-4xl font-medium text-brand md:mt-0" style="opacity: 1;">As Featured In</h2>
        <p class="mt-6 text-lg font-light" style="opacity: 1;">
          We're no stranger to the spotlight. Properties &amp; Pathways has featured in a range of major Australian publications, including The West Australian and The Australian Financial Review, as well as featuring on the cover of WA
          Business News' magazine. Discover how our journey and expertise have made headlines.
        </p>
        <div class="h-6"></div>
        <div style="opacity: 1;">
          <a title="Read our story here" class="flex text-base font-normal w-fit text-orange" target="" href="https://www.propertiesandpathways.com.au/about-us/our-story">
            <div class="group/link">
              <div class="flex items-center space-x-2">
                Read our story here
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/link:translate-x-2">
                  <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="block max-w-0 group-hover/link:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="flex-none w-24"></div>
      <div class="w-full">
        <div class="overflow-hidden rounded-lg">
          <div class="sm:opacity-0" style="opacity: 1;">
            <img
              alt="As Featured In"
              loading="lazy"
              width="800"
              height="800"
              decoding="async"
              data-nimg="1"
              class="aspect-[3/2] cursor-default rounded-lg object-cover transition group-hover/horizontalImage:scale-105"
              src="https://pandp-admin.com/wp-content/uploads/2024/12/Cal-Cover-BN-Magazine.jpg"
              style="color: transparent;"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="service-panel" class="px-6 border-b py-36 md:px-12 border-b-neutral-200">
    <div class="max-w-screen-xl mx-auto">
      <div id="intro" class="w-full md:w-8/12">
        <p class="font-sans text-orange">Your pathways to ownership</p>
        <h2 class="mt-4 font-serif text-3xl font-medium tracking-tight text-brand">Prosper. Together.</h2>
        <p class="mt-4 font-sans text-lg font-light text-brand">
          We invest alongside each investor in every syndicate, sharing the journey and the rewards. Pooling funds in our unlisted property trusts allows us all access to a prestigious asset class that is otherwise out of reach.
        </p>
        <div class="h-4"></div>
        <a title="Find your ideal investment" class="flex text-base font-normal w-fit text-orange" target="" href="/investments">
          <div class="group/link">
            <div class="flex items-center space-x-2">
              Find your ideal investment
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/link:translate-x-2">
                <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="block max-w-0 group-hover/link:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
          </div>
        </a>
      </div>
      <div id="intro-service-panel" class="grid grid-cols-1 gap-8 pt-24 md:grid-cols-3">
        <a class="group/postcard" title="Income Focused Investments" href="/investments/income-focused-investments">
          <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
            <div class="relative overflow-hidden aspect-video">
              <img
                alt="Cover Image for Income Focused Investments"
                loading="lazy"
                width="1600"
                height="1600"
                decoding="async"
                data-nimg="1"
                class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
                src="https://pandp-admin.com/wp-content/uploads/2023/12/1_3213_ORD_SC-ed.jpeg"
                style="color: transparent;"
              />
            </div>
            <div class="p-10">
              <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">Income Focused Investments</h2>
              <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">Offering reliable, secure and passive income for years to come.</p>
              <div class="h-4"></div>
              <div class="text-base font-normal w-fit text-orange">
                <div class="flex items-center">
                  Read more
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
              </div>
            </div>
          </div>
        </a>
        <a class="group/postcard" title="Capital Growth Funds" href="/investments/capital-growth-funds">
          <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
            <div class="relative overflow-hidden aspect-video">
              <img
                alt="Cover Image for Capital Growth Funds"
                loading="lazy"
                width="1600"
                height="1600"
                decoding="async"
                data-nimg="1"
                class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
                src="https://pandp-admin.com/wp-content/uploads/2023/12/P2344556-scaled.jpg"
                style="color: transparent;"
              />
            </div>
            <div class="p-10">
              <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">Capital Growth Funds</h2>
              <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">Find comfort knowing your capital is working for you—day and night.</p>
              <div class="h-4"></div>
              <div class="text-base font-normal w-fit text-orange">
                <div class="flex items-center">
                  Read more
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
              </div>
            </div>
          </div>
        </a>
        <a class="group/postcard" title="Balanced Property Funds" href="/investments/balanced-property-funds">
          <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
            <div class="relative overflow-hidden aspect-video">
              <img
                alt="Cover Image for Balanced Property Funds"
                loading="lazy"
                width="1600"
                height="1600"
                decoding="async"
                data-nimg="1"
                class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
                src="https://pandp-admin.com/wp-content/uploads/2023/12/2-e1589246808598-700x463.jpg"
                style="color: transparent;"
              />
            </div>
            <div class="p-10">
              <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">Balanced Property Funds</h2>
              <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">The perfect blend of reliable income and capital growth.</p>
              <div class="h-4"></div>
              <div class="text-base font-normal w-fit text-orange">
                <div class="flex items-center">
                  Read more
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section id="content-marketing" class="px-6 border-b py-36 md:px-12 border-b-neutral-200">
    <div class="max-w-screen-xl mx-auto">
      <div class="w-full md:w-8/12">
        <p class="text-lg text-orange">News &amp; Views</p>
        <h2 class="mt-4 font-serif text-3xl font-medium">Find out company updates and market-leading blog posts under one roof.</h2>
        <div class="h-4"></div>
        <a title="View all news" class="flex text-base font-normal w-fit text-orange" target="" href="/news-views">
          <div class="group/link">
            <div class="flex items-center space-x-2">
              View all news
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/link:translate-x-2">
                <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="block max-w-0 group-hover/link:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
          </div>
        </a>
      </div>
      <div class="grid max-w-screen-xl grid-cols-1 gap-8 pt-16 mx-auto md:grid-cols-3">
        <a class="group/postcard" title="How to conduct the most thorough pre-purchase inspections" href="/how-to-conduct-the-most-thorough-pre-purchase-inspections">
          <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
            <div class="relative overflow-hidden aspect-video">
              <img
                alt="Cover Image for How to conduct the most thorough pre-purchase inspections"
                loading="lazy"
                width="1600"
                height="1600"
                decoding="async"
                data-nimg="1"
                class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
                src="https://pandp-admin.com/wp-content/uploads/2025/04/what-to-look-for-on-a-site-inspection.jpg.webp"
                style="color: transparent;"
              />
            </div>
            <div class="p-10">
              <p class="mb-2 text-sm font-medium text-brand">Insights</p>
              <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">How to conduct the most thorough pre-purchase inspections</h2>
              <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">If you’re serious about property investment, whether commercial or residential, you already know that due di</p>
              <div class="h-4"></div>
              <div class="text-base font-normal w-fit text-orange">
                <div class="flex items-center">
                  Read more
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
              </div>
            </div>
          </div>
        </a>
        <a class="group/postcard" title="Do federal elections really impact the property market?" href="/do-federal-elections-really-impact-the-property-market">
          <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
            <div class="relative overflow-hidden aspect-video">
              <img
                alt="Cover Image for Do federal elections really impact the property market?"
                loading="lazy"
                width="1600"
                height="1600"
                decoding="async"
                data-nimg="1"
                class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
                src="https://pandp-admin.com/wp-content/uploads/2025/04/federal-election-impact-property.jpg"
                style="color: transparent;"
              />
            </div>
            <div class="p-10">
              <p class="mb-2 text-sm font-medium text-brand">Insights</p>
              <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">Do federal elections really impact the property market?</h2>
              <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">Well, we’re about to gear up for another federal election. With the two-horse race in full swing, the questi</p>
              <div class="h-4"></div>
              <div class="text-base font-normal w-fit text-orange">
                <div class="flex items-center">
                  Read more
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
              </div>
            </div>
          </div>
        </a>
        <a class="group/postcard" title="Why Australian real estate could be the best investment asset on the planet" href="/australian-real-estate-best-investment-in-world">
          <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
            <div class="relative overflow-hidden aspect-video">
              <img
                alt="Cover Image for Why Australian real estate could be the best investment asset on the planet"
                loading="lazy"
                width="1600"
                height="1600"
                decoding="async"
                data-nimg="1"
                class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
                src="https://pandp-admin.com/wp-content/uploads/2025/04/sydney-best-property-market-in-world.jpg.webp"
                style="color: transparent;"
              />
            </div>
            <div class="p-10">
              <p class="mb-2 text-sm font-medium text-brand">Insights</p>
              <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">Why Australian real estate could be the best investment asset on the planet</h2>
              <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">When it comes to investments, politics and the economy, little ol’ Australia barely gets a mention on the in</p>
              <div class="h-4"></div>
              <div class="text-base font-normal w-fit text-orange">
                <div class="flex items-center">
                  Read more
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section id="service-panel" class="px-6 border-b py-36 md:px-12 border-b-neutral-200">
    <div class="max-w-screen-xl mx-auto">
      <div id="intro" class="w-full md:w-8/12">
        <p class="font-sans text-orange">Commercial property ownership</p>
        <h2 class="mt-4 font-serif text-3xl font-medium tracking-tight text-brand">We only win when our investors win.</h2>
        <p class="mt-4 font-sans text-lg font-light text-brand">
          Whether you’re a sophisticated investor looking to park your capital in an income-focused fund or a family office adviser securing generational wealth for your client, we’re committed to creating a long-lasting partnership with
          you.
        </p>
        <div class="h-4"></div>
        <a title="Visit our investor homepage" class="flex text-base font-normal w-fit text-orange" target="" href="/investors">
          <div class="group/link">
            <div class="flex items-center space-x-2">
              Visit our investor homepage
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/link:translate-x-2">
                <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <span class="block max-w-0 group-hover/link:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
          </div>
        </a>
      </div>
      <div id="intro-service-panel" class="grid grid-cols-1 gap-8 pt-24 md:grid-cols-3">
        <a class="group/postcard" title="Private Investors" href="/investors/private-investors">
          <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
            <div class="relative overflow-hidden aspect-video">
              <img
                alt="Cover Image for Private Investors"
                loading="lazy"
                width="1600"
                height="1600"
                decoding="async"
                data-nimg="1"
                class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
                src="https://pandp-admin.com/wp-content/uploads/2023/12/private-investors.jpg"
                style="color: transparent;"
              />
            </div>
            <div class="p-10">
              <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">Private Investors</h2>
              <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">Building a portfolio of high-quality real estate has never been easier.</p>
              <div class="h-4"></div>
              <div class="text-base font-normal w-fit text-orange">
                <div class="flex items-center">
                  Read more
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
              </div>
            </div>
          </div>
        </a>
        <a class="group/postcard" title="Family Office" href="/investors/family-office">
          <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
            <div class="relative overflow-hidden aspect-video">
              <img
                alt="Cover Image for Family Office"
                loading="lazy"
                width="1600"
                height="1600"
                decoding="async"
                data-nimg="1"
                class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
                src="https://pandp-admin.com/wp-content/uploads/2023/12/Family-office.jpg"
                style="color: transparent;"
              />
            </div>
            <div class="p-10">
              <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">Family Office</h2>
              <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">Secure investments to support your succession plan.</p>
              <div class="h-4"></div>
              <div class="text-base font-normal w-fit text-orange">
                <div class="flex items-center">
                  Read more
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
              </div>
            </div>
          </div>
        </a>
        <a class="group/postcard" title="Institutional Investors" href="/investors/institutional-investors">
          <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
            <div class="relative overflow-hidden aspect-video">
              <img
                alt="Cover Image for Institutional Investors"
                loading="lazy"
                width="1600"
                height="1600"
                decoding="async"
                data-nimg="1"
                class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
                src="https://pandp-admin.com/wp-content/uploads/2023/12/institutional-investors-scaled.jpeg"
                style="color: transparent;"
              />
            </div>
            <div class="p-10">
              <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2">Institutional Investors</h2>
              <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand">Dedicated to achieving your unique investment goals.</p>
              <div class="h-4"></div>
              <div class="text-base font-normal w-fit text-orange">
                <div class="flex items-center">
                  Read more
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                  </svg>
                </div>
                <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section id="horizontal-panel" class="px-6 bg-white border-b py-36 md:px-12 border-b-neutral-200">
    <div class="flex flex-col-reverse max-w-screen-xl mx-auto md:flex-row-reverse">
      <div class="flex flex-col justify-center w-full">
        <h2 class="mt-10 font-serif text-4xl font-medium text-brand md:mt-0" style="opacity: 1;">Protected wealth is lasting wealth.</h2>
        <p class="mt-6 text-lg font-light" style="opacity: 1;">
          We offer a pathway to prosperity. But beyond delivering robust returns, we believe in the safety of our investments and the security of your future wealth. That’s why we ensure your capital is protected before it’s grown.
        </p>
        <div class="h-6"></div>
        <div style="opacity: 1;">
          <a title="View our investment opportunities" class="flex text-base font-normal w-fit text-orange" target="" href="/assets/category/current-assets">
            <div class="group/link">
              <div class="flex items-center space-x-2">
                View our investment opportunities
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/link:translate-x-2">
                  <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="block max-w-0 group-hover/link:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="flex-none w-24"></div>
      <div class="w-full">
        <div class="overflow-hidden rounded-lg">
          <div class="sm:opacity-0" style="opacity: 1;">
            <img
              alt="Protected wealth is lasting wealth."
              loading="lazy"
              width="800"
              height="800"
              decoding="async"
              data-nimg="1"
              class="aspect-[3/2] cursor-default rounded-lg object-cover transition group-hover/horizontalImage:scale-105"
              src="https://pandp-admin.com/wp-content/uploads/2025/01/Directors-Properties-and-Pathways-e1737515498843.jpg"
              style="color: transparent;"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="horizontal-panel" class="px-6 bg-white border-b py-36 md:px-12 border-b-neutral-200">
    <div class="flex flex-col-reverse max-w-screen-xl mx-auto md:flex-row">
      <div class="flex flex-col justify-center w-full">
        <h2 class="mt-10 font-serif text-4xl font-medium text-brand md:mt-0" style="opacity: 1;">Investors are owners—and owners are informed.</h2>
        <p class="mt-6 text-lg font-light" style="opacity: 1;">
          Some syndicators keep information hidden from their investors. We disagree with this. At Properties &amp; Pathways, we entrust every investor with confidential data about the asset they’ve co-acquired. Our fee structure aligns
          with the performance of the property and we provide a tailored-made investor portal—Arche—that provides 24/7 access to live property data.
        </p>
        <div class="h-6"></div>
        <div style="opacity: 1;">
          <a title="Check out our investor portal" class="flex text-base font-normal w-fit text-orange" target="" href="https://www.propertiesandpathways.com.au/arche-investor-portal">
            <div class="group/link">
              <div class="flex items-center space-x-2">
                Check out our investor portal
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/link:translate-x-2">
                  <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="block max-w-0 group-hover/link:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
            </div>
          </a>
        </div>
      </div>
      <div class="flex-none w-24"></div>
      <div class="w-full">
        <div class="overflow-hidden rounded-lg">
          <div class="sm:opacity-0" style="opacity: 1;">
            <img
              alt="Investors are owners—and owners are informed."
              loading="lazy"
              width="800"
              height="800"
              decoding="async"
              data-nimg="1"
              class="aspect-[3/2] cursor-default rounded-lg object-cover transition group-hover/horizontalImage:scale-105"
              src="https://pandp-admin.com/wp-content/uploads/2024/12/Arche-display.png"
              style="color: transparent;"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>