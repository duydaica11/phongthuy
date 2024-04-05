<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/asset_types.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Lead Form asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.LeadFormAsset</code>
 */
class LeadFormAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the business being advertised.
     *
     * Generated from protobuf field <code>string business_name = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $business_name = '';
    /**
     * Required. Pre-defined display text that encourages user to expand the form.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LeadFormCallToActionTypeEnum.LeadFormCallToActionType call_to_action_type = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $call_to_action_type = 0;
    /**
     * Required. Text giving a clear value proposition of what users expect once
     * they expand the form.
     *
     * Generated from protobuf field <code>string call_to_action_description = 18 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $call_to_action_description = '';
    /**
     * Required. Headline of the expanded form to describe what the form is asking
     * for or facilitating.
     *
     * Generated from protobuf field <code>string headline = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $headline = '';
    /**
     * Required. Detailed description of the expanded form to describe what the
     * form is asking for or facilitating.
     *
     * Generated from protobuf field <code>string description = 13 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $description = '';
    /**
     * Required. Link to a page describing the policy on how the collected data is
     * handled by the advertiser/business.
     *
     * Generated from protobuf field <code>string privacy_policy_url = 14 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $privacy_policy_url = '';
    /**
     * Headline of text shown after form submission that describes how the
     * advertiser will follow up with the user.
     *
     * Generated from protobuf field <code>optional string post_submit_headline = 15;</code>
     */
    protected $post_submit_headline = null;
    /**
     * Detailed description shown after form submission that describes how the
     * advertiser will follow up with the user.
     *
     * Generated from protobuf field <code>optional string post_submit_description = 16;</code>
     */
    protected $post_submit_description = null;
    /**
     * Ordered list of input fields. This field can be updated by reordering
     * questions, but not by adding or removing questions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LeadFormField fields = 8;</code>
     */
    private $fields;
    /**
     * Ordered list of custom question fields. This field is subject to a limit of
     * 5 qualifying questions per form.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LeadFormCustomQuestionField custom_question_fields = 23;</code>
     */
    private $custom_question_fields;
    /**
     * Configured methods for collected lead data to be delivered to advertiser.
     * Only one method typed as WebhookDelivery can be configured.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LeadFormDeliveryMethod delivery_methods = 9;</code>
     */
    private $delivery_methods;
    /**
     * Pre-defined display text that encourages user action after the form is
     * submitted.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LeadFormPostSubmitCallToActionTypeEnum.LeadFormPostSubmitCallToActionType post_submit_call_to_action_type = 19;</code>
     */
    protected $post_submit_call_to_action_type = 0;
    /**
     * Asset resource name of the background image. The minimum size is 600x314
     * and the aspect ratio must be 1.91:1 (+-1%).
     *
     * Generated from protobuf field <code>optional string background_image_asset = 20;</code>
     */
    protected $background_image_asset = null;
    /**
     * Chosen intent for the lead form, for example, more volume or more
     * qualified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LeadFormDesiredIntentEnum.LeadFormDesiredIntent desired_intent = 21;</code>
     */
    protected $desired_intent = 0;
    /**
     * Custom disclosure shown along with Google disclaimer on the lead form.
     * Accessible to allowed customers only.
     *
     * Generated from protobuf field <code>optional string custom_disclosure = 22;</code>
     */
    protected $custom_disclosure = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $business_name
     *           Required. The name of the business being advertised.
     *     @type int $call_to_action_type
     *           Required. Pre-defined display text that encourages user to expand the form.
     *     @type string $call_to_action_description
     *           Required. Text giving a clear value proposition of what users expect once
     *           they expand the form.
     *     @type string $headline
     *           Required. Headline of the expanded form to describe what the form is asking
     *           for or facilitating.
     *     @type string $description
     *           Required. Detailed description of the expanded form to describe what the
     *           form is asking for or facilitating.
     *     @type string $privacy_policy_url
     *           Required. Link to a page describing the policy on how the collected data is
     *           handled by the advertiser/business.
     *     @type string $post_submit_headline
     *           Headline of text shown after form submission that describes how the
     *           advertiser will follow up with the user.
     *     @type string $post_submit_description
     *           Detailed description shown after form submission that describes how the
     *           advertiser will follow up with the user.
     *     @type array<\Google\Ads\GoogleAds\V14\Common\LeadFormField>|\Google\Protobuf\Internal\RepeatedField $fields
     *           Ordered list of input fields. This field can be updated by reordering
     *           questions, but not by adding or removing questions.
     *     @type array<\Google\Ads\GoogleAds\V14\Common\LeadFormCustomQuestionField>|\Google\Protobuf\Internal\RepeatedField $custom_question_fields
     *           Ordered list of custom question fields. This field is subject to a limit of
     *           5 qualifying questions per form.
     *     @type array<\Google\Ads\GoogleAds\V14\Common\LeadFormDeliveryMethod>|\Google\Protobuf\Internal\RepeatedField $delivery_methods
     *           Configured methods for collected lead data to be delivered to advertiser.
     *           Only one method typed as WebhookDelivery can be configured.
     *     @type int $post_submit_call_to_action_type
     *           Pre-defined display text that encourages user action after the form is
     *           submitted.
     *     @type string $background_image_asset
     *           Asset resource name of the background image. The minimum size is 600x314
     *           and the aspect ratio must be 1.91:1 (+-1%).
     *     @type int $desired_intent
     *           Chosen intent for the lead form, for example, more volume or more
     *           qualified.
     *     @type string $custom_disclosure
     *           Custom disclosure shown along with Google disclaimer on the lead form.
     *           Accessible to allowed customers only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the business being advertised.
     *
     * Generated from protobuf field <code>string business_name = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * Required. The name of the business being advertised.
     *
     * Generated from protobuf field <code>string business_name = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_name = $var;

        return $this;
    }

    /**
     * Required. Pre-defined display text that encourages user to expand the form.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LeadFormCallToActionTypeEnum.LeadFormCallToActionType call_to_action_type = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getCallToActionType()
    {
        return $this->call_to_action_type;
    }

    /**
     * Required. Pre-defined display text that encourages user to expand the form.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LeadFormCallToActionTypeEnum.LeadFormCallToActionType call_to_action_type = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setCallToActionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\LeadFormCallToActionTypeEnum\LeadFormCallToActionType::class);
        $this->call_to_action_type = $var;

        return $this;
    }

    /**
     * Required. Text giving a clear value proposition of what users expect once
     * they expand the form.
     *
     * Generated from protobuf field <code>string call_to_action_description = 18 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCallToActionDescription()
    {
        return $this->call_to_action_description;
    }

    /**
     * Required. Text giving a clear value proposition of what users expect once
     * they expand the form.
     *
     * Generated from protobuf field <code>string call_to_action_description = 18 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCallToActionDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_to_action_description = $var;

        return $this;
    }

    /**
     * Required. Headline of the expanded form to describe what the form is asking
     * for or facilitating.
     *
     * Generated from protobuf field <code>string headline = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Required. Headline of the expanded form to describe what the form is asking
     * for or facilitating.
     *
     * Generated from protobuf field <code>string headline = 12 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Detailed description of the expanded form to describe what the
     * form is asking for or facilitating.
     *
     * Generated from protobuf field <code>string description = 13 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Required. Detailed description of the expanded form to describe what the
     * form is asking for or facilitating.
     *
     * Generated from protobuf field <code>string description = 13 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. Link to a page describing the policy on how the collected data is
     * handled by the advertiser/business.
     *
     * Generated from protobuf field <code>string privacy_policy_url = 14 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->privacy_policy_url;
    }

    /**
     * Required. Link to a page describing the policy on how the collected data is
     * handled by the advertiser/business.
     *
     * Generated from protobuf field <code>string privacy_policy_url = 14 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPrivacyPolicyUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->privacy_policy_url = $var;

        return $this;
    }

    /**
     * Headline of text shown after form submission that describes how the
     * advertiser will follow up with the user.
     *
     * Generated from protobuf field <code>optional string post_submit_headline = 15;</code>
     * @return string
     */
    public function getPostSubmitHeadline()
    {
        return isset($this->post_submit_headline) ? $this->post_submit_headline : '';
    }

    public function hasPostSubmitHeadline()
    {
        return isset($this->post_submit_headline);
    }

    public function clearPostSubmitHeadline()
    {
        unset($this->post_submit_headline);
    }

    /**
     * Headline of text shown after form submission that describes how the
     * advertiser will follow up with the user.
     *
     * Generated from protobuf field <code>optional string post_submit_headline = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setPostSubmitHeadline($var)
    {
        GPBUtil::checkString($var, True);
        $this->post_submit_headline = $var;

        return $this;
    }

    /**
     * Detailed description shown after form submission that describes how the
     * advertiser will follow up with the user.
     *
     * Generated from protobuf field <code>optional string post_submit_description = 16;</code>
     * @return string
     */
    public function getPostSubmitDescription()
    {
        return isset($this->post_submit_description) ? $this->post_submit_description : '';
    }

    public function hasPostSubmitDescription()
    {
        return isset($this->post_submit_description);
    }

    public function clearPostSubmitDescription()
    {
        unset($this->post_submit_description);
    }

    /**
     * Detailed description shown after form submission that describes how the
     * advertiser will follow up with the user.
     *
     * Generated from protobuf field <code>optional string post_submit_description = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setPostSubmitDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->post_submit_description = $var;

        return $this;
    }

    /**
     * Ordered list of input fields. This field can be updated by reordering
     * questions, but not by adding or removing questions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LeadFormField fields = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Ordered list of input fields. This field can be updated by reordering
     * questions, but not by adding or removing questions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LeadFormField fields = 8;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\LeadFormField>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\LeadFormField::class);
        $this->fields = $arr;

        return $this;
    }

    /**
     * Ordered list of custom question fields. This field is subject to a limit of
     * 5 qualifying questions per form.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LeadFormCustomQuestionField custom_question_fields = 23;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomQuestionFields()
    {
        return $this->custom_question_fields;
    }

    /**
     * Ordered list of custom question fields. This field is subject to a limit of
     * 5 qualifying questions per form.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LeadFormCustomQuestionField custom_question_fields = 23;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\LeadFormCustomQuestionField>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomQuestionFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\LeadFormCustomQuestionField::class);
        $this->custom_question_fields = $arr;

        return $this;
    }

    /**
     * Configured methods for collected lead data to be delivered to advertiser.
     * Only one method typed as WebhookDelivery can be configured.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LeadFormDeliveryMethod delivery_methods = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeliveryMethods()
    {
        return $this->delivery_methods;
    }

    /**
     * Configured methods for collected lead data to be delivered to advertiser.
     * Only one method typed as WebhookDelivery can be configured.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LeadFormDeliveryMethod delivery_methods = 9;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\LeadFormDeliveryMethod>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeliveryMethods($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\LeadFormDeliveryMethod::class);
        $this->delivery_methods = $arr;

        return $this;
    }

    /**
     * Pre-defined display text that encourages user action after the form is
     * submitted.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LeadFormPostSubmitCallToActionTypeEnum.LeadFormPostSubmitCallToActionType post_submit_call_to_action_type = 19;</code>
     * @return int
     */
    public function getPostSubmitCallToActionType()
    {
        return $this->post_submit_call_to_action_type;
    }

    /**
     * Pre-defined display text that encourages user action after the form is
     * submitted.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LeadFormPostSubmitCallToActionTypeEnum.LeadFormPostSubmitCallToActionType post_submit_call_to_action_type = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setPostSubmitCallToActionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\LeadFormPostSubmitCallToActionTypeEnum\LeadFormPostSubmitCallToActionType::class);
        $this->post_submit_call_to_action_type = $var;

        return $this;
    }

    /**
     * Asset resource name of the background image. The minimum size is 600x314
     * and the aspect ratio must be 1.91:1 (+-1%).
     *
     * Generated from protobuf field <code>optional string background_image_asset = 20;</code>
     * @return string
     */
    public function getBackgroundImageAsset()
    {
        return isset($this->background_image_asset) ? $this->background_image_asset : '';
    }

    public function hasBackgroundImageAsset()
    {
        return isset($this->background_image_asset);
    }

    public function clearBackgroundImageAsset()
    {
        unset($this->background_image_asset);
    }

    /**
     * Asset resource name of the background image. The minimum size is 600x314
     * and the aspect ratio must be 1.91:1 (+-1%).
     *
     * Generated from protobuf field <code>optional string background_image_asset = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setBackgroundImageAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->background_image_asset = $var;

        return $this;
    }

    /**
     * Chosen intent for the lead form, for example, more volume or more
     * qualified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LeadFormDesiredIntentEnum.LeadFormDesiredIntent desired_intent = 21;</code>
     * @return int
     */
    public function getDesiredIntent()
    {
        return $this->desired_intent;
    }

    /**
     * Chosen intent for the lead form, for example, more volume or more
     * qualified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LeadFormDesiredIntentEnum.LeadFormDesiredIntent desired_intent = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setDesiredIntent($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\LeadFormDesiredIntentEnum\LeadFormDesiredIntent::class);
        $this->desired_intent = $var;

        return $this;
    }

    /**
     * Custom disclosure shown along with Google disclaimer on the lead form.
     * Accessible to allowed customers only.
     *
     * Generated from protobuf field <code>optional string custom_disclosure = 22;</code>
     * @return string
     */
    public function getCustomDisclosure()
    {
        return isset($this->custom_disclosure) ? $this->custom_disclosure : '';
    }

    public function hasCustomDisclosure()
    {
        return isset($this->custom_disclosure);
    }

    public function clearCustomDisclosure()
    {
        unset($this->custom_disclosure);
    }

    /**
     * Custom disclosure shown along with Google disclaimer on the lead form.
     * Accessible to allowed customers only.
     *
     * Generated from protobuf field <code>optional string custom_disclosure = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomDisclosure($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_disclosure = $var;

        return $this;
    }

}

