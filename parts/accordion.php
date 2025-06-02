<?php if (get_row_layout() === 'accordion'): ?>
<!-- ACF: Accodion -->

<?php
    $list = get_sub_field('list');
    $bg = get_sub_field('background_color');
?>

<?php 
// echo '<pre>';
// var_dump($list);
// echo '</pre>';
?>

<div id="motion-section">
    <div class="px-6 md:px-12 <?= $bg == 'beige' ? 'bg-beige' : 'bg-white'; ?>">
        <?php if( have_rows('list') ): ?>
        <div class="max-w-screen-xl py-24 mx-auto sm:py-32 lg:py-40">
            <div class="max-w-4xl divide-y divide-gray-900/10">
                <dl id="accordion-container" class="mt-10 space-y-6 divide-y divide-gray-900/10">
                    <?php while( have_rows('list') ): the_row(); 
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                    ?>
                    <div class="pb-6">
                        <dt>
                            <button class="flex items-start justify-between w-full text-left cursor-pointer accordion-toggle text-orange" type="button" aria-expanded="false">
                                <span class="text-lg font-normal leading-7">
                                    <?= $title ?>
                                </span>
                                <span class="flex items-center ml-6 h-7">
                                    <svg class="block w-6 h-6 icon-plus" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                                    </svg>
                                    <svg class="hidden w-6 h-6 icon-minus" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd class="hidden mt-6 accordion-content">
                            <div class="prose prose-lg text-brand marker:text-brand">
                                <?= $text; ?>
                            </div>
                        </dd>

                    </div>
                    <?php endwhile; ?>
                </dl>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const buttons = document.querySelectorAll('.accordion-toggle');

                        buttons.forEach(button => {
                            button.addEventListener('click', function () {
                                const dd = this.closest('dt').nextElementSibling;
                                const expanded = this.getAttribute('aria-expanded') === 'true';

                                // Toggle this one
                                dd.classList.toggle('hidden');
                                this.setAttribute('aria-expanded', !expanded);

                                // Toggle icons
                                const iconPlus = this.querySelector('.icon-plus');
                                const iconMinus = this.querySelector('.icon-minus');

                                if (expanded) {
                                    iconPlus.classList.remove('hidden');
                                    iconMinus.classList.add('hidden');
                                } else {
                                    iconPlus.classList.add('hidden');
                                    iconMinus.classList.remove('hidden');
                                }
                            });
                        });
                    });
                </script>

            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
