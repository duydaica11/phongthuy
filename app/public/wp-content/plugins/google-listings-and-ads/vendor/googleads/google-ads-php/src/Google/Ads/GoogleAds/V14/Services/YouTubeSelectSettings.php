<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request settings for YouTube Select Lineups
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.YouTubeSelectSettings</code>
 */
class YouTubeSelectSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Lineup for YouTube Select Targeting.
     *
     * Generated from protobuf field <code>int64 lineup_id = 1;</code>
     */
    protected $lineup_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $lineup_id
     *           Lineup for YouTube Select Targeting.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Lineup for YouTube Select Targeting.
     *
     * Generated from protobuf field <code>int64 lineup_id = 1;</code>
     * @return int|string
     */
    public function getLineupId()
    {
        return $this->lineup_id;
    }

    /**
     * Lineup for YouTube Select Targeting.
     *
     * Generated from protobuf field <code>int64 lineup_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLineupId($var)
    {
        GPBUtil::checkInt64($var);
        $this->lineup_id = $var;

        return $this;
    }

}

