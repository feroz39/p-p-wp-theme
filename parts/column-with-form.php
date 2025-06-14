<?php if (get_row_layout() === '2_column_with_form'): ?>
<!-- ACF: 2 Column With Form -->
 <?php
    $left_column = get_sub_field('left_column');
    $right_column = get_sub_field('right_column');
    // echo '<pre>';
    // var_dump($left_column['title']);
    // echo '</pre>';
?>
<section class="px-6 bg-white border-b border-b-neutral-200 py-36 md:px-12">
    <div class="mx-auto max-w-7xl">
        <div class="grid gap-12 md:grid-cols-2">
            <div>
                <?php if($left_column['title']): ?>
                <h1 class="font-sans text-lg font-medium text-orange">
                    <?= esc_html( $left_column['title'] ); ?>
                </h1><?php endif; ?>

                <?php if($left_column['heading']): ?>
                <h2 class="mt-4 font-serif text-3xl font-medium text-brand">
                    <?= esc_html( $left_column['heading'] ); ?>
                </h2>
                <div class="mt-4 space-y-4"><?php endif; ?>

                <?php if($left_column['heading']): ?>
                <div
                    class="prose prose-lg text-brand prose-p:font-light prose-img:rounded-md prose-p:text-brand prose-a:no-underline hover:prose-a:underline prose-a:text-orange prose-strong:text-brand prose-h2:font-serif prose-h2:text-brand prose-h3:text-xl prose-h3:font-normal prose-h2:font-medium prose-h3:text-orange"
                >
                    <?= $left_column['content']; ?>
                </div><?php endif; ?>
            </div>
        </div>
        <div class="mt-24 md:mt-0">
            <div class="pb-12 space-y-12">
                <?php if($right_column['top_content']): ?>
                <div
                    class="prose prose-lg text-brand prose-p:font-light prose-img:rounded-md prose-p:text-brand prose-a:no-underline hover:prose-a:underline prose-a:text-orange prose-strong:text-brand prose-h2:font-serif prose-h2:text-brand prose-h3:text-xl prose-h3:font-normal prose-h2:font-medium prose-h3:text-orange"
                >
                    <?= $right_column['top_content']; ?>
                </div><?php endif; ?>
            </div>
            <div class="section-form">
                <?php if($right_column['gf_id']): ?>
                    <?= do_shortcode('[gravityform id="'.$right_column['gf_id'].'" title="false" description="false" ajax="true"]'); ?>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </div>
</section>

<?php endif; ?>