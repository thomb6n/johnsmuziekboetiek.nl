<?php

class Toms_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"submenu\" role=\"menu\" aria-expanded=\"false\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$after = property_exists( $args, 'link_after' ) ? $args->link_after : '';

		if ( $depth > 0 || ! $this->has_children ) {
			$args->link_after = '';
		}

		parent::start_el( $output, $item, $depth, $args, $id );

		$args->link_after = $after;
	}

	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent</ul>\n";
	}
}
