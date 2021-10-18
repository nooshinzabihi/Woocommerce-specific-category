<?php
function add_category_sidebars() {
	$subcategories = get_categories('&child_of=1751&hide_empty'); 
	foreach ($subcategories as $subcategory) {
		register_sidebar( array(
			'name' => $subcategory->slug,
			'id' => $subcategory->category_nicename . '-sidebar',
			'description' => 'This is the ' . $subcategory->cat_name . ' widgetized area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		));
	}
}
add_action( 'widgets_init', 'add_category_sidebars' );