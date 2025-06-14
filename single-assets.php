<?php get_header(); ?>

<?php
global $post;

if ($post->post_parent) {
    // This is a child asset
	$acf_data = get_fields();
    get_template_part('parts/assets/child-asset', null, $acf_data);
    get_footer('cta');
} else {
    // This is a parent asset
	$acf_data = get_fields();
    get_template_part('parts/assets/parent-asset', null, $acf_data);
    get_footer();
}
?>
