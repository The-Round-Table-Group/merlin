<?php
// This functions file is for all custom blocks added via ACF
// Reference: https://www.advancedcustomfields.com/resources/acf_register_block_type/

if( function_exists('acf_register_block_type') ) :
	include 'acf-block-render.php'; // pass-off to let Timber render the blocks

	/** Blocks **/
	$info_bar = [
		'name' => 'info-bar',
		'title' => __( 'Colored Info Bar', 'mkb' ),
		'description' => __( 'Creates an info bar with a blue/yellow/red tint for informational messages.', 'mkb' ),
		'render_callback' => 'render_block_callback',
		'category' => 'kb-blocks',
		'align' => 'center',
		'icon' => 'info',
		'mode' => 'auto',
		'supports' => [ 'mode' => true ],
		'keywords' => [ 'important', 'info', 'message', 'blue', 'yellow', 'red', 'color', 'bar' ]
	];
	acf_register_block_type( $info_bar );
endif;