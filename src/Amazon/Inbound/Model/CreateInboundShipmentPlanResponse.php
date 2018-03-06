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
 * FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResponse
 *
 * Properties:
 * <ul>
 *
 * <li>CreateInboundShipmentPlanResult: FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResult</li>
 * <li>ResponseMetadata: FBAInboundServiceMWS_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: FBAInboundServiceMWS_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class CreateInboundShipmentPlanResponse extends Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'CreateInboundShipmentPlanResult' => array('FieldValue' => null, 'FieldType' => CreateInboundShipmentPlanResult::className()),
            'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => ResponseMetadata::className()),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => ResponseHeaderMetadata::className()),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the CreateInboundShipmentPlanResult property.
     *
     * @return CreateInboundShipmentPlanResult CreateInboundShipmentPlanResult.
     */
    public function getCreateInboundShipmentPlanResult()
    {
        return $this->_fields['CreateInboundShipmentPlanResult']['FieldValue'];
    }

    /**
     * Set the value of the CreateInboundShipmentPlanResult property.
     *
     * @param FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResult createInboundShipmentPlanResult
     * @return this instance
     */
    public function setCreateInboundShipmentPlanResult($value)
    {
        $this->_fields['CreateInboundShipmentPlanResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreateInboundShipmentPlanResult is set.
     *
     * @return true if CreateInboundShipmentPlanResult is set.
     */
    public function isSetCreateInboundShipmentPlanResult()
    {
        return !is_null($this->_fields['CreateInboundShipmentPlanResult']['FieldValue']);
    }

    /**
     * Set the value of CreateInboundShipmentPlanResult, return this.
     *
     * @param createInboundShipmentPlanResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCreateInboundShipmentPlanResult($value)
    {
        $this->setCreateInboundShipmentPlanResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param FBAInboundServiceMWS_Model_ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param FBAInboundServiceMWS_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

    /**
     * Construct FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return static
     * @throws \Exception
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CreateInboundShipmentPlanResponse']");
        if ($response->length == 1) {
            return new static(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResponse from provided XML. 
                                  Make sure that CreateInboundShipmentPlanResponse is a root element");
        }
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<CreateInboundShipmentPlanResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CreateInboundShipmentPlanResponse>";
        return $xml;
    }

}
