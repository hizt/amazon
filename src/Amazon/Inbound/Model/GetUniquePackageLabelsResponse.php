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
 * FBAInboundServiceMWS_Model_GetUniquePackageLabelsResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetUniquePackageLabelsResult: FBAInboundServiceMWS_Model_GetUniquePackageLabelsResult</li>
 * <li>ResponseMetadata: FBAInboundServiceMWS_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: FBAInboundServiceMWS_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class GetUniquePackageLabelsResponse extends Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'GetUniquePackageLabelsResult' => array('FieldValue' => null, 'FieldType' => GetUniquePackageLabelsResult::className()),
            'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => ResponseMetadata::className()),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => ResponseHeaderMetadata::className()),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetUniquePackageLabelsResult property.
     *
     * @return GetUniquePackageLabelsResult GetUniquePackageLabelsResult.
     */
    public function getGetUniquePackageLabelsResult()
    {
        return $this->_fields['GetUniquePackageLabelsResult']['FieldValue'];
    }

    /**
     * Set the value of the GetUniquePackageLabelsResult property.
     *
     * @param FBAInboundServiceMWS_Model_GetUniquePackageLabelsResult getUniquePackageLabelsResult
     * @return this instance
     */
    public function setGetUniquePackageLabelsResult($value)
    {
        $this->_fields['GetUniquePackageLabelsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetUniquePackageLabelsResult is set.
     *
     * @return true if GetUniquePackageLabelsResult is set.
     */
    public function isSetGetUniquePackageLabelsResult()
    {
        return !is_null($this->_fields['GetUniquePackageLabelsResult']['FieldValue']);
    }

    /**
     * Set the value of GetUniquePackageLabelsResult, return this.
     *
     * @param getUniquePackageLabelsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetUniquePackageLabelsResult($value)
    {
        $this->setGetUniquePackageLabelsResult($value);
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
     * Construct FBAInboundServiceMWS_Model_GetUniquePackageLabelsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return static
     * @throws  \Exception
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetUniquePackageLabelsResponse']");
        if ($response->length == 1) {
            return new static(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct FBAInboundServiceMWS_Model_GetUniquePackageLabelsResponse from provided XML. 
                                  Make sure that GetUniquePackageLabelsResponse is a root element");
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
        $xml .= "<GetUniquePackageLabelsResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetUniquePackageLabelsResponse>";
        return $xml;
    }

}
