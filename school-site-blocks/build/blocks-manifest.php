<?php
// This file is generated. Do not modify it manually.
return array(
	'aos-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'school-site-blocks/aos-block',
		'version' => '0.1.0',
		'title' => 'Animate on Scroll Block',
		'category' => 'design',
		'icon' => 'block-default',
		'description' => 'Animate in contents on scroll.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'aos-block',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'attributes' => array(
			'effect' => array(
				'type' => 'string',
				'default' => 'fade-up'
			)
		)
	)
);
