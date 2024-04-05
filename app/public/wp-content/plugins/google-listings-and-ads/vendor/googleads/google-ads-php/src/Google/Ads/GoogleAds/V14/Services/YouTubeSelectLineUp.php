<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Plannable YouTube Select Lineup for product targeting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.YouTubeSelectLineUp</code>
 */
class YouTubeSelectLineUp extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the YouTube Select Lineup.
     *
     * Generated from protobuf field <code>int64 lineup_id = 1;</code>
     */
    protected $lineup_id = 0;
    /**
     * The unique name of the YouTube Select Lineup.
     *
     * Generated from protobuf field <code>string lineup_name = 2;</code>
     */
    protected $lineup_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $lineup_id
     *           The ID of the YouTube Select Lineup.
     *     @type string $lineup_name
     *           The unique name of the YouTube Select Lineup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the YouTube Select Lineup.
     *
     * Generated from protobuf field <code>int64 lineup_id = 1;</code>
     * @return int|string
     */
    public function getLineupId()
    {
        return $this->lineup_id;
    }

    /**
     * The ID of the YouTube Select Lineup.
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

    /**
     * The unique name of the YouTube Select Lineup.
     *
     * Generated from protobuf field <code>string lineup_name = 2;</code>
     * @return string
     */
    public function getLineupName()
    {
        return $this->lineup_name;
    }

    /**
     * The unique name of the YouTube Select Lineup.
     *
     * Generated from protobuf field <code>string lineup_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLineupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->lineup_name = $var;

        return $this;
    }

}

