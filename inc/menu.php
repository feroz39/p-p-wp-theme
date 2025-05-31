<?php
function pp_get_menu_tree($location) {
	$locations = get_nav_menu_locations();
	if (!isset($locations[$location])) return [];

	$menu = wp_get_nav_menu_object($locations[$location]);
	$items = wp_get_nav_menu_items($menu->term_id);
	if (!$items) return [];

	$structured = [];

	// Index items by ID for easier parent-child mapping
	$item_map = [];
	foreach ($items as $item) {
		$item_map[$item->ID] = [
			'id'     => $item->ID,
			'title'  => $item->title,
			'url'    => $item->url,
			'target'    => $item->target,
			'parent' => $item->menu_item_parent,
			'acf'    => function_exists('get_fields') ? get_fields($item) : [],
			'classes'=> $item->classes,
			'description'=> $item->description,
			'children' => [],
		];
	}

	// Build nested tree
	foreach ($item_map as $id => &$item) {
		if ($item['parent'] && isset($item_map[$item['parent']])) {
			$item_map[$item['parent']]['children'][] = &$item;
		} else {
			$structured[] = &$item;
		}
	}
	unset($item); // Unset reference

	return $structured;
}
