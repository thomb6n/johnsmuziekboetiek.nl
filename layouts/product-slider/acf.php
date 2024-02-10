<?php
$layout_name = 'product-slider';

$layouts[$layout_name] = array(
	'order'      => 1,
	'key'        => 'layout_' . $layout_name,
	'name'       => $layout_name,
	'label'      => __('Product Slider', 'toms'),
	'display'    => 'block',
	'sub_fields' => array(
		array(
			'key'          => 'field_' . $layout_name . '_title',
			'label'        => __('Title', 'toms'),
			'name'         => $layout_name . '_title',
			'type'         => 'text',
			'required'     => 1,
		),
		array(
			'key'     => 'field_' . $layout_name . '_show',
			'label'   => __('Show', 'toms'),
			'name'    => $layout_name . '_show',
			'type'    => 'radio',
			'choices' => array(
				'latest'     => __('Latest', 'toms'),
				'handpicked' => __('Handpicked', 'toms'),
				'category'   => __('Category', 'toms'),
			),
			'required'      => 1,
			'default_value' => 'latest',
		),
	),
);
