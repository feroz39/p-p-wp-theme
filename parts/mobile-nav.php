<nav class="absolute inset-0 z-40 block -translate-x-[100%] opacity-0 bg-brand lg:hidden group-[.mobile-menu-open]/header:opacity-100 group-[.mobile-menu-open]/header:translate-[0%] duration-300 ease-[cubic-bezier(0.68,-0.55,0.27,1.55)]">
	<div class="p-6 mt-36">
		<?php $menu_tree = pp_get_menu_tree('sidebar-menu'); ?>
    <?php if (!empty($menu_tree)): ?>
		<ul class="flex flex-col items-start right grow">
			<?php foreach ($menu_tree as $item): ?>
			<?php
				$acf_group = isset($item['id']) ? get_field('drop_down', $item['id']) : null;
				$acf = [
				'title'    => $acf_group['title'] ?? '',
				'subtitle' => $acf_group['subtitle'] ?? '',
				'image'    => $acf_group['image'] ?? '',
				'link'     => $acf_group['link'] ?? '',
				'button'   => $acf_group['make_it_a_button'] ?? '',
				];
			?>
			<?php if (!empty($item['children'])): ?>
			<li class="relative flex flex-col w-full py-5 cursor-pointer m-dropdown-toggle group/mmenu">
				<div class="flex flex-row items-center justify-between">
					<div class="font-sans text-lg text-orange">
						<?php echo esc_html($item['title']); ?>
					</div>
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						aria-hidden="true"
						data-slot="icon"
						class="w-4 h-4 text-white transition-transform duration-200 ease-linear rotate-0 group-[.is-open]/mmenu:rotate-90" >
						<path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"></path>
					</svg>
				</div>
				<ul class="mt-0 opacity-0 -translate-[100%] group-[.is-open]/mmenu:opacity-100 group-[.is-open]/mmenu:translate-[0%] h-0 group-[.is-open]/mmenu:h-auto group-[.is-open]/mmenu:mt-4 duration-0 ease-[cubic-bezier(0.68,-0.55,0.27,1.55)] transition-all origin-top">
						<?php foreach($item['children'] as $index => $child): ?>
						<li class="py-2">
							<a 
							title="<?php echo esc_attr($child['title']); ?>" 
							class="text-base font-normal text-white" 
							href="<?php echo esc_url($child['url']); ?>"
							>
								<?php echo esc_html($child['title']); ?>
							</a>
						</li>
						<?php endforeach; ?>
				</ul>
			</li>
			<?php else: ?>
				
			<li class="relative flex flex-col w-full py-5 cursor-pointer group">
				<a class="font-sans text-lg text-orange" target="<?php echo esc_attr($item['target']); ?>" href="<?php echo esc_attr($item['url']); ?>">
					<?php echo esc_html($item['title']); ?>
				</a>
			</li>
			<?php endif; ?>
		<?php endforeach; ?>
		</ul>
    <?php endif; ?>
	</div>
</nav>