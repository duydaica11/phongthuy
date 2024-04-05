<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of In-feed video ad format.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.InFeedVideoAdInfo</code>
 */
class InFeedVideoAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>string headline = 1;</code>
     */
    protected $headline = '';
    /**
     * First text line for the ad.
     *
     * Generated from protobuf field <code>string description1 = 2;</code>
     */
    protected $description1 = '';
    /**
     * Second text line for the ad.
     *
     * Generated from protobuf field <code>string description2 = 3;</code>
     */
    protected $description2 = '';
    /**
     * Video thumbnail image to use.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.VideoThumbnailEnum.VideoThumbnail thumbnail = 4;</code>
     */
    protected $thumbnail = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $headline
     *           The headline of the ad.
     *     @type string $description1
     *           First text line for the ad.
     *     @type string $description2
     *           Second text line for the ad.
     *     @type int $thumbnail
     *           Video thumbnail image to use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>string headline = 1;</code>
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>string headline = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline = $var;

        return $this;
    }

    /**
     * First text line for the ad.
     *
     * Generated from protobuf field <code>string description1 = 2;</code>
     * @return string
     */
    public function getDescription1()
    {
        return $this->description1;
    }

    /**
     * First text line for the ad.
     *
     * Generated from protobuf field <code>string description1 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription1($var)
    {
        GPBUtil::checkString($var, True);
        $this->description1 = $var;

        return $this;
    }

    /**
     * Second text line for the ad.
     *
     * Generated from protobuf field <code>string description2 = 3;</code>
     * @return string
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * Second text line for the ad.
     *
     * Generated from protobuf field <code>string description2 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription2($var)
    {
        GPBUtil::checkString($var, True);
        $this->description2 = $var;

        return $this;
    }

    /**
     * Video thumbnail image to use.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.VideoThumbnailEnum.VideoThumbnail thumbnail = 4;</code>
     * @return int
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Video thumbnail image to use.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.VideoThumbnailEnum.VideoThumbnail thumbnail = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setThumbnail($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\VideoThumbnailEnum\VideoThumbnail::class);
        $this->thumbnail = $var;

        return $this;
    }

}

