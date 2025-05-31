<?php
$dark  = $args['dark'] ?? [];
// echo '<pre>';
// var_dump($dark);
// echo '</pre>';
?>

<div class="items-center hidden space-x-12 transition-all duration-500 lg:flex ease group-hover/menu:text-brand group-[.menu-open]/header:text-brand <?php echo $dark ? ' text-white' : ''; ?>">
    <?php $menu_tree = pp_get_menu_tree('header-menu'); ?>
    <?php if (!empty($menu_tree)): ?>
    <?php foreach ($menu_tree as $item): ?>
    <?php
        // echo '<pre>';
        // var_dump($item);
        // echo '</pre>';
    ?>
    <?php
        $acf_group = isset($item['id']) ? get_field('drop_down', $item['id']) : null;
        $acf = [
        'title'    => $acf_group['title'] ?? '',
        'subtitle' => $acf_group['subtitle'] ?? '',
        'image'    => $acf_group['image'] ?? '',
        'link'     => $acf_group['link'] ?? '',
        'button'     => $acf_group['make_it_a_button'] ?? '',
        ];
    ?>
    <?php if (!empty($item['children'])): ?>
    <div class="text-base font-normal cursor-pointer menu-item">
        <div class="flex items-center space-x-2 peer dropdown-toggle">
        <?php echo esc_html($item['title']); ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2">
            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd"></path>
        </svg>
        </div>
        <?php get_template_part('parts/dropdown', null, ['dropdown_items' => $item['children'], 'dropdown_acf' => $acf]); ?>
    </div>
    <?php else: ?>
        <a class="text-base font-normal cursor-pointer <?php echo esc_attr($item['description']); ?>" target="<?php echo esc_attr($item['target']); ?>" href="<?php echo esc_attr($item['url']); ?>"><?php echo esc_html($item['title']); ?></a>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php endif; ?>
</div>