<?php
// Template for the kbtype taxonomy archive
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

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

$templates = ['pages/taxonomy-kbtype.twig'];
Timber::render( $templates, $context );