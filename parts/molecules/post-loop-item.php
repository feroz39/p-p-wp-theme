<a class="group/postcard" title="Why WALE Matters When Selling Your Commercial Asset" href="<?php the_permalink(); ?>">
    <div class="overflow-hidden font-sans transition-all duration-300 rounded-lg group-hover/postcard:shadow-lg group bg-beige group-hover/postcard:-translate-y-1 group-hover/postcard:bg-darkbeige">
        <div class="relative overflow-hidden aspect-video">
        <?php if ( has_post_thumbnail() ) : 
            $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
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