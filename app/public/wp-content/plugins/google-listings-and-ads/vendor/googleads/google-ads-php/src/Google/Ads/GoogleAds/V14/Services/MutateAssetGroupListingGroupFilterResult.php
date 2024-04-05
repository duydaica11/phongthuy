<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/asset_group_listing_group_filter_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the asset group listing group filter mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.MutateAssetGroupListingGroupFilterResult</code>
 */
class MutateAssetGroupListingGroupFilterResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated AssetGroupListingGroupFilter with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.AssetGroupListingGroupFilter asset_group_listing_group_filter = 2;</code>
     */
    protected $asset_group_listing_group_filter = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V14\Resources\AssetGroupListingGroupFilter $asset_group_listing_group_filter
     *           The mutated AssetGroupListingGroupFilter with only mutable fields after
     *           mutate. The field will only be returned when response_content_type is set
     *           to "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\AssetGroupListingGroupFilterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated AssetGroupListingGroupFilter with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.AssetGroupListingGroupFilter asset_group_listing_group_filter = 2;</code>
     * @return \Google\Ads\GoogleAds\V14\Resources\AssetGroupListingGroupFilter|null
     */
    public function getAssetGroupListingGroupFilter()
    {
        return $this->asset_group_listing_group_filter;
    }

    public function hasAssetGroupListingGroupFilter()
    {
        return isset($this->asset_group_listing_group_filter);
    }

    public function clearAssetGroupListingGroupFilter()
    {
        unset($this->asset_group_listing_group_filter);
    }

    /**
     * The mutated AssetGroupListingGroupFilter with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.AssetGroupListingGroupFilter asset_group_listing_group_filter = 2;</code>
     * @param \Google\Ads\GoogleAds\V14\Resources\AssetGroupListingGroupFilter $var
     * @return $this
     */
    public function setAssetGroupListingGroupFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Resources\AssetGroupListingGroupFilter::class);
        $this->asset_group_listing_group_filter = $var;

        return $this;
    }

}

