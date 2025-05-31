<?php get_header(); ?>

<div class="min-h-screen">
  <div style="opacity: 1;">
    <main>
      <div id="motion-section">
        <section class="relative z-10 px-12">
          <div class="max-w-screen-xl pt-40 mx-auto md:pt-64">
            <h1 class="text-lg text-orange md:w-7/12">Insights</h1>
            <div
              class="mt-4 prose prose-lg prose-h2:text-5xl prose-h2:font-medium prose-h2:font-serif prose-h2:tracking-tight prose-h2:text-brand prose-h2:mb-4 prose-h3:text-orange prose-h3:text-base prose-h3:font-normal prose-h4:text-brand prose-h4:text-base"
            >
              <h2>News and views straight from the experts.</h2>
              <h3>Check out our weekly article updates, featuring insights into Australia's property market, expert views from our team and exclusive news about our own investments.</h3>
            </div>
          </div>
        </section>
      </div>
      <?php
      $args = [
        'post_type' => 'post',
        'posts_per_page' => -1, // Change to desired number of posts per page
      ];

      $query = new WP_Query($args);?>
      <?php if ( $query->have_posts() ) : ?>
      <div id="motion-section">
        <section class="px-12 py-40">
          <div class="grid max-w-screen-xl grid-cols-3 gap-12 mx-auto mt-24">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <a class="group/postcard" title="Why WALE Matters When Selling Your Commercial Asset" href="<?php the_permalink(); ?>">
                <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
                  <div class="relative overflow-hidden aspect-video">
                    <?php if ( has_post_thumbnail() ) : 
                      $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                    ?>
                      <img
                        alt="<?php the_title_attribute(); ?>"
                        width="1600"
                        height="1600"
                        class="absolute inset-0 object-cover transition-transform duration-700 group-hover/postcard:scale-110"
                        loading="lazy"
                        src="<?php echo esc_url( $thumbnail_url ); ?>"
                      />
                    <?php endif; ?>
                    
                  </div>
                  <div class="p-10">
                    <h2 class="sm:min-h-[58px] text-xl text-orange sm:line-clamp-2"><?php the_title(); ?></h2>
                    <p class="mt-4 font-light line-clamp-3 sm:line-clamp-2 text-brand"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    <div class="h-4"></div>
                    <div class="text-base font-normal w-fit text-orange">
                      <div class="flex items-center">
                        Read more
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
                          <path
                            fill-rule="evenodd"
                            d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </div>
                      <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
                    </div>
                  </div>
                </div>
              </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </section>
      </div>
      <?php else : ?>
        <p>No posts found.</p>
      <?php endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
