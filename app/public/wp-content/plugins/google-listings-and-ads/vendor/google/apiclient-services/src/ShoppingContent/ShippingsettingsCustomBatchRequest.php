<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class ShippingsettingsCustomBatchRequest extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Collection
{
  protected $collection_key = 'entries';
  /**
   * @var ShippingsettingsCustomBatchRequestEntry[]
   */
  public $entries;
  protected $entriesType = ShippingsettingsCustomBatchRequestEntry::class;
  protected $entriesDataType = 'array';

  /**
   * @param ShippingsettingsCustomBatchRequestEntry[]
   */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /**
   * @return ShippingsettingsCustomBatchRequestEntry[]
   */
  public function getEntries()
  {
    return $this->entries;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ShippingsettingsCustomBatchRequest::class, 'Google_Service_ShoppingContent_ShippingsettingsCustomBatchRequest');
