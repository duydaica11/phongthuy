<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/feed.proto

namespace Google\Ads\GoogleAds\V14\Resources\Feed;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data used to configure a location feed populated from Business Profile.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.Feed.PlacesLocationFeedData</code>
 */
class PlacesLocationFeedData extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Required authentication token (from OAuth API) for the email.
     * This field can only be specified in a create request. All its subfields
     * are not selectable.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.Feed.PlacesLocationFeedData.OAuthInfo oauth_info = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $oauth_info = null;
    /**
     * Email address of a Business Profile or email address of a
     * manager of the Business Profile. Required.
     *
     * Generated from protobuf field <code>optional string email_address = 7;</code>
     */
    protected $email_address = null;
    /**
     * Plus page ID of the managed business whose locations should be used. If
     * this field is not set, then all businesses accessible by the user
     * (specified by email_address) are used.
     * This field is mutate-only and is not selectable.
     *
     * Generated from protobuf field <code>string business_account_id = 8;</code>
     */
    protected $business_account_id = '';
    /**
     * Used to filter Business Profile listings by business name. If
     * business_name_filter is set, only listings with a matching business name
     * are candidates to be sync'd into FeedItems.
     *
     * Generated from protobuf field <code>optional string business_name_filter = 9;</code>
     */
    protected $business_name_filter = null;
    /**
     * Used to filter Business Profile listings by categories. If entries
     * exist in category_filters, only listings that belong to any of the
     * categories are candidates to be sync'd into FeedItems. If no entries
     * exist in category_filters, then all listings are candidates for syncing.
     *
     * Generated from protobuf field <code>repeated string category_filters = 11;</code>
     */
    private $category_filters;
    /**
     * Used to filter Business Profile listings by labels. If entries exist in
     * label_filters, only listings that has any of the labels set are
     * candidates to be synchronized into FeedItems. If no entries exist in
     * label_filters, then all listings are candidates for syncing.
     *
     * Generated from protobuf field <code>repeated string label_filters = 12;</code>
     */
    private $label_filters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V14\Resources\Feed\PlacesLocationFeedData\OAuthInfo $oauth_info
     *           Immutable. Required authentication token (from OAuth API) for the email.
     *           This field can only be specified in a create request. All its subfields
     *           are not selectable.
     *     @type string $email_address
     *           Email address of a Business Profile or email address of a
     *           manager of the Business Profile. Required.
     *     @type string $business_account_id
     *           Plus page ID of the managed business whose locations should be used. If
     *           this field is not set, then all businesses accessible by the user
     *           (specified by email_address) are used.
     *           This field is mutate-only and is not selectable.
     *     @type string $business_name_filter
     *           Used to filter Business Profile listings by business name. If
     *           business_name_filter is set, only listings with a matching business name
     *           are candidates to be sync'd into FeedItems.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $category_filters
     *           Used to filter Business Profile listings by categories. If entries
     *           exist in category_filters, only listings that belong to any of the
     *           categories are candidates to be sync'd into FeedItems. If no entries
     *           exist in category_filters, then all listings are candidates for syncing.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $label_filters
     *           Used to filter Business Profile listings by labels. If entries exist in
     *           label_filters, only listings that has any of the labels set are
     *           candidates to be synchronized into FeedItems. If no entries exist in
     *           label_filters, then all listings are candidates for syncing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\Feed::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Required authentication token (from OAuth API) for the email.
     * This field can only be specified in a create request. All its subfields
     * are not selectable.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.Feed.PlacesLocationFeedData.OAuthInfo oauth_info = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V14\Resources\Feed\PlacesLocationFeedData\OAuthInfo|null
     */
    public function getOauthInfo()
    {
        return $this->oauth_info;
    }

    public function hasOauthInfo()
    {
        return isset($this->oauth_info);
    }

    public function clearOauthInfo()
    {
        unset($this->oauth_info);
    }

    /**
     * Immutable. Required authentication token (from OAuth API) for the email.
     * This field can only be specified in a create request. All its subfields
     * are not selectable.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.resources.Feed.PlacesLocationFeedData.OAuthInfo oauth_info = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V14\Resources\Feed\PlacesLocationFeedData\OAuthInfo $var
     * @return $this
     */
    public function setOauthInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Resources\Feed\PlacesLocationFeedData\OAuthInfo::class);
        $this->oauth_info = $var;

        return $this;
    }

    /**
     * Email address of a Business Profile or email address of a
     * manager of the Business Profile. Required.
     *
     * Generated from protobuf field <code>optional string email_address = 7;</code>
     * @return string
     */
    public function getEmailAddress()
    {
        return isset($this->email_address) ? $this->email_address : '';
    }

    public function hasEmailAddress()
    {
        return isset($this->email_address);
    }

    public function clearEmailAddress()
    {
        unset($this->email_address);
    }

    /**
     * Email address of a Business Profile or email address of a
     * manager of the Business Profile. Required.
     *
     * Generated from protobuf field <code>optional string email_address = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEmailAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_address = $var;

        return $this;
    }

    /**
     * Plus page ID of the managed business whose locations should be used. If
     * this field is not set, then all businesses accessible by the user
     * (specified by email_address) are used.
     * This field is mutate-only and is not selectable.
     *
     * Generated from protobuf field <code>string business_account_id = 8;</code>
     * @return string
     */
    public function getBusinessAccountId()
    {
        return $this->business_account_id;
    }

    /**
     * Plus page ID of the managed business whose locations should be used. If
     * this field is not set, then all businesses accessible by the user
     * (specified by email_address) are used.
     * This field is mutate-only and is not selectable.
     *
     * Generated from protobuf field <code>string business_account_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_account_id = $var;

        return $this;
    }

    /**
     * Used to filter Business Profile listings by business name. If
     * business_name_filter is set, only listings with a matching business name
     * are candidates to be sync'd into FeedItems.
     *
     * Generated from protobuf field <code>optional string business_name_filter = 9;</code>
     * @return string
     */
    public function getBusinessNameFilter()
    {
        return isset($this->business_name_filter) ? $this->business_name_filter : '';
    }

    public function hasBusinessNameFilter()
    {
        return isset($this->business_name_filter);
    }

    public function clearBusinessNameFilter()
    {
        unset($this->business_name_filter);
    }

    /**
     * Used to filter Business Profile listings by business name. If
     * business_name_filter is set, only listings with a matching business name
     * are candidates to be sync'd into FeedItems.
     *
     * Generated from protobuf field <code>optional string business_name_filter = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessNameFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_name_filter = $var;

        return $this;
    }

    /**
     * Used to filter Business Profile listings by categories. If entries
     * exist in category_filters, only listings that belong to any of the
     * categories are candidates to be sync'd into FeedItems. If no entries
     * exist in category_filters, then all listings are candidates for syncing.
     *
     * Generated from protobuf field <code>repeated string category_filters = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategoryFilters()
    {
        return $this->category_filters;
    }

    /**
     * Used to filter Business Profile listings by categories. If entries
     * exist in category_filters, only listings that belong to any of the
     * categories are candidates to be sync'd into FeedItems. If no entries
     * exist in category_filters, then all listings are candidates for syncing.
     *
     * Generated from protobuf field <code>repeated string category_filters = 11;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategoryFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->category_filters = $arr;

        return $this;
    }

    /**
     * Used to filter Business Profile listings by labels. If entries exist in
     * label_filters, only listings that has any of the labels set are
     * candidates to be synchronized into FeedItems. If no entries exist in
     * label_filters, then all listings are candidates for syncing.
     *
     * Generated from protobuf field <code>repeated string label_filters = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabelFilters()
    {
        return $this->label_filters;
    }

    /**
     * Used to filter Business Profile listings by labels. If entries exist in
     * label_filters, only listings that has any of the labels set are
     * candidates to be synchronized into FeedItems. If no entries exist in
     * label_filters, then all listings are candidates for syncing.
     *
     * Generated from protobuf field <code>repeated string label_filters = 12;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabelFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->label_filters = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlacesLocationFeedData::class, \Google\Ads\GoogleAds\V14\Resources\Feed_PlacesLocationFeedData::class);

