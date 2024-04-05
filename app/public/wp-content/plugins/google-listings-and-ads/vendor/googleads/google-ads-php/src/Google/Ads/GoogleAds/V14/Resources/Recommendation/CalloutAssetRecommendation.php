<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V14\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The callout asset recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Recommendation.CalloutAssetRecommendation</code>
 */
class CalloutAssetRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. New callout extension assets recommended at the campaign
     * level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.Asset recommended_campaign_callout_assets = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $recommended_campaign_callout_assets;
    /**
     * Output only. New callout extension assets recommended at the customer
     * level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.Asset recommended_customer_callout_assets = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $recommended_customer_callout_assets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V14\Resources\Asset>|\Google\Protobuf\Internal\RepeatedField $recommended_campaign_callout_assets
     *           Output only. New callout extension assets recommended at the campaign
     *           level.
     *     @type array<\Google\Ads\GoogleAds\V14\Resources\Asset>|\Google\Protobuf\Internal\RepeatedField $recommended_customer_callout_assets
     *           Output only. New callout extension assets recommended at the customer
     *           level.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. New callout extension assets recommended at the campaign
     * level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.Asset recommended_campaign_callout_assets = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecommendedCampaignCalloutAssets()
    {
        return $this->recommended_campaign_callout_assets;
    }

    /**
     * Output only. New callout extension assets recommended at the campaign
     * level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.Asset recommended_campaign_callout_assets = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V14\Resources\Asset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecommendedCampaignCalloutAssets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Resources\Asset::class);
        $this->recommended_campaign_callout_assets = $arr;

        return $this;
    }

    /**
     * Output only. New callout extension assets recommended at the customer
     * level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.Asset recommended_customer_callout_assets = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecommendedCustomerCalloutAssets()
    {
        return $this->recommended_customer_callout_assets;
    }

    /**
     * Output only. New callout extension assets recommended at the customer
     * level.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.resources.Asset recommended_customer_callout_assets = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V14\Resources\Asset>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecommendedCustomerCalloutAssets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Resources\Asset::class);
        $this->recommended_customer_callout_assets = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CalloutAssetRecommendation::class, \Google\Ads\GoogleAds\V14\Resources\Recommendation_CalloutAssetRecommendation::class);

