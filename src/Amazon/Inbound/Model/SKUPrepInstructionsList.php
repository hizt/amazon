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
 * FBAInboundServiceMWS_Model_SKUPrepInstructionsList
 *
 * Properties:
 * <ul>
 *
 * <li>SKUPrepInstructions: array</li>
 *
 * </ul>
 */
class SKUPrepInstructionsList extends Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'SKUPrepInstructions' => array('FieldValue' => array(), 'FieldType' => array(SKUPrepInstructions::className())),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SKUPrepInstructions property.
     *
     * @return List<SKUPrepInstructions> SKUPrepInstructions.
     */
    public function getSKUPrepInstructions()
    {
        if ($this->_fields['SKUPrepInstructions']['FieldValue'] == null) {
            $this->_fields['SKUPrepInstructions']['FieldValue'] = array();
        }
        return $this->_fields['SKUPrepInstructions']['FieldValue'];
    }

    /**
     * Set the value of the SKUPrepInstructions property.
     *
     * @param array skuPrepInstructions
     * @return this instance
     */
    public function setSKUPrepInstructions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['SKUPrepInstructions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear SKUPrepInstructions.
     */
    public function unsetSKUPrepInstructions()
    {
        $this->_fields['SKUPrepInstructions']['FieldValue'] = array();
    }

    /**
     * Check to see if SKUPrepInstructions is set.
     *
     * @return true if SKUPrepInstructions is set.
     */
    public function isSetSKUPrepInstructions()
    {
        return !empty($this->_fields['SKUPrepInstructions']['FieldValue']);
    }

    /**
     * Add values for SKUPrepInstructions, return this.
     *
     * @param skuPrepInstructions
     *             New values to add.
     *
     * @return This instance.
     */
    public function withSKUPrepInstructions()
    {
        foreach (func_get_args() as $SKUPrepInstructions) {
            $this->_fields['SKUPrepInstructions']['FieldValue'][] = $SKUPrepInstructions;
        }
        return $this;
    }

}