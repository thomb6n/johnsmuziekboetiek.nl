<?php
$layout_name = 'columns';

$layouts[ $layout_name ] = array(
	'order'      => 1,
	'key'        => 'layout_' . $layout_name,
	'name'       => $layout_name,
	'label'      => __( 'Columns', 'toms' ),
	'display'    => 'block',
	'sub_fields' => array(
		array(
			'key'        => 'field_' . $layout_name . '_columns',
			'label'      => __( 'Columns', 'toms' ),
			'name'       => $layout_name . '_columns',
			'type'       => 'repeater',
			'required'   => 1,
			'sub_fields' => array(
				array(
					'key'      => 'field_' . $layout_name . '_column',
					'label'    => __( 'Column', 'toms' ),
					'name'     => $layout_name . '_column',
					'type'     => 'wysiwyg',
					'required' => 1,
				),
			),
		),
	),
);
