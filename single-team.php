<?php get_header(); ?>

<main>
  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'parts/team-hero', null, [] ); ?>

		<section class="relative z-10 px-6 pt-24 bg-beige md:px-12 pb-36">
			<div class="grid max-w-screen-xl grid-cols-1 mx-auto md:grid-cols-12">
				<div class="order-last col-span-full md:order-first md:col-span-2">
				<div class="font-sans text-sm">
					<p class="text-sm text-brand">
						<?php the_excerpt(  ); ?>
					</p>
					<?php $linkedin = get_field('linkedin_url'); ?>
					<?php if($linkedin): ?>
					<a 
						href="<?= esc_attr( $linkedin ) ?>"
						target="_blank"
						rel="noopener"
						aria-label="Visit <?php the_title(); ?>'s LinkedIn profile"
                  		title={team.pageTeam.linkedinUrl}
					>
						LinkedIn
					</a><?php endif; ?>
				</div>
				</div>
				<div class="col-span-full md:col-span-6 md:col-start-4">
					<?php get_template_part( 'parts/post-body', null, ['content'=> get_the_content() ] ); ?>
				</div>
			</div>
		</section>


	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>