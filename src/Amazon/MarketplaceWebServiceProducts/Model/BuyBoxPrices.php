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
 * BuyBoxPrices
 * 
 * Properties:
 * <ul>
 * 
 * <li>BuyBoxPrice: array</li>
 *
 * </ul>
 */

 class BuyBoxPrices extends Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'BuyBoxPrice' => array('FieldValue' => array(), 'FieldType' => array('BuyBoxPriceType')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the BuyBoxPrice property.
     *
     * @return List<BuyBoxPriceType> BuyBoxPrice.
     */
    public function getBuyBoxPrice()
    {
        if ($this->_fields['BuyBoxPrice']['FieldValue'] == null)
        {
            $this->_fields['BuyBoxPrice']['FieldValue'] = array();
        }
        return $this->_fields['BuyBoxPrice']['FieldValue'];
    }

    /**
     * Set the value of the BuyBoxPrice property.
     *
     * @param array buyBoxPrice
     * @return $this
     */
    public function setBuyBoxPrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['BuyBoxPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear BuyBoxPrice.
     */
    public function unsetBuyBoxPrice()
    {
        $this->_fields['BuyBoxPrice']['FieldValue'] = array();
    }

    /**
     * Check to see if BuyBoxPrice is set.
     *
     * @return true if BuyBoxPrice is set.
     */
    public function isSetBuyBoxPrice()
    {
                return !empty($this->_fields['BuyBoxPrice']['FieldValue']);
            }

    /**
     * Add values for BuyBoxPrice, return this.
     *
     * @param buyBoxPrice
     *             New values to add.
     *
     * @return $this.
     */
    public function withBuyBoxPrice()
    {
        foreach (func_get_args() as $BuyBoxPrice)
        {
            $this->_fields['BuyBoxPrice']['FieldValue'][] = $BuyBoxPrice;
        }
        return $this;
    }

}
