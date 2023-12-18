<?php
// Global Custom Post Type Controller
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;
the_post();

// only setup for single posts
if( is_singular() ) :
	if( $post->post_parent != 0 ) {
		$context['is_child'] = true;
	} else {
		$context['is_parent'] = true;
	}
endif;

$context['articles'] = Timber::get_posts([
    'post_type' => 'kbarticle',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
]);

$context['terms'] = Timber::get_terms(
    'kbtype',
    [
        'hide_empty' => false,
        'orderby' => 'name',
        'order' => 'ASC'
    ]
);

// attempt to render a corresponding view (.twig) file that matches any of the below patterns
Timber::render([
	'single-' . $post->ID . '.twig',
	'single-' . $post->post_type . '.twig',
	'single.twig'
], $context);