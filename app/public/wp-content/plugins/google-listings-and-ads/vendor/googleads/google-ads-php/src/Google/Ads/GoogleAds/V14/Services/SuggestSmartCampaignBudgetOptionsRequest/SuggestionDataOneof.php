<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/ads/googleads/v14/services/smart_campaign_suggest_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Ads\GoogleAds\V14\Services\SuggestSmartCampaignBudgetOptionsRequest;

use Google\Ads\GoogleAds\V14\Services\SmartCampaignSuggestionInfo;

/**
 * Wrapper class for the oneof suggestion_data defined in message
 * SuggestSmartCampaignBudgetOptionsRequest. Only one item should be set on an
 * instance of this class. If multiple items are set on the instance, the last one
 * is used.
 */
class SuggestionDataOneof
{
    /** The value for the field campaign, if set. */
    private $campaign;

    /** The value for the field suggestion_info, if set. */
    private $suggestionInfo;

    /**
     * Name of the field for which the oneof is set, as it appears in the protobuf in
     * lower_camel_case.
     */
    private $selectedOneofFieldName = '';

    /**
     * Sets this oneof to campaign and updates its value.
     *
     * @param string $campaign The new value of this oneof.
     *
     * @return SuggestionDataOneof The modified object.
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;
        $this->selectedOneofFieldName = 'campaign';
        return $this;
    }

    /**
     * Sets this oneof to suggestion_info and updates its value.
     *
     * @param SmartCampaignSuggestionInfo $suggestionInfo The new value of this oneof.
     *
     * @return SuggestionDataOneof The modified object.
     */
    public function setSuggestionInfo($suggestionInfo)
    {
        $this->suggestionInfo = $suggestionInfo;
        $this->selectedOneofFieldName = 'suggestion_info';
        return $this;
    }

    /**
     * Returns true if this oneof is set to the field campaign.
     *
     * @return bool
     */
    public function isCampaign()
    {
        return $this->selectedOneofFieldName === 'campaign';
    }

    /**
     * Returns true if this oneof is set to the field suggestion_info.
     *
     * @return bool
     */
    public function isSuggestionInfo()
    {
        return $this->selectedOneofFieldName === 'suggestion_info';
    }

    /**
     * Returns campaign if this oneof is set to the field campaign, null otherwise.
     *
     * @return string|null
     */
    public function getCampaign()
    {
        return $this->isCampaign() ? $this->campaign : null;
    }

    /**
     * Returns suggestionInfo if this oneof is set to the field suggestion_info, null
     * otherwise.
     *
     * @return SmartCampaignSuggestionInfo|null
     */
    public function getSuggestionInfo()
    {
        return $this->isSuggestionInfo() ? $this->suggestionInfo : null;
    }
}
