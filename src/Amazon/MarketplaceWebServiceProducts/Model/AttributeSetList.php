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
 * AttributeSetList
 * 
 * Properties:
 * <ul>
 * 
 * <li>Any: array</li>
 *
 * </ul>
 */

 class AttributeSetList extends Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Any' => array('FieldValue' => array(), 'FieldType' => array('object')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Any property.
     *
     * @return List<Object> Any.
     */
    public function getAny()
    {
        if ($this->_fields['Any']['FieldValue'] == null)
        {
            $this->_fields['Any']['FieldValue'] = array();
        }
        return $this->_fields['Any']['FieldValue'];
    }

    /**
     * Set the value of the Any property.
     *
     * @param array any
     * @return $this
     */
    public function setAny($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Any']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Any.
     */
    public function unsetAny()
    {
        $this->_fields['Any']['FieldValue'] = array();
    }

    /**
     * Check to see if Any is set.
     *
     * @return true if Any is set.
     */
    public function isSetAny()
    {
                return !empty($this->_fields['Any']['FieldValue']);
            }

    /**
     * Add values for Any, return this.
     *
     * @param any
     *             New values to add.
     *
     * @return $this.
     */
    public function withAny()
    {
        foreach (func_get_args() as $Any)
        {
            $this->_fields['Any']['FieldValue'][] = $Any;
        }
        return $this;
    }

}
