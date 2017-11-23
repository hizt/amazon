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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2015-09-01
 * Generated: Thu Mar 10 07:30:00 PST 2016
 */

/**
 *  @see MarketplaceWebServiceProducts_Model
 */

namespace Amazon\MarketplaceWebServiceProducts\Model;
use Amazon\MarketplaceWebServiceProducts\Model;


/**
 * NumberOfOffers
 * 
 * Properties:
 * <ul>
 * 
 * <li>OfferCount: array</li>
 *
 * </ul>
 */

 class NumberOfOffers extends Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'OfferCount' => array('FieldValue' => array(), 'FieldType' => array('OfferCountType')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the OfferCount property.
     *
     * @return List<OfferCountType> OfferCount.
     */
    public function getOfferCount()
    {
        if ($this->_fields['OfferCount']['FieldValue'] == null)
        {
            $this->_fields['OfferCount']['FieldValue'] = array();
        }
        return $this->_fields['OfferCount']['FieldValue'];
    }

    /**
     * Set the value of the OfferCount property.
     *
     * @param array offerCount
     * @return $this
     */
    public function setOfferCount($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['OfferCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OfferCount.
     */
    public function unsetOfferCount()
    {
        $this->_fields['OfferCount']['FieldValue'] = array();
    }

    /**
     * Check to see if OfferCount is set.
     *
     * @return true if OfferCount is set.
     */
    public function isSetOfferCount()
    {
                return !empty($this->_fields['OfferCount']['FieldValue']);
            }

    /**
     * Add values for OfferCount, return this.
     *
     * @param offerCount
     *             New values to add.
     *
     * @return $this.
     */
    public function withOfferCount()
    {
        foreach (func_get_args() as $OfferCount)
        {
            $this->_fields['OfferCount']['FieldValue'][] = $OfferCount;
        }
        return $this;
    }

}
