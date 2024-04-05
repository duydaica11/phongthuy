<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/criteria.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A listing scope criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.ListingScopeInfo</code>
 */
class ListingScopeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Scope of the campaign criterion.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.ListingDimensionInfo dimensions = 2;</code>
     */
    private $dimensions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V14\Common\ListingDimensionInfo>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           Scope of the campaign criterion.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Scope of the campaign criterion.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.ListingDimensionInfo dimensions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Scope of the campaign criterion.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.ListingDimensionInfo dimensions = 2;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\ListingDimensionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\ListingDimensionInfo::class);
        $this->dimensions = $arr;

        return $this;
    }

}

