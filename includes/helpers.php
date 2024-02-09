<?php

function dd( $value ) {
	var_dump( $value );
	die();
}

function ddd( $value ) {
	echo '<pre>';
	var_dump( $value );
	echo '</pre>';
	die();
}
