<?php
$items  = $args['dropdown_items'] ?? [];
$acf    = $args['dropdown_acf'] ?? [];
// echo '<pre>';
// var_dump($acf);
// echo '</pre>';
?>

<div class="dropdown-menu absolute top-12 left-0 w-full opacity-0 peer-[.is-open]:opacity-100 h-[0px] peer-[.is-open]:h-[280px] overflow-hidden">
  <div class="mt-16 inline-flex h-[224px] max-h-[224px] w-full bg-white px-12 pb-8">
    <div class="flex max-w-6xl mx-auto">

      <?php if (
        !empty($acf['title']) &&
        !empty($acf['subtitle']) &&
        !empty($acf['image']) &&
        !empty($acf['link'])
      ): ?>
        <div class="flex items-center shrink">
          <div class="flex-none w-48 h-48">
            <img
              alt="<?php echo esc_attr($acf['title']); ?>"
              width="192"
              height="192"
              class="object-cover w-full h-full rounded-lg"
              src="<?php echo esc_url(is_array($acf['image']) ? $acf['image']['url'] : $acf['image']); ?>"
            />
          </div>
          <div class="px-12">
            <p class="capitalize">
              <?php echo esc_html($acf['subtitle']); ?>
            </p>
            <p class="mt-4 font-serif text-2xl font-medium text-orange">
              <?php echo esc_html($acf['title']); ?>
            </p>
            <div class="h-4"></div>
            <a 
            title="Learn More" 
            class="text-base font-normal text-brand" 
            href="<?php echo esc_url($acf['link']['url']); ?>"
            >
              <div class="flex items-center space-x-2 group/link">
                Learn More
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/link:translate-x-2">
                  <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                </svg>
              </div>
            </a>
          </div>
        </div>
      <?php endif; ?>

      <!-- Submenu items (always shown) -->
      <div class="flex w-[500px] flex-col justify-center space-y-2 border-l pl-12">
        <?php foreach ($items as $child): ?>
          <a 
          title="<?php echo esc_attr($child['title']); ?>" 
          class="text-base font-normal text-brand" 
          href="<?php echo esc_url($child['url']); ?>"
          >
            <div class="flex items-center space-x-2 group/link">
              <?php echo esc_html($child['title']); ?>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-2 transition duration-300 ease-in-out group-hover/link:translate-x-2">
                <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
              </svg>
            </div>
          </a>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>
