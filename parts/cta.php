<section id="cta" class="relative px-6 mt-40 md:px-12 group">
    <div class="flex flex-col max-w-screen-xl mx-auto space-y-4 md:flex-row md:space-y-0">
        <a id="cta-blue" class="relative z-10 mx-auto flex flex-col rounded-lg bg-brand p-6 md:items-start md:p-10 w-full md:w-1/2 h-auto md:h-[250px] justify-start md:justify-end transition-all ease-in-out duration-500 mr-4 group-[.blue-active]:!w-full group-[.blue-active]:md:!justify-between group-[.blue-active]:!flex-grow group-[.orange-active]:!flex-shrink" href="/contact">
            <div class="overflow-hidden transition-opacity duration-300 ease-in-out md:opacity-0 md:h-40 group-[.blue-active]:md:opacity-100 group-[.blue-active]:delay-300">
                <p class="text-white">Want to invest?</p>
                <p class="mt-5 font-serif text-3xl font-medium text-white md:text-4xl">Start your journey alongside us today.</p>
            </div>
            <div class="relative mt-4 transition-transform duration-200 ease-linear delay-150 md:absolute md:top-10 md:left-10 md:mt-0 group-[.blue-active]:md:translate-y-36">
                <?php get_template_part( 'parts/atoms/text-button', null, ['text'=>"Contact Us", 'title'=>"Contact Us", 'textColor'=>'text-white text-xl'] ) ?>
            </div>
        </a>
        <a id="cta-orange" class="relative z-10 mx-auto flex max-w-screen-xl flex-col rounded-lg bg-orange p-6 md:items-start md:p-10 w-full md:w-1/2 h-auto md:h-[250px] md:justify-end transition-all ease-in-out duration-500 md:ml-4 group-[.blue-active]:!flex-shrink group-[.orange-active]:!w-full group-[.orange-active]:md:!justify-between group-[.orange-active]:!flex-grow" href="/subscribe-to-investment-updates">
            <div class="h-auto overflow-hidden transition-opacity duration-300 ease-in-out md:opacity-0 md:h-40 delay-0 group-[.orange-active]:md:opacity-100 group-[.orange-active]:delay-300">
                <p class="text-white">Keep in touch</p>
                <p class="mt-4 font-serif text-3xl font-medium text-white md:text-4xl">Be the first to know about our next investment opportunity.</p>
            </div>
            <div class="relative mt-4 transition-transform duration-200 ease-linear delay-150 md:absolute md:top-10 md:left-10 md:mt-0 group-[.orange-active]:md:translate-y-36">
                <?php get_template_part( 'parts/atoms/text-button', null, ['text'=>"Sign up", 'title'=>"Sign up", 'textColor'=>'text-white text-xl'] ) ?>
            </div>
        </a>
    </div>
    <div class="absolute inset-x-0 bottom-0 z-0 h-1/2 bg-beige"></div>
</section>