<?php if (get_row_layout() === '2_body_column'): ?>
<!-- ACF: 2 Body Column -->
 <?php
    $left_content = get_sub_field('left_content');
    $right_content = get_sub_field('right_content');
    // echo '<pre>';
    // var_dump($left_content);
    // echo '</pre>';
?>
<section class="px-6 bg-white border-b border-b-neutral-200 py-36 md:px-12" id="body-column-2">
    <div class="mx-auto max-w-7xl">
        <div class="grid md:grid-cols-2">
            <div class="md:pr-32">
                <?php if($left_content): ?>
                    <?php get_template_part( 'parts/post-body', null, ['content'=>$left_content] ); ?>
                <?php endif; ?>
            </div>
            <div class="grid grid-cols-1 gap-8 mx-auto mt-24 max-w-7xl md:mt-0">
                <?php if($right_content): ?>
                    <?php get_template_part( 'parts/post-body', null, ['content'=>$right_content] ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>