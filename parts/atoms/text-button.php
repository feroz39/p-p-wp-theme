<?php
    $text = $args['text'] ?? "Read More";
    $slug = $args['slug'] ?? [];
    $textColor = $args['textColor'] ?? "text-orange";
    $title = $args['title'] ?? [];
    $target = $args['target'] ?? "";
    $groupClass = $args['groupClass'] ?? "postcard";
?>


<?php  if ($slug) :?>
    <a
        href="<?= esc_attr( $slug ); ?>"
        title="<?= esc_attr( $title ? $title : $text ); ?>"
        class="text-base font-normal flex w-fit <?= esc_attr($textColor ? $textColor : ""); ?>" 
        target="<?= esc_attr( $target); ?>"
    >
        <div class="group/link">
            <div class="flex items-center space-x-2">
            <?= esc_html($text ); ?>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/link:translate-x-2">
                <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
            </svg>
            </div>
            <span class="block max-w-0 group-hover/link:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
        </div>
    </a>
<?php else: ?>
    <div class="text-base font-normal w-fit <?= esc_attr($textColor ? $textColor : ""); ?>">
        <div class="flex items-center">
        <?= esc_html($text ); ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/postcard:translate-x-2">
            <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
        </svg>
        </div>
        <span class="block max-w-0 group-hover/postcard:max-w-full transition-all duration-500 h-[1px] bg-orange"></span>
    </div>
<?php endif; ?>