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
 * PriceType
 * 
 * Properties:
 * <ul>
 * 
 * <li>LandedPrice: MoneyType</li>
 * <li>ListingPrice: MoneyType</li>
 * <li>Shipping: MoneyType</li>
 * <li>Points: Points</li>
 *
 * </ul>
 */

 class PriceType extends Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'LandedPrice' => array('FieldValue' => null, 'FieldType' => 'MoneyType'),
    'ListingPrice' => array('FieldValue' => null, 'FieldType' => 'MoneyType'),
    'Shipping' => array('FieldValue' => null, 'FieldType' => 'MoneyType'),
    'Points' => array('FieldValue' => null, 'FieldType' => 'Points'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the LandedPrice property.
     *
     * @return MoneyType LandedPrice.
     */
    public function getLandedPrice()
    {
        return $this->_fields['LandedPrice']['FieldValue'];
    }

    /**
     * Set the value of the LandedPrice property.
     *
     * @param MoneyType landedPrice
     * @return $this
     */
    public function setLandedPrice($value)
    {
        $this->_fields['LandedPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LandedPrice is set.
     *
     * @return true if LandedPrice is set.
     */
    public function isSetLandedPrice()
    {
                return !is_null($this->_fields['LandedPrice']['FieldValue']);
            }

    /**
     * Set the value of LandedPrice, return this.
     *
     * @param landedPrice
     *             The new value to set.
     *
     * @return $this.
     */
    public function withLandedPrice($value)
    {
        $this->setLandedPrice($value);
        return $this;
    }

    /**
     * Get the value of the ListingPrice property.
     *
     * @return MoneyType ListingPrice.
     */
    public function getListingPrice()
    {
        return $this->_fields['ListingPrice']['FieldValue'];
    }

    /**
     * Set the value of the ListingPrice property.
     *
     * @param MoneyType listingPrice
     * @return $this
     */
    public function setListingPrice($value)
    {
        $this->_fields['ListingPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListingPrice is set.
     *
     * @return true if ListingPrice is set.
     */
    public function isSetListingPrice()
    {
                return !is_null($this->_fields['ListingPrice']['FieldValue']);
            }

    /**
     * Set the value of ListingPrice, return this.
     *
     * @param listingPrice
     *             The new value to set.
     *
     * @return $this.
     */
    public function withListingPrice($value)
    {
        $this->setListingPrice($value);
        return $this;
    }

    /**
     * Get the value of the Shipping property.
     *
     * @return MoneyType Shipping.
     */
    public function getShipping()
    {
        return $this->_fields['Shipping']['FieldValue'];
    }

    /**
     * Set the value of the Shipping property.
     *
     * @param MoneyType shipping
     * @return $this
     */
    public function setShipping($value)
    {
        $this->_fields['Shipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Shipping is set.
     *
     * @return true if Shipping is set.
     */
    public function isSetShipping()
    {
                return !is_null($this->_fields['Shipping']['FieldValue']);
            }

    /**
     * Set the value of Shipping, return this.
     *
     * @param shipping
     *             The new value to set.
     *
     * @return $this.
     */
    public function withShipping($value)
    {
        $this->setShipping($value);
        return $this;
    }

    /**
     * Get the value of the Points property.
     *
     * @return Points Points.
     */
    public function getPoints()
    {
        return $this->_fields['Points']['FieldValue'];
    }

    /**
     * Set the value of the Points property.
     *
     * @param Points points
     * @return $this
     */
    public function setPoints($value)
    {
        $this->_fields['Points']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Points is set.
     *
     * @return true if Points is set.
     */
    public function isSetPoints()
    {
                return !is_null($this->_fields['Points']['FieldValue']);
            }

    /**
     * Set the value of Points, return this.
     *
     * @param points
     *             The new value to set.
     *
     * @return $this.
     */
    public function withPoints($value)
    {
        $this->setPoints($value);
        return $this;
    }

}
