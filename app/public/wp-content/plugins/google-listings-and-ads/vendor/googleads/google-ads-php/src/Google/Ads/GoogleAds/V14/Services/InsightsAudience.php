<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of users, defined by various characteristics, for which insights can
 * be requested in AudienceInsightsService.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.InsightsAudience</code>
 */
class InsightsAudience extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The countries for the audience.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LocationInfo country_locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $country_locations;
    /**
     * Sub-country geographic location attributes.  If present, each of these
     * must be contained in one of the countries in this audience.  If absent, the
     * audience is geographically to the country_locations and no further.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LocationInfo sub_country_locations = 2;</code>
     */
    private $sub_country_locations;
    /**
     * Gender for the audience.  If absent, the audience does not restrict by
     * gender.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.GenderInfo gender = 3;</code>
     */
    protected $gender = null;
    /**
     * Age ranges for the audience.  If absent, the audience represents all people
     * over 18 that match the other attributes.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.AgeRangeInfo age_ranges = 4;</code>
     */
    private $age_ranges;
    /**
     * Parental status for the audience.  If absent, the audience does not
     * restrict by parental status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.ParentalStatusInfo parental_status = 5;</code>
     */
    protected $parental_status = null;
    /**
     * Household income percentile ranges for the audience.  If absent, the
     * audience does not restrict by household income range.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.IncomeRangeInfo income_ranges = 6;</code>
     */
    private $income_ranges;
    /**
     * Dynamic lineups representing the YouTube content viewed by the audience.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.services.AudienceInsightsDynamicLineup dynamic_lineups = 7;</code>
     */
    private $dynamic_lineups;
    /**
     * A combination of entity, category and user interest attributes defining the
     * audience. The combination has a logical AND-of-ORs structure: Attributes
     * within each InsightsAudienceAttributeGroup are combined with OR, and
     * the combinations themselves are combined together with AND.  For example,
     * the expression (Entity OR Affinity) AND (In-Market OR Category) can be
     * formed using two InsightsAudienceAttributeGroups with two Attributes
     * each.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.services.InsightsAudienceAttributeGroup topic_audience_combinations = 8;</code>
     */
    private $topic_audience_combinations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V14\Common\LocationInfo>|\Google\Protobuf\Internal\RepeatedField $country_locations
     *           Required. The countries for the audience.
     *     @type array<\Google\Ads\GoogleAds\V14\Common\LocationInfo>|\Google\Protobuf\Internal\RepeatedField $sub_country_locations
     *           Sub-country geographic location attributes.  If present, each of these
     *           must be contained in one of the countries in this audience.  If absent, the
     *           audience is geographically to the country_locations and no further.
     *     @type \Google\Ads\GoogleAds\V14\Common\GenderInfo $gender
     *           Gender for the audience.  If absent, the audience does not restrict by
     *           gender.
     *     @type array<\Google\Ads\GoogleAds\V14\Common\AgeRangeInfo>|\Google\Protobuf\Internal\RepeatedField $age_ranges
     *           Age ranges for the audience.  If absent, the audience represents all people
     *           over 18 that match the other attributes.
     *     @type \Google\Ads\GoogleAds\V14\Common\ParentalStatusInfo $parental_status
     *           Parental status for the audience.  If absent, the audience does not
     *           restrict by parental status.
     *     @type array<\Google\Ads\GoogleAds\V14\Common\IncomeRangeInfo>|\Google\Protobuf\Internal\RepeatedField $income_ranges
     *           Household income percentile ranges for the audience.  If absent, the
     *           audience does not restrict by household income range.
     *     @type array<\Google\Ads\GoogleAds\V14\Services\AudienceInsightsDynamicLineup>|\Google\Protobuf\Internal\RepeatedField $dynamic_lineups
     *           Dynamic lineups representing the YouTube content viewed by the audience.
     *     @type array<\Google\Ads\GoogleAds\V14\Services\InsightsAudienceAttributeGroup>|\Google\Protobuf\Internal\RepeatedField $topic_audience_combinations
     *           A combination of entity, category and user interest attributes defining the
     *           audience. The combination has a logical AND-of-ORs structure: Attributes
     *           within each InsightsAudienceAttributeGroup are combined with OR, and
     *           the combinations themselves are combined together with AND.  For example,
     *           the expression (Entity OR Affinity) AND (In-Market OR Category) can be
     *           formed using two InsightsAudienceAttributeGroups with two Attributes
     *           each.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The countries for the audience.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LocationInfo country_locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCountryLocations()
    {
        return $this->country_locations;
    }

    /**
     * Required. The countries for the audience.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LocationInfo country_locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\LocationInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCountryLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\LocationInfo::class);
        $this->country_locations = $arr;

        return $this;
    }

    /**
     * Sub-country geographic location attributes.  If present, each of these
     * must be contained in one of the countries in this audience.  If absent, the
     * audience is geographically to the country_locations and no further.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LocationInfo sub_country_locations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubCountryLocations()
    {
        return $this->sub_country_locations;
    }

    /**
     * Sub-country geographic location attributes.  If present, each of these
     * must be contained in one of the countries in this audience.  If absent, the
     * audience is geographically to the country_locations and no further.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.LocationInfo sub_country_locations = 2;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\LocationInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubCountryLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\LocationInfo::class);
        $this->sub_country_locations = $arr;

        return $this;
    }

    /**
     * Gender for the audience.  If absent, the audience does not restrict by
     * gender.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.GenderInfo gender = 3;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\GenderInfo|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    public function hasGender()
    {
        return isset($this->gender);
    }

    public function clearGender()
    {
        unset($this->gender);
    }

    /**
     * Gender for the audience.  If absent, the audience does not restrict by
     * gender.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.GenderInfo gender = 3;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\GenderInfo $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\GenderInfo::class);
        $this->gender = $var;

        return $this;
    }

    /**
     * Age ranges for the audience.  If absent, the audience represents all people
     * over 18 that match the other attributes.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.AgeRangeInfo age_ranges = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAgeRanges()
    {
        return $this->age_ranges;
    }

    /**
     * Age ranges for the audience.  If absent, the audience represents all people
     * over 18 that match the other attributes.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.AgeRangeInfo age_ranges = 4;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\AgeRangeInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAgeRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\AgeRangeInfo::class);
        $this->age_ranges = $arr;

        return $this;
    }

    /**
     * Parental status for the audience.  If absent, the audience does not
     * restrict by parental status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.ParentalStatusInfo parental_status = 5;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\ParentalStatusInfo|null
     */
    public function getParentalStatus()
    {
        return $this->parental_status;
    }

    public function hasParentalStatus()
    {
        return isset($this->parental_status);
    }

    public function clearParentalStatus()
    {
        unset($this->parental_status);
    }

    /**
     * Parental status for the audience.  If absent, the audience does not
     * restrict by parental status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.ParentalStatusInfo parental_status = 5;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\ParentalStatusInfo $var
     * @return $this
     */
    public function setParentalStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\ParentalStatusInfo::class);
        $this->parental_status = $var;

        return $this;
    }

    /**
     * Household income percentile ranges for the audience.  If absent, the
     * audience does not restrict by household income range.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.IncomeRangeInfo income_ranges = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncomeRanges()
    {
        return $this->income_ranges;
    }

    /**
     * Household income percentile ranges for the audience.  If absent, the
     * audience does not restrict by household income range.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.common.IncomeRangeInfo income_ranges = 6;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Common\IncomeRangeInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncomeRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Common\IncomeRangeInfo::class);
        $this->income_ranges = $arr;

        return $this;
    }

    /**
     * Dynamic lineups representing the YouTube content viewed by the audience.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.services.AudienceInsightsDynamicLineup dynamic_lineups = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDynamicLineups()
    {
        return $this->dynamic_lineups;
    }

    /**
     * Dynamic lineups representing the YouTube content viewed by the audience.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.services.AudienceInsightsDynamicLineup dynamic_lineups = 7;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Services\AudienceInsightsDynamicLineup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDynamicLineups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Services\AudienceInsightsDynamicLineup::class);
        $this->dynamic_lineups = $arr;

        return $this;
    }

    /**
     * A combination of entity, category and user interest attributes defining the
     * audience. The combination has a logical AND-of-ORs structure: Attributes
     * within each InsightsAudienceAttributeGroup are combined with OR, and
     * the combinations themselves are combined together with AND.  For example,
     * the expression (Entity OR Affinity) AND (In-Market OR Category) can be
     * formed using two InsightsAudienceAttributeGroups with two Attributes
     * each.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.services.InsightsAudienceAttributeGroup topic_audience_combinations = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopicAudienceCombinations()
    {
        return $this->topic_audience_combinations;
    }

    /**
     * A combination of entity, category and user interest attributes defining the
     * audience. The combination has a logical AND-of-ORs structure: Attributes
     * within each InsightsAudienceAttributeGroup are combined with OR, and
     * the combinations themselves are combined together with AND.  For example,
     * the expression (Entity OR Affinity) AND (In-Market OR Category) can be
     * formed using two InsightsAudienceAttributeGroups with two Attributes
     * each.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v14.services.InsightsAudienceAttributeGroup topic_audience_combinations = 8;</code>
     * @param array<\Google\Ads\GoogleAds\V14\Services\InsightsAudienceAttributeGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopicAudienceCombinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V14\Services\InsightsAudienceAttributeGroup::class);
        $this->topic_audience_combinations = $arr;

        return $this;
    }

}

