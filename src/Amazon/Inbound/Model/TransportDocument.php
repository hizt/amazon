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
 * FBAInboundServiceMWS_Model_TransportDocument
 *
 * Properties:
 * <ul>
 *
 * <li>PdfDocument: string</li>
 * <li>Checksum: string</li>
 *
 * </ul>
 */
class TransportDocument extends Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'PdfDocument' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Checksum' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the PdfDocument property.
     *
     * @return String PdfDocument.
     */
    public function getPdfDocument()
    {
        return $this->_fields['PdfDocument']['FieldValue'];
    }

    /**
     * Set the value of the PdfDocument property.
     *
     * @param string pdfDocument
     * @return this instance
     */
    public function setPdfDocument($value)
    {
        $this->_fields['PdfDocument']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PdfDocument is set.
     *
     * @return true if PdfDocument is set.
     */
    public function isSetPdfDocument()
    {
        return !is_null($this->_fields['PdfDocument']['FieldValue']);
    }

    /**
     * Set the value of PdfDocument, return this.
     *
     * @param pdfDocument
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPdfDocument($value)
    {
        $this->setPdfDocument($value);
        return $this;
    }

    /**
     * Get the value of the Checksum property.
     *
     * @return String Checksum.
     */
    public function getChecksum()
    {
        return $this->_fields['Checksum']['FieldValue'];
    }

    /**
     * Set the value of the Checksum property.
     *
     * @param string checksum
     * @return this instance
     */
    public function setChecksum($value)
    {
        $this->_fields['Checksum']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Checksum is set.
     *
     * @return true if Checksum is set.
     */
    public function isSetChecksum()
    {
        return !is_null($this->_fields['Checksum']['FieldValue']);
    }

    /**
     * Set the value of Checksum, return this.
     *
     * @param checksum
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withChecksum($value)
    {
        $this->setChecksum($value);
        return $this;
    }

}
