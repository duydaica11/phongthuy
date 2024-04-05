<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V14\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Maximize Clicks opt-in recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Recommendation.MaximizeClicksOptInRecommendation</code>
 */
class MaximizeClicksOptInRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The recommended new budget amount.
     * Only set if the current budget is too high.
     *
     * Generated from protobuf field <code>optional int64 recommended_budget_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_budget_amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $recommended_budget_amount_micros
     *           Output only. The recommended new budget amount.
     *           Only set if the current budget is too high.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The recommended new budget amount.
     * Only set if the current budget is too high.
     *
     * Generated from protobuf field <code>optional int64 recommended_budget_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRecommendedBudgetAmountMicros()
    {
        return isset($this->recommended_budget_amount_micros) ? $this->recommended_budget_amount_micros : 0;
    }

    public function hasRecommendedBudgetAmountMicros()
    {
        return isset($this->recommended_budget_amount_micros);
    }

    public function clearRecommendedBudgetAmountMicros()
    {
        unset($this->recommended_budget_amount_micros);
    }

    /**
     * Output only. The recommended new budget amount.
     * Only set if the current budget is too high.
     *
     * Generated from protobuf field <code>optional int64 recommended_budget_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRecommendedBudgetAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->recommended_budget_amount_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MaximizeClicksOptInRecommendation::class, \Google\Ads\GoogleAds\V14\Resources\Recommendation_MaximizeClicksOptInRecommendation::class);

