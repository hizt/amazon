<?php
/*******************************************************************************
 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-19
 * Generated: Wed Oct 19 08:37:58 PDT 2016
 */
namespace Amazon\outbound\Model;
use Amazon\outbound\Model;


/**
 * FBAOutboundServiceMWS_Model_ListReturnReasonCodesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReasonCodeDetailsList: FBAOutboundServiceMWS_Model_ReasonCodeDetailsList</li>
 *
 * </ul>
 */

 class ListReturnReasonCodesResult extends Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ReasonCodeDetailsList' => array('FieldValue' => null, 'FieldType' => ReasonCodeDetailsList::className()),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ReasonCodeDetailsList property.
     *
     * @return ReasonCodeDetailsList ReasonCodeDetailsList.
     */
    public function getReasonCodeDetailsList()
    {
        return $this->_fields['ReasonCodeDetailsList']['FieldValue'];
    }

    /**
     * Set the value of the ReasonCodeDetailsList property.
     *
     * @param FBAOutboundServiceMWS_Model_ReasonCodeDetailsList reasonCodeDetailsList
     * @return this instance
     */
    public function setReasonCodeDetailsList($value)
    {
        $this->_fields['ReasonCodeDetailsList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReasonCodeDetailsList is set.
     *
     * @return true if ReasonCodeDetailsList is set.
     */
    public function isSetReasonCodeDetailsList()
    {
                return !is_null($this->_fields['ReasonCodeDetailsList']['FieldValue']);
            }

    /**
     * Set the value of ReasonCodeDetailsList, return this.
     *
     * @param reasonCodeDetailsList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReasonCodeDetailsList($value)
    {
        $this->setReasonCodeDetailsList($value);
        return $this;
    }

}
