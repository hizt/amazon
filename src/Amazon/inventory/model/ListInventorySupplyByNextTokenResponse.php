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
 * @package  FBA Inventory Service MWS
 * @version  2010-10-01
 * Library Version: 2014-09-30
 * Generated: Wed May 04 17:14:15 UTC 2016
 */
namespace Amazon\inventory\model;
/**
 *  @see FBAInventoryServiceMWS_Model
 */

use Amazon\inventory\Model;


/**
 * FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListInventorySupplyByNextTokenResult: FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResult</li>
 * <li>ResponseMetadata: FBAInventoryServiceMWS_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: FBAInventoryServiceMWS_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class ListInventorySupplyByNextTokenResponse extends Model {

    public function __construct($data = null)
    {
        $this->_fields = array (
        'ListInventorySupplyByNextTokenResult' => array('FieldValue' => null, 'FieldType' => ListInventorySupplyByNextTokenResult::className()),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => ResponseMetadata::className()),
        'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => ResponseHeaderMetadata::className()),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListInventorySupplyByNextTokenResult property.
     *
     * @return ListInventorySupplyByNextTokenResult ListInventorySupplyByNextTokenResult.
     */
    public function getListInventorySupplyByNextTokenResult()
    {
        return $this->_fields['ListInventorySupplyByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListInventorySupplyByNextTokenResult property.
     *
     * @param FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResult listInventorySupplyByNextTokenResult
     * @return $this instance
     */
    public function setListInventorySupplyByNextTokenResult($value)
    {
        $this->_fields['ListInventorySupplyByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListInventorySupplyByNextTokenResult is set.
     *
     * @return true if ListInventorySupplyByNextTokenResult is set.
     */
    public function isSetListInventorySupplyByNextTokenResult()
    {
                return !is_null($this->_fields['ListInventorySupplyByNextTokenResult']['FieldValue']);
            }

    /**
     * Set the value of ListInventorySupplyByNextTokenResult, return this.
     *
     * @param listInventorySupplyByNextTokenResult
     *             The new value to set.
     *
     * @return $this instance.
     */
    public function withListInventorySupplyByNextTokenResult($value)
    {
        $this->setListInventorySupplyByNextTokenResult($value);
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
     * @param FBAInventoryServiceMWS_Model_ResponseMetadata responseMetadata
     * @return $this instance
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
     * @return $this instance.
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
     * @param FBAInventoryServiceMWS_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return $this instance
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
     * @return $this instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

     /**
      * Construct FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse from XML string
      * @param $xml
      * @return ListInventorySupplyByNextTokenResponse
      * @throws \Exception
      */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListInventorySupplyByNextTokenResponse']");
        if ($response->length == 1) {
            return new ListInventorySupplyByNextTokenResponse(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse from provided XML. 
                                  Make sure that ListInventorySupplyByNextTokenResponse is a root element");
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
        $xml .= "<ListInventorySupplyByNextTokenResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInventory/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListInventorySupplyByNextTokenResponse>";
        return $xml;
    }

}
