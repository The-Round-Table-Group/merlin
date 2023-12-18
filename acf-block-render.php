<?php
/**
*  This is the callback that renders the blocks created in [acf-block-functions.php].
*
* @param   array $block - The block settings and attributes.
* @param   string $content - The block content (empty string).
* @param   bool $is_preview - True during AJAX preview.
*/

function render_block_callback( $block, $content = '', $is_preview = false ) {
	$context = Timber::get_context();

	$context['block'] = $block;
	$context['fields'] = get_fields();
	$context['is_preview'] = $is_preview;

	// templates/blocks/acf/BLOCK.twig
	$template = 'templates/blocks/' . $block['name'] . '.twig';
	Timber::render( $template, $context );
}