<?php
defined( 'ABSPATH' ) || die;

/**
 * The select tree field.
 */
class RWMB_Select_Tree_Field extends RWMB_Select_Advanced_Field {
	/**
	 * Get field HTML.
	 *
	 * @param mixed $meta  Meta value.
	 * @param array $field Field parameters.
	 * @return string
	 */
	public static function html( $meta, $field ) {
		$options = self::transform_options( $field['options'] );
		$walker  = new RWMB_Walker_Select_Tree( $field, $meta );
		return $options ? $walker->walk( $options ) : '';
	}

	public static function admin_enqueue_scripts() {
		parent::admin_enqueue_scripts();
		wp_enqueue_style( 'rwmb-select-tree', RWMB_CSS_URL . 'select-tree.css', [ 'rwmb-select' ], RWMB_VER );
		wp_style_add_data( 'rwmb-select-tree', 'path', RWMB_CSS_DIR . 'select-tree.css' );
		wp_enqueue_script( 'rwmb-select-tree', RWMB_JS_URL . 'select-tree.js', [ 'rwmb-select' ], RWMB_VER, true );
	}

	/**
	 * Normalize parameters for field.
	 *
	 * @param array $field Field parameters.
	 * @return array
	 */
	public static function normalize( $field ) {
		$field['multiple'] = true;
		$field['size']     = 0;
		$field             = parent::normalize( $field );

		return $field;
	}

	/**
	 * Get the attributes for a field.
	 *
	 * @param array $field Field parameters.
	 * @param mixed $value Meta value.
	 *
	 * @return array
	 */
	public static function get_attributes( $field, $value = null ) {
		$attributes             = parent::get_attributes( $field, $value );
		$attributes['multiple'] = false;
		$attributes['id']       = false;

		return $attributes;
	}
}
