<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\LeadGenDataDraftFields;
use FacebookAds\Object\Values\LeadGenDataDraftLocaleValues;
use FacebookAds\Object\Values\LeadGenDataDraftStatusValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class LeadGenDataDraft extends AbstractCrudObject {

  /**
   * @return LeadGenDataDraftFields
   */
  public static function getFieldsEnum() {
    return LeadGenDataDraftFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Locale'] = LeadGenDataDraftLocaleValues::getInstance()->getValues();
    $ref_enums['Status'] = LeadGenDataDraftStatusValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new LeadGenDataDraft(),
      'NODE',
      LeadGenDataDraft::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allow_organic_lead_retrieval' => 'bool',
      'block_display_for_non_targeted_viewer' => 'bool',
      'context_card' => 'Object',
      'context_card_id' => 'string',
      'custom_disclaimer' => 'Object',
      'delete_missing_parameters' => 'bool',
      'follow_up_action_url' => 'string',
      'is_optimized_for_quality' => 'bool',
      'legal_content_id' => 'string',
      'locale' => 'locale_enum',
      'name' => 'string',
      'privacy_policy' => 'Object',
      'question_page_custom_headline' => 'string',
      'questions' => 'list<Object>',
      'status' => 'status_enum',
      'thank_you_page' => 'Object',
    );
    $enums = array(
      'locale_enum' => LeadGenDataDraftLocaleValues::getInstance()->getValues(),
      'status_enum' => LeadGenDataDraftStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new LeadGenDataDraft(),
      'NODE',
      LeadGenDataDraft::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
