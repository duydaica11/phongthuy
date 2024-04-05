<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/conversion_adjustment_upload_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information identifying a successfully processed ConversionAdjustment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.ConversionAdjustmentResult</code>
 */
class ConversionAdjustmentResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The gclid and conversion date time of the conversion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.services.GclidDateTimePair gclid_date_time_pair = 9;</code>
     */
    protected $gclid_date_time_pair = null;
    /**
     * The order ID of the conversion to be adjusted.
     *
     * Generated from protobuf field <code>string order_id = 10;</code>
     */
    protected $order_id = '';
    /**
     * Resource name of the conversion action associated with this conversion
     * adjustment.
     *
     * Generated from protobuf field <code>optional string conversion_action = 7;</code>
     */
    protected $conversion_action = null;
    /**
     * The date time at which the adjustment occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string adjustment_date_time = 8;</code>
     */
    protected $adjustment_date_time = null;
    /**
     * The adjustment type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentType adjustment_type = 5;</code>
     */
    protected $adjustment_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V14\Services\GclidDateTimePair $gclid_date_time_pair
     *           The gclid and conversion date time of the conversion.
     *     @type string $order_id
     *           The order ID of the conversion to be adjusted.
     *     @type string $conversion_action
     *           Resource name of the conversion action associated with this conversion
     *           adjustment.
     *     @type string $adjustment_date_time
     *           The date time at which the adjustment occurred. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *     @type int $adjustment_type
     *           The adjustment type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\ConversionAdjustmentUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * The gclid and conversion date time of the conversion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.services.GclidDateTimePair gclid_date_time_pair = 9;</code>
     * @return \Google\Ads\GoogleAds\V14\Services\GclidDateTimePair|null
     */
    public function getGclidDateTimePair()
    {
        return $this->gclid_date_time_pair;
    }

    public function hasGclidDateTimePair()
    {
        return isset($this->gclid_date_time_pair);
    }

    public function clearGclidDateTimePair()
    {
        unset($this->gclid_date_time_pair);
    }

    /**
     * The gclid and conversion date time of the conversion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.services.GclidDateTimePair gclid_date_time_pair = 9;</code>
     * @param \Google\Ads\GoogleAds\V14\Services\GclidDateTimePair $var
     * @return $this
     */
    public function setGclidDateTimePair($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Services\GclidDateTimePair::class);
        $this->gclid_date_time_pair = $var;

        return $this;
    }

    /**
     * The order ID of the conversion to be adjusted.
     *
     * Generated from protobuf field <code>string order_id = 10;</code>
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * The order ID of the conversion to be adjusted.
     *
     * Generated from protobuf field <code>string order_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_id = $var;

        return $this;
    }

    /**
     * Resource name of the conversion action associated with this conversion
     * adjustment.
     *
     * Generated from protobuf field <code>optional string conversion_action = 7;</code>
     * @return string
     */
    public function getConversionAction()
    {
        return isset($this->conversion_action) ? $this->conversion_action : '';
    }

    public function hasConversionAction()
    {
        return isset($this->conversion_action);
    }

    public function clearConversionAction()
    {
        unset($this->conversion_action);
    }

    /**
     * Resource name of the conversion action associated with this conversion
     * adjustment.
     *
     * Generated from protobuf field <code>optional string conversion_action = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setConversionAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_action = $var;

        return $this;
    }

    /**
     * The date time at which the adjustment occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string adjustment_date_time = 8;</code>
     * @return string
     */
    public function getAdjustmentDateTime()
    {
        return isset($this->adjustment_date_time) ? $this->adjustment_date_time : '';
    }

    public function hasAdjustmentDateTime()
    {
        return isset($this->adjustment_date_time);
    }

    public function clearAdjustmentDateTime()
    {
        unset($this->adjustment_date_time);
    }

    /**
     * The date time at which the adjustment occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string adjustment_date_time = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setAdjustmentDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->adjustment_date_time = $var;

        return $this;
    }

    /**
     * The adjustment type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentType adjustment_type = 5;</code>
     * @return int
     */
    public function getAdjustmentType()
    {
        return $this->adjustment_type;
    }

    /**
     * The adjustment type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentType adjustment_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAdjustmentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\ConversionAdjustmentTypeEnum\ConversionAdjustmentType::class);
        $this->adjustment_type = $var;

        return $this;
    }

}

