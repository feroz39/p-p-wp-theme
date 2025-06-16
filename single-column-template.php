<?php 
/* Template Name: Single Column Template */ 
?>

<?php get_header('dark'); ?>

<div class="min-h-screen">
    <div style="opacity: 1;">
        <main id="...slug">

        <?php  while (have_posts()) : the_post(); ?>
        
        <?php get_template_part( 'parts/single-column-hero', null, null ); ?>
        
        <section class="px-8 pt-24">
            <div class="max-w-screen-md mx-auto">
                <div
                    class="prose prose-lg text-brand prose-p:font-light prose-img:rounded-md prose-p:text-brand prose-a:no-underline hover:prose-a:underline prose-a:text-orange prose-strong:text-brand prose-h2:font-serif prose-h2:text-brand prose-h3:text-xl prose-h3:font-medium prose-h2:font-medium prose-h3:text-orange prose-h2:mt-6 prose-h3:font-sans prose-strong:font-medium prose-ul:font-sans prose-ul:font-light prose-p:font-sans prose-h4:text-brand"
                >
                    <?php the_content( ); ?>
                </div>
            </div>
        </section>
        
        <?php endwhile; ?>

        </main>
    </div>
</div>

<?php get_footer('cta'); ?>