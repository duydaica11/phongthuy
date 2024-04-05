<?php
declare( strict_types=1 );

namespace Automattic\WooCommerce\GoogleListingsAndAds\Product\Attributes;

use Automattic\WooCommerce\GoogleListingsAndAds\Admin\Product\Attributes\Input\BrandInput;
use Automattic\WooCommerce\GoogleListingsAndAds\Product\AttributeMapping\Traits\IsFieldTrait;

defined( 'ABSPATH' ) || exit;

/**
 * Class Brand
 *
 * @package Automattic\WooCommerce\GoogleListingsAndAds\Product\Attributes
 */
class Brand extends AbstractAttribute implements WithMappingInterface {

	use IsFieldTrait;

	/**
	 * Returns the attribute ID.
	 *
	 * Must be the same as a Google product's property name to be set automatically.
	 *
	 * @return string
	 *
	 * @see \Google\Service\ShoppingContent\Product for the list of properties.
	 */
	public static function get_id(): string {
		return 'brand';
	}

	/**
	 * Return an array of WooCommerce product types that this attribute can be applied to.
	 *
	 * @return array
	 */
	public static function get_applicable_product_types(): array {
		return [ 'simple', 'variable' ];
	}

	/**
	 * Return the attribute's input class. Must be an instance of `AttributeInputInterface`.
	 *
	 * @return string
	 *
	 * @see AttributeInputInterface
	 *
	 * @since 1.5.0
	 */
	public static function get_input_type(): string {
		return BrandInput::class;
	}

	/**
	 * Returns the attribute name
	 *
	 * @return string
	 */
	public static function get_name(): string {
		return __( 'Brand', 'google-listings-and-ads' );
	}
}
