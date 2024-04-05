<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Address identifier of offline data.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.OfflineUserAddressInfo</code>
 */
class OfflineUserAddressInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * First name of the user, which is hashed as SHA-256 after normalized
     * (Lowercase all characters; Remove any extra spaces before, after, and in
     * between).
     *
     * Generated from protobuf field <code>optional string hashed_first_name = 7;</code>
     */
    protected $hashed_first_name = null;
    /**
     * Last name of the user, which is hashed as SHA-256 after normalized (lower
     * case only and no punctuation).
     *
     * Generated from protobuf field <code>optional string hashed_last_name = 8;</code>
     */
    protected $hashed_last_name = null;
    /**
     * City of the address. Only accepted for Store Sales and
     * ConversionAdjustmentUploadService.
     *
     * Generated from protobuf field <code>optional string city = 9;</code>
     */
    protected $city = null;
    /**
     * State code of the address. Only accepted for Store Sales and
     * ConversionAdjustmentUploadService.
     *
     * Generated from protobuf field <code>optional string state = 10;</code>
     */
    protected $state = null;
    /**
     * 2-letter country code in ISO-3166-1 alpha-2 of the user's address.
     *
     * Generated from protobuf field <code>optional string country_code = 11;</code>
     */
    protected $country_code = null;
    /**
     * Postal code of the user's address.
     *
     * Generated from protobuf field <code>optional string postal_code = 12;</code>
     */
    protected $postal_code = null;
    /**
     * The street address of the user hashed using SHA-256 hash function after
     * normalization (lower case only). Only accepted for
     * ConversionAdjustmentUploadService.
     *
     * Generated from protobuf field <code>optional string hashed_street_address = 13;</code>
     */
    protected $hashed_street_address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hashed_first_name
     *           First name of the user, which is hashed as SHA-256 after normalized
     *           (Lowercase all characters; Remove any extra spaces before, after, and in
     *           between).
     *     @type string $hashed_last_name
     *           Last name of the user, which is hashed as SHA-256 after normalized (lower
     *           case only and no punctuation).
     *     @type string $city
     *           City of the address. Only accepted for Store Sales and
     *           ConversionAdjustmentUploadService.
     *     @type string $state
     *           State code of the address. Only accepted for Store Sales and
     *           ConversionAdjustmentUploadService.
     *     @type string $country_code
     *           2-letter country code in ISO-3166-1 alpha-2 of the user's address.
     *     @type string $postal_code
     *           Postal code of the user's address.
     *     @type string $hashed_street_address
     *           The street address of the user hashed using SHA-256 hash function after
     *           normalization (lower case only). Only accepted for
     *           ConversionAdjustmentUploadService.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * First name of the user, which is hashed as SHA-256 after normalized
     * (Lowercase all characters; Remove any extra spaces before, after, and in
     * between).
     *
     * Generated from protobuf field <code>optional string hashed_first_name = 7;</code>
     * @return string
     */
    public function getHashedFirstName()
    {
        return isset($this->hashed_first_name) ? $this->hashed_first_name : '';
    }

    public function hasHashedFirstName()
    {
        return isset($this->hashed_first_name);
    }

    public function clearHashedFirstName()
    {
        unset($this->hashed_first_name);
    }

    /**
     * First name of the user, which is hashed as SHA-256 after normalized
     * (Lowercase all characters; Remove any extra spaces before, after, and in
     * between).
     *
     * Generated from protobuf field <code>optional string hashed_first_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setHashedFirstName($var)
    {
        GPBUtil::checkString($var, True);
        $this->hashed_first_name = $var;

        return $this;
    }

    /**
     * Last name of the user, which is hashed as SHA-256 after normalized (lower
     * case only and no punctuation).
     *
     * Generated from protobuf field <code>optional string hashed_last_name = 8;</code>
     * @return string
     */
    public function getHashedLastName()
    {
        return isset($this->hashed_last_name) ? $this->hashed_last_name : '';
    }

    public function hasHashedLastName()
    {
        return isset($this->hashed_last_name);
    }

    public function clearHashedLastName()
    {
        unset($this->hashed_last_name);
    }

    /**
     * Last name of the user, which is hashed as SHA-256 after normalized (lower
     * case only and no punctuation).
     *
     * Generated from protobuf field <code>optional string hashed_last_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setHashedLastName($var)
    {
        GPBUtil::checkString($var, True);
        $this->hashed_last_name = $var;

        return $this;
    }

    /**
     * City of the address. Only accepted for Store Sales and
     * ConversionAdjustmentUploadService.
     *
     * Generated from protobuf field <code>optional string city = 9;</code>
     * @return string
     */
    public function getCity()
    {
        return isset($this->city) ? $this->city : '';
    }

    public function hasCity()
    {
        return isset($this->city);
    }

    public function clearCity()
    {
        unset($this->city);
    }

    /**
     * City of the address. Only accepted for Store Sales and
     * ConversionAdjustmentUploadService.
     *
     * Generated from protobuf field <code>optional string city = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * State code of the address. Only accepted for Store Sales and
     * ConversionAdjustmentUploadService.
     *
     * Generated from protobuf field <code>optional string state = 10;</code>
     * @return string
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : '';
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * State code of the address. Only accepted for Store Sales and
     * ConversionAdjustmentUploadService.
     *
     * Generated from protobuf field <code>optional string state = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * 2-letter country code in ISO-3166-1 alpha-2 of the user's address.
     *
     * Generated from protobuf field <code>optional string country_code = 11;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return isset($this->country_code) ? $this->country_code : '';
    }

    public function hasCountryCode()
    {
        return isset($this->country_code);
    }

    public function clearCountryCode()
    {
        unset($this->country_code);
    }

    /**
     * 2-letter country code in ISO-3166-1 alpha-2 of the user's address.
     *
     * Generated from protobuf field <code>optional string country_code = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Postal code of the user's address.
     *
     * Generated from protobuf field <code>optional string postal_code = 12;</code>
     * @return string
     */
    public function getPostalCode()
    {
        return isset($this->postal_code) ? $this->postal_code : '';
    }

    public function hasPostalCode()
    {
        return isset($this->postal_code);
    }

    public function clearPostalCode()
    {
        unset($this->postal_code);
    }

    /**
     * Postal code of the user's address.
     *
     * Generated from protobuf field <code>optional string postal_code = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setPostalCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->postal_code = $var;

        return $this;
    }

    /**
     * The street address of the user hashed using SHA-256 hash function after
     * normalization (lower case only). Only accepted for
     * ConversionAdjustmentUploadService.
     *
     * Generated from protobuf field <code>optional string hashed_street_address = 13;</code>
     * @return string
     */
    public function getHashedStreetAddress()
    {
        return isset($this->hashed_street_address) ? $this->hashed_street_address : '';
    }

    public function hasHashedStreetAddress()
    {
        return isset($this->hashed_street_address);
    }

    public function clearHashedStreetAddress()
    {
        unset($this->hashed_street_address);
    }

    /**
     * The street address of the user hashed using SHA-256 hash function after
     * normalization (lower case only). Only accepted for
     * ConversionAdjustmentUploadService.
     *
     * Generated from protobuf field <code>optional string hashed_street_address = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setHashedStreetAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->hashed_street_address = $var;

        return $this;
    }

}

