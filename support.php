<?php
// Template Name: Support
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;
$templates = ['pages/support.twig'];
Timber::render( $templates, $context );