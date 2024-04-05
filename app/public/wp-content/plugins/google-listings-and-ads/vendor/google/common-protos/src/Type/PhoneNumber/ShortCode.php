<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/phone_number.proto

namespace Google\Type\PhoneNumber;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An object representing a short code, which is a phone number that is
 * typically much shorter than regular phone numbers and can be used to
 * address messages in MMS and SMS systems, as well as for abbreviated dialing
 * (e.g. "Text 611 to see how many minutes you have remaining on your plan.").
 * Short codes are restricted to a region and are not internationally
 * dialable, which means the same short code can exist in different regions,
 * with different usage and pricing, even if those regions share the same
 * country calling code (e.g. US and CA).
 *
 * Generated from protobuf message <code>google.type.PhoneNumber.ShortCode</code>
 */
class ShortCode extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The BCP-47 region code of the location where calls to this
     * short code can be made, such as "US" and "BB".
     * Reference(s):
     *  - http://www.unicode.org/reports/tr35/#unicode_region_subtag
     *
     * Generated from protobuf field <code>string region_code = 1;</code>
     */
    protected $region_code = '';
    /**
     * Required. The short code digits, without a leading plus ('+') or country
     * calling code, e.g. "611".
     *
     * Generated from protobuf field <code>string number = 2;</code>
     */
    protected $number = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $region_code
     *           Required. The BCP-47 region code of the location where calls to this
     *           short code can be made, such as "US" and "BB".
     *           Reference(s):
     *            - http://www.unicode.org/reports/tr35/#unicode_region_subtag
     *     @type string $number
     *           Required. The short code digits, without a leading plus ('+') or country
     *           calling code, e.g. "611".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Type\PhoneNumber::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The BCP-47 region code of the location where calls to this
     * short code can be made, such as "US" and "BB".
     * Reference(s):
     *  - http://www.unicode.org/reports/tr35/#unicode_region_subtag
     *
     * Generated from protobuf field <code>string region_code = 1;</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Required. The BCP-47 region code of the location where calls to this
     * short code can be made, such as "US" and "BB".
     * Reference(s):
     *  - http://www.unicode.org/reports/tr35/#unicode_region_subtag
     *
     * Generated from protobuf field <code>string region_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

    /**
     * Required. The short code digits, without a leading plus ('+') or country
     * calling code, e.g. "611".
     *
     * Generated from protobuf field <code>string number = 2;</code>
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Required. The short code digits, without a leading plus ('+') or country
     * calling code, e.g. "611".
     *
     * Generated from protobuf field <code>string number = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->number = $var;

        return $this;
    }

}


