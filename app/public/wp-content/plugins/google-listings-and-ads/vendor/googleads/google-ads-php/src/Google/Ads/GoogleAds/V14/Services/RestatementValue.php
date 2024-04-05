<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/conversion_adjustment_upload_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information needed to restate a conversion's value.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.RestatementValue</code>
 */
class RestatementValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The restated conversion value. This is the value of the conversion after
     * restatement. For example, to change the value of a conversion from 100 to
     * 70, an adjusted value of 70 should be reported.
     * NOTE: If you want to upload a second restatement with a different adjusted
     * value, it must have a new, more recent, adjustment occurrence time.
     * Otherwise, it will be treated as a duplicate of the previous restatement
     * and ignored.
     *
     * Generated from protobuf field <code>optional double adjusted_value = 3;</code>
     */
    protected $adjusted_value = null;
    /**
     * The currency of the restated value. If not provided, then the default
     * currency from the conversion action is used, and if that is not set then
     * the account currency is used. This is the ISO 4217 3-character currency
     * code for example, USD or EUR.
     *
     * Generated from protobuf field <code>optional string currency_code = 4;</code>
     */
    protected $currency_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $adjusted_value
     *           The restated conversion value. This is the value of the conversion after
     *           restatement. For example, to change the value of a conversion from 100 to
     *           70, an adjusted value of 70 should be reported.
     *           NOTE: If you want to upload a second restatement with a different adjusted
     *           value, it must have a new, more recent, adjustment occurrence time.
     *           Otherwise, it will be treated as a duplicate of the previous restatement
     *           and ignored.
     *     @type string $currency_code
     *           The currency of the restated value. If not provided, then the default
     *           currency from the conversion action is used, and if that is not set then
     *           the account currency is used. This is the ISO 4217 3-character currency
     *           code for example, USD or EUR.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\ConversionAdjustmentUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * The restated conversion value. This is the value of the conversion after
     * restatement. For example, to change the value of a conversion from 100 to
     * 70, an adjusted value of 70 should be reported.
     * NOTE: If you want to upload a second restatement with a different adjusted
     * value, it must have a new, more recent, adjustment occurrence time.
     * Otherwise, it will be treated as a duplicate of the previous restatement
     * and ignored.
     *
     * Generated from protobuf field <code>optional double adjusted_value = 3;</code>
     * @return float
     */
    public function getAdjustedValue()
    {
        return isset($this->adjusted_value) ? $this->adjusted_value : 0.0;
    }

    public function hasAdjustedValue()
    {
        return isset($this->adjusted_value);
    }

    public function clearAdjustedValue()
    {
        unset($this->adjusted_value);
    }

    /**
     * The restated conversion value. This is the value of the conversion after
     * restatement. For example, to change the value of a conversion from 100 to
     * 70, an adjusted value of 70 should be reported.
     * NOTE: If you want to upload a second restatement with a different adjusted
     * value, it must have a new, more recent, adjustment occurrence time.
     * Otherwise, it will be treated as a duplicate of the previous restatement
     * and ignored.
     *
     * Generated from protobuf field <code>optional double adjusted_value = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAdjustedValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->adjusted_value = $var;

        return $this;
    }

    /**
     * The currency of the restated value. If not provided, then the default
     * currency from the conversion action is used, and if that is not set then
     * the account currency is used. This is the ISO 4217 3-character currency
     * code for example, USD or EUR.
     *
     * Generated from protobuf field <code>optional string currency_code = 4;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return isset($this->currency_code) ? $this->currency_code : '';
    }

    public function hasCurrencyCode()
    {
        return isset($this->currency_code);
    }

    public function clearCurrencyCode()
    {
        unset($this->currency_code);
    }

    /**
     * The currency of the restated value. If not provided, then the default
     * currency from the conversion action is used, and if that is not set then
     * the account currency is used. This is the ISO 4217 3-character currency
     * code for example, USD or EUR.
     *
     * Generated from protobuf field <code>optional string currency_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

}

