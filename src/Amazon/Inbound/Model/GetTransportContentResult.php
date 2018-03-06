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
 * FBAInboundServiceMWS_Model_GetTransportContentResult
 *
 * Properties:
 * <ul>
 *
 * <li>TransportContent: FBAInboundServiceMWS_Model_TransportContent</li>
 *
 * </ul>
 */
class GetTransportContentResult extends Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'TransportContent' => array('FieldValue' => null, 'FieldType' => TransportContent::className()),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the TransportContent property.
     *
     * @return TransportContent TransportContent.
     */
    public function getTransportContent()
    {
        return $this->_fields['TransportContent']['FieldValue'];
    }

    /**
     * Set the value of the TransportContent property.
     *
     * @param FBAInboundServiceMWS_Model_TransportContent transportContent
     * @return this instance
     */
    public function setTransportContent($value)
    {
        $this->_fields['TransportContent']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TransportContent is set.
     *
     * @return true if TransportContent is set.
     */
    public function isSetTransportContent()
    {
        return !is_null($this->_fields['TransportContent']['FieldValue']);
    }

    /**
     * Set the value of TransportContent, return this.
     *
     * @param transportContent
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTransportContent($value)
    {
        $this->setTransportContent($value);
        return $this;
    }

}
