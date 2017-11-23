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
 * SalesRankType
 * 
 * Properties:
 * <ul>
 * 
 * <li>ProductCategoryId: string</li>
 * <li>Rank: int</li>
 *
 * </ul>
 */

 class SalesRankType extends Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ProductCategoryId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Rank' => array('FieldValue' => null, 'FieldType' => 'int'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ProductCategoryId property.
     *
     * @return String ProductCategoryId.
     */
    public function getProductCategoryId()
    {
        return $this->_fields['ProductCategoryId']['FieldValue'];
    }

    /**
     * Set the value of the ProductCategoryId property.
     *
     * @param string productCategoryId
     * @return $this
     */
    public function setProductCategoryId($value)
    {
        $this->_fields['ProductCategoryId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ProductCategoryId is set.
     *
     * @return true if ProductCategoryId is set.
     */
    public function isSetProductCategoryId()
    {
                return !is_null($this->_fields['ProductCategoryId']['FieldValue']);
            }

    /**
     * Set the value of ProductCategoryId, return this.
     *
     * @param productCategoryId
     *             The new value to set.
     *
     * @return $this.
     */
    public function withProductCategoryId($value)
    {
        $this->setProductCategoryId($value);
        return $this;
    }

    /**
     * Get the value of the Rank property.
     *
     * @return int Rank.
     */
    public function getRank()
    {
        return $this->_fields['Rank']['FieldValue'];
    }

    /**
     * Set the value of the Rank property.
     *
     * @param int rank
     * @return $this
     */
    public function setRank($value)
    {
        $this->_fields['Rank']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Rank is set.
     *
     * @return true if Rank is set.
     */
    public function isSetRank()
    {
                return !is_null($this->_fields['Rank']['FieldValue']);
            }

    /**
     * Set the value of Rank, return this.
     *
     * @param rank
     *             The new value to set.
     *
     * @return $this.
     */
    public function withRank($value)
    {
        $this->setRank($value);
        return $this;
    }

}
