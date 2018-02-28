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
use Amazon\outbound\Exception;
use Amazon\outbound\Model;


/**
 * FBAOutboundServiceMWS_Model_CreateFulfillmentReturnResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>CreateFulfillmentReturnResult: FBAOutboundServiceMWS_Model_CreateFulfillmentReturnResult</li>
 * <li>ResponseMetadata: FBAOutboundServiceMWS_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: FBAOutboundServiceMWS_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class CreateFulfillmentReturnResponse extends Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CreateFulfillmentReturnResult' => array('FieldValue' => null, 'FieldType' => CreateFulfillmentReturnResult::className()),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => ResponseMetadata::className()),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => ResponseHeaderMetadata::className()),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CreateFulfillmentReturnResult property.
     *
     * @return CreateFulfillmentReturnResult CreateFulfillmentReturnResult.
     */
    public function getCreateFulfillmentReturnResult()
    {
        return $this->_fields['CreateFulfillmentReturnResult']['FieldValue'];
    }

    /**
     * Set the value of the CreateFulfillmentReturnResult property.
     *
     * @param FBAOutboundServiceMWS_Model_CreateFulfillmentReturnResult createFulfillmentReturnResult
     * @return this instance
     */
    public function setCreateFulfillmentReturnResult($value)
    {
        $this->_fields['CreateFulfillmentReturnResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreateFulfillmentReturnResult is set.
     *
     * @return true if CreateFulfillmentReturnResult is set.
     */
    public function isSetCreateFulfillmentReturnResult()
    {
                return !is_null($this->_fields['CreateFulfillmentReturnResult']['FieldValue']);
            }

    /**
     * Set the value of CreateFulfillmentReturnResult, return this.
     *
     * @param createFulfillmentReturnResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCreateFulfillmentReturnResult($value)
    {
        $this->setCreateFulfillmentReturnResult($value);
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
     * @param FBAOutboundServiceMWS_Model_ResponseMetadata responseMetadata
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
     * @param FBAOutboundServiceMWS_Model_ResponseHeaderMetadata responseHeaderMetadata
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
     * Construct FBAOutboundServiceMWS_Model_CreateFulfillmentReturnResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return CreateFulfillmentReturnResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CreateFulfillmentReturnResponse']");
        if ($response->length == 1) {
            return new static(($response->item(0)));
        } else {
            throw new Exception("Unable to construct FBAOutboundServiceMWS_Model_CreateFulfillmentReturnResponse from provided XML. 
                                  Make sure that CreateFulfillmentReturnResponse is a root element");
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
        $xml .= "<CreateFulfillmentReturnResponse xmlns=\"http://mws.amazonaws.com/FulfillmentOutboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CreateFulfillmentReturnResponse>";
        return $xml;
    }

}
