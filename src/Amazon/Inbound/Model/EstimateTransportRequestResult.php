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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Wed Oct 05 06:15:45 PDT 2016
 */

namespace Amazon\Inbound\Model;

use Amazon\Inbound\Model;


/**
 * FBAInboundServiceMWS_Model_EstimateTransportRequestResult
 *
 * Properties:
 * <ul>
 *
 * <li>TransportResult: FBAInboundServiceMWS_Model_TransportResult</li>
 *
 * </ul>
 */
class EstimateTransportRequestResult extends Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'TransportResult' => array('FieldValue' => null, 'FieldType' => TransportResult::className()),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the TransportResult property.
     *
     * @return TransportResult TransportResult.
     */
    public function getTransportResult()
    {
        return $this->_fields['TransportResult']['FieldValue'];
    }

    /**
     * Set the value of the TransportResult property.
     *
     * @param FBAInboundServiceMWS_Model_TransportResult transportResult
     * @return this instance
     */
    public function setTransportResult($value)
    {
        $this->_fields['TransportResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TransportResult is set.
     *
     * @return true if TransportResult is set.
     */
    public function isSetTransportResult()
    {
        return !is_null($this->_fields['TransportResult']['FieldValue']);
    }

    /**
     * Set the value of TransportResult, return this.
     *
     * @param transportResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTransportResult($value)
    {
        $this->setTransportResult($value);
        return $this;
    }

}
