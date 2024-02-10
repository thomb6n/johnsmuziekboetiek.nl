<?php
$layout_name = 'columns';

$layouts[$layout_name] = array(
	'order'        => 1,
	'key'          => 'layout_' . $layout_name,
	'name'         => $layout_name,
	'label'        => __('Columns', 'toms'),
	'display'      => 'block',
	'button_label' => __('Add new column', 'toms'),
	'sub_fields'   => array(
		array(
			'key'        => 'field_' . $layout_name . '_columns',
			'label'      => __('Columns', 'toms'),
			'name'       => $layout_name . '_columns',
			'type'       => 'repeater',
			'required'   => 1,
			'layout'     => 'block',
			'sub_fields' => array(
				array(
					'key'      => 'field_' . $layout_name . '_title',
					'label'    => __('Title', 'toms'),
					'name'     => $layout_name . '_title',
					'type'     => 'text',
					'required' => 1,
				),
				array(
					'key'      => 'field_' . $layout_name . '_content',
					'label'    => __('Content', 'toms'),
					'name'     => $layout_name . '_content',
					'type'     => 'textarea',
					'rows'     => 3,
					'required' => 1,
				),
				array(
					'key'      => 'field_' . $layout_name . '_color',
					'label'    => __('Color', 'toms'),
					'name'     => $layout_name . '_color',
					'type'     => 'radio',
					'choices'  => array(
						'yellow' => __('Yellow', 'toms'),
						'blue'   => __('Blue', 'toms'),
						'green' => __('Green', 'toms'),
					),
					'required' => 1,
				),
				array(
					'key'      => 'field_' . $layout_name . '_link',
					'label'    => __('Link', 'toms'),
					'name'     => $layout_name . '_link',
					'type'     => 'link',
				),
			),
		),
	),
);
