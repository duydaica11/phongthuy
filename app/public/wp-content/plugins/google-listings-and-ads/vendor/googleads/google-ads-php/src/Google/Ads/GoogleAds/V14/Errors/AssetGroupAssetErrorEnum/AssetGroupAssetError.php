<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/asset_group_asset_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\AssetGroupAssetErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible asset group asset errors.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.AssetGroupAssetErrorEnum.AssetGroupAssetError</code>
 */
class AssetGroupAssetError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Cannot add duplicated asset group asset.
     *
     * Generated from protobuf enum <code>DUPLICATE_RESOURCE = 2;</code>
     */
    const DUPLICATE_RESOURCE = 2;
    /**
     * Expandable tags are not allowed in description assets.
     *
     * Generated from protobuf enum <code>EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION = 3;</code>
     */
    const EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION = 3;
    /**
     * Ad customizers are not supported in assetgroup's text assets.
     *
     * Generated from protobuf enum <code>AD_CUSTOMIZER_NOT_SUPPORTED = 4;</code>
     */
    const AD_CUSTOMIZER_NOT_SUPPORTED = 4;
    /**
     * Cannot add a HotelPropertyAsset to an AssetGroup that isn't linked
     * to the parent campaign's hotel_property_asset_set field.
     *
     * Generated from protobuf enum <code>HOTEL_PROPERTY_ASSET_NOT_LINKED_TO_CAMPAIGN = 5;</code>
     */
    const HOTEL_PROPERTY_ASSET_NOT_LINKED_TO_CAMPAIGN = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DUPLICATE_RESOURCE => 'DUPLICATE_RESOURCE',
        self::EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION => 'EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION',
        self::AD_CUSTOMIZER_NOT_SUPPORTED => 'AD_CUSTOMIZER_NOT_SUPPORTED',
        self::HOTEL_PROPERTY_ASSET_NOT_LINKED_TO_CAMPAIGN => 'HOTEL_PROPERTY_ASSET_NOT_LINKED_TO_CAMPAIGN',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetGroupAssetError::class, \Google\Ads\GoogleAds\V14\Errors\AssetGroupAssetErrorEnum_AssetGroupAssetError::class);

