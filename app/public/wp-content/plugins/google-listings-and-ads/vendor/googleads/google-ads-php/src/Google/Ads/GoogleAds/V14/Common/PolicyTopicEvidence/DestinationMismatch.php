<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/policy.proto

namespace Google\Ads\GoogleAds\V14\Common\PolicyTopicEvidence;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evidence of mismatches between the URLs of a resource.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.PolicyTopicEvidence.DestinationMismatch</code>
 */
class DestinationMismatch extends \Google\Protobuf\Internal\Message
{
    /**
     * The set of URLs that did not match each other.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.enums.PolicyTopicEvidenceDestinationMismatchUrlTypeEnum.PolicyTopicEvidenceDestinationMismatchUrlType url_types = 1;</code>
     */
    private $url_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $url_types
     *           The set of URLs that did not match each other.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * The set of URLs that did not match each other.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.enums.PolicyTopicEvidenceDestinationMismatchUrlTypeEnum.PolicyTopicEvidenceDestinationMismatchUrlType url_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlTypes()
    {
        return $this->url_types;
    }

    /**
     * The set of URLs that did not match each other.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.enums.PolicyTopicEvidenceDestinationMismatchUrlTypeEnum.PolicyTopicEvidenceDestinationMismatchUrlType url_types = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V14\Enums\PolicyTopicEvidenceDestinationMismatchUrlTypeEnum\PolicyTopicEvidenceDestinationMismatchUrlType::class);
        $this->url_types = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DestinationMismatch::class, \Google\Ads\GoogleAds\V14\Common\PolicyTopicEvidence_DestinationMismatch::class);

