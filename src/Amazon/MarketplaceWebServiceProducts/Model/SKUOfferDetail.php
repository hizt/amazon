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
 * SKUOfferDetail
 * 
 * Properties:
 * <ul>
 * 
 * <li>MyOffer: bool</li>
 * <li>SubCondition: string</li>
 * <li>SellerFeedbackRating: SellerFeedbackType</li>
 * <li>ShippingTime: DetailedShippingTimeType</li>
 * <li>ListingPrice: MoneyType</li>
 * <li>Points: Points</li>
 * <li>Shipping: MoneyType</li>
 * <li>ShipsFrom: ShipsFromType</li>
 * <li>IsFulfilledByAmazon: bool</li>
 * <li>IsBuyBoxWinner: bool</li>
 * <li>IsFeaturedMerchant: bool</li>
 *
 * </ul>
 */

 class SKUOfferDetail extends Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'MyOffer' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'SubCondition' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerFeedbackRating' => array('FieldValue' => null, 'FieldType' => 'SellerFeedbackType'),
    'ShippingTime' => array('FieldValue' => null, 'FieldType' => 'DetailedShippingTimeType'),
    'ListingPrice' => array('FieldValue' => null, 'FieldType' => 'MoneyType'),
    'Points' => array('FieldValue' => null, 'FieldType' => 'Points'),
    'Shipping' => array('FieldValue' => null, 'FieldType' => 'MoneyType'),
    'ShipsFrom' => array('FieldValue' => null, 'FieldType' => 'ShipsFromType'),
    'IsFulfilledByAmazon' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'IsBuyBoxWinner' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'IsFeaturedMerchant' => array('FieldValue' => null, 'FieldType' => 'bool'),
    );
    parent::__construct($data);
    }

    /**
     * Check the value of MyOffer.
     *
     * @return true if MyOffer is set to true.
     */
    public function isMyOffer()
    {
        return $this->_fields['MyOffer']['FieldValue'];
    }

    /**
     * Get the value of the MyOffer property.
     *
     * @return boolean MyOffer.
     */
    public function getMyOffer()
    {
        return $this->_fields['MyOffer']['FieldValue'];
    }

    /**
     * Set the value of the MyOffer property.
     *
     * @param bool myOffer
     * @return $this
     */
    public function setMyOffer($value)
    {
        $this->_fields['MyOffer']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MyOffer is set.
     *
     * @return true if MyOffer is set.
     */
    public function isSetMyOffer()
    {
                return !is_null($this->_fields['MyOffer']['FieldValue']);
            }

    /**
     * Set the value of MyOffer, return this.
     *
     * @param myOffer
     *             The new value to set.
     *
     * @return $this.
     */
    public function withMyOffer($value)
    {
        $this->setMyOffer($value);
        return $this;
    }

    /**
     * Get the value of the SubCondition property.
     *
     * @return String SubCondition.
     */
    public function getSubCondition()
    {
        return $this->_fields['SubCondition']['FieldValue'];
    }

    /**
     * Set the value of the SubCondition property.
     *
     * @param string subCondition
     * @return $this
     */
    public function setSubCondition($value)
    {
        $this->_fields['SubCondition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SubCondition is set.
     *
     * @return true if SubCondition is set.
     */
    public function isSetSubCondition()
    {
                return !is_null($this->_fields['SubCondition']['FieldValue']);
            }

    /**
     * Set the value of SubCondition, return this.
     *
     * @param subCondition
     *             The new value to set.
     *
     * @return $this.
     */
    public function withSubCondition($value)
    {
        $this->setSubCondition($value);
        return $this;
    }

    /**
     * Get the value of the SellerFeedbackRating property.
     *
     * @return SellerFeedbackType SellerFeedbackRating.
     */
    public function getSellerFeedbackRating()
    {
        return $this->_fields['SellerFeedbackRating']['FieldValue'];
    }

    /**
     * Set the value of the SellerFeedbackRating property.
     *
     * @param SellerFeedbackType sellerFeedbackRating
     * @return $this
     */
    public function setSellerFeedbackRating($value)
    {
        $this->_fields['SellerFeedbackRating']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerFeedbackRating is set.
     *
     * @return true if SellerFeedbackRating is set.
     */
    public function isSetSellerFeedbackRating()
    {
                return !is_null($this->_fields['SellerFeedbackRating']['FieldValue']);
            }

    /**
     * Set the value of SellerFeedbackRating, return this.
     *
     * @param sellerFeedbackRating
     *             The new value to set.
     *
     * @return $this.
     */
    public function withSellerFeedbackRating($value)
    {
        $this->setSellerFeedbackRating($value);
        return $this;
    }

    /**
     * Get the value of the ShippingTime property.
     *
     * @return DetailedShippingTimeType ShippingTime.
     */
    public function getShippingTime()
    {
        return $this->_fields['ShippingTime']['FieldValue'];
    }

    /**
     * Set the value of the ShippingTime property.
     *
     * @param DetailedShippingTimeType shippingTime
     * @return $this
     */
    public function setShippingTime($value)
    {
        $this->_fields['ShippingTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingTime is set.
     *
     * @return true if ShippingTime is set.
     */
    public function isSetShippingTime()
    {
                return !is_null($this->_fields['ShippingTime']['FieldValue']);
            }

    /**
     * Set the value of ShippingTime, return this.
     *
     * @param shippingTime
     *             The new value to set.
     *
     * @return $this.
     */
    public function withShippingTime($value)
    {
        $this->setShippingTime($value);
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
     * Get the value of the ShipsFrom property.
     *
     * @return ShipsFromType ShipsFrom.
     */
    public function getShipsFrom()
    {
        return $this->_fields['ShipsFrom']['FieldValue'];
    }

    /**
     * Set the value of the ShipsFrom property.
     *
     * @param ShipsFromType shipsFrom
     * @return $this
     */
    public function setShipsFrom($value)
    {
        $this->_fields['ShipsFrom']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipsFrom is set.
     *
     * @return true if ShipsFrom is set.
     */
    public function isSetShipsFrom()
    {
                return !is_null($this->_fields['ShipsFrom']['FieldValue']);
            }

    /**
     * Set the value of ShipsFrom, return this.
     *
     * @param shipsFrom
     *             The new value to set.
     *
     * @return $this.
     */
    public function withShipsFrom($value)
    {
        $this->setShipsFrom($value);
        return $this;
    }

    /**
     * Check the value of IsFulfilledByAmazon.
     *
     * @return true if IsFulfilledByAmazon is set to true.
     */
    public function isIsFulfilledByAmazon()
    {
        return $this->_fields['IsFulfilledByAmazon']['FieldValue'];
    }

    /**
     * Get the value of the IsFulfilledByAmazon property.
     *
     * @return boolean IsFulfilledByAmazon.
     */
    public function getIsFulfilledByAmazon()
    {
        return $this->_fields['IsFulfilledByAmazon']['FieldValue'];
    }

    /**
     * Set the value of the IsFulfilledByAmazon property.
     *
     * @param bool isFulfilledByAmazon
     * @return $this
     */
    public function setIsFulfilledByAmazon($value)
    {
        $this->_fields['IsFulfilledByAmazon']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsFulfilledByAmazon is set.
     *
     * @return true if IsFulfilledByAmazon is set.
     */
    public function isSetIsFulfilledByAmazon()
    {
                return !is_null($this->_fields['IsFulfilledByAmazon']['FieldValue']);
            }

    /**
     * Set the value of IsFulfilledByAmazon, return this.
     *
     * @param isFulfilledByAmazon
     *             The new value to set.
     *
     * @return $this.
     */
    public function withIsFulfilledByAmazon($value)
    {
        $this->setIsFulfilledByAmazon($value);
        return $this;
    }

    /**
     * Check the value of IsBuyBoxWinner.
     *
     * @return true if IsBuyBoxWinner is set to true.
     */
    public function isIsBuyBoxWinner()
    {
        return !is_null($this->_fields['IsBuyBoxWinner']['FieldValue']) && $this->_fields['IsBuyBoxWinner']['FieldValue'];
    }

    /**
     * Get the value of the IsBuyBoxWinner property.
     *
     * @return Boolean IsBuyBoxWinner.
     */
    public function getIsBuyBoxWinner()
    {
        return $this->_fields['IsBuyBoxWinner']['FieldValue'];
    }

    /**
     * Set the value of the IsBuyBoxWinner property.
     *
     * @param bool isBuyBoxWinner
     * @return $this
     */
    public function setIsBuyBoxWinner($value)
    {
        $this->_fields['IsBuyBoxWinner']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsBuyBoxWinner is set.
     *
     * @return true if IsBuyBoxWinner is set.
     */
    public function isSetIsBuyBoxWinner()
    {
                return !is_null($this->_fields['IsBuyBoxWinner']['FieldValue']);
            }

    /**
     * Set the value of IsBuyBoxWinner, return this.
     *
     * @param isBuyBoxWinner
     *             The new value to set.
     *
     * @return $this.
     */
    public function withIsBuyBoxWinner($value)
    {
        $this->setIsBuyBoxWinner($value);
        return $this;
    }

    /**
     * Check the value of IsFeaturedMerchant.
     *
     * @return true if IsFeaturedMerchant is set to true.
     */
    public function isIsFeaturedMerchant()
    {
        return !is_null($this->_fields['IsFeaturedMerchant']['FieldValue']) && $this->_fields['IsFeaturedMerchant']['FieldValue'];
    }

    /**
     * Get the value of the IsFeaturedMerchant property.
     *
     * @return Boolean IsFeaturedMerchant.
     */
    public function getIsFeaturedMerchant()
    {
        return $this->_fields['IsFeaturedMerchant']['FieldValue'];
    }

    /**
     * Set the value of the IsFeaturedMerchant property.
     *
     * @param bool isFeaturedMerchant
     * @return $this
     */
    public function setIsFeaturedMerchant($value)
    {
        $this->_fields['IsFeaturedMerchant']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsFeaturedMerchant is set.
     *
     * @return true if IsFeaturedMerchant is set.
     */
    public function isSetIsFeaturedMerchant()
    {
                return !is_null($this->_fields['IsFeaturedMerchant']['FieldValue']);
            }

    /**
     * Set the value of IsFeaturedMerchant, return this.
     *
     * @param isFeaturedMerchant
     *             The new value to set.
     *
     * @return $this.
     */
    public function withIsFeaturedMerchant($value)
    {
        $this->setIsFeaturedMerchant($value);
        return $this;
    }

}
