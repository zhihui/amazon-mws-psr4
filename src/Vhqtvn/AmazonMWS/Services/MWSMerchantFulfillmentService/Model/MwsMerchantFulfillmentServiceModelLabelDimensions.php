<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelLabelDimensions
 * 
 * @property	float	$Length
 * @property	float	$Width
 * @property	string	$Unit
 */
class MwsMerchantFulfillmentServiceModelLabelDimensions extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Length' => array('FieldValue' => null, 'FieldType' => 'float'), 'Width' => array('FieldValue' => null, 'FieldType' => 'float'), 'Unit' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Length property.
     *
     * @return \float Length.
     */
    public function getLength()
    {
        return $this->_fields['Length']['FieldValue'];
    }
    /**
     * Set the value of the Length property.
     *
     * @param float length
     * @return $this instance
     */
    public function setLength($value)
    {
        $this->_fields['Length']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Length is set.
     *
     * @return true if Length is set.
     */
    public function isSetLength()
    {
        return !is_null($this->_fields['Length']['FieldValue']);
    }
    /**
     * Set the value of Length, return this.
     *
     * @param float $Length
     * @return $this
     */
    public function withLength($Length)
    {
        $this->setLength($Length);
        return $this;
    }
    /**
     * Get the value of the Width property.
     *
     * @return \float Width.
     */
    public function getWidth()
    {
        return $this->_fields['Width']['FieldValue'];
    }
    /**
     * Set the value of the Width property.
     *
     * @param float width
     * @return $this instance
     */
    public function setWidth($value)
    {
        $this->_fields['Width']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Width is set.
     *
     * @return true if Width is set.
     */
    public function isSetWidth()
    {
        return !is_null($this->_fields['Width']['FieldValue']);
    }
    /**
     * Set the value of Width, return this.
     *
     * @param float $Width
     * @return $this
     */
    public function withWidth($Width)
    {
        $this->setWidth($Width);
        return $this;
    }
    /**
     * Get the value of the Unit property.
     *
     * @return \string Unit.
     */
    public function getUnit()
    {
        return $this->_fields['Unit']['FieldValue'];
    }
    /**
     * Set the value of the Unit property.
     *
     * @param string unit
     * @return $this instance
     */
    public function setUnit($value)
    {
        $this->_fields['Unit']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Unit is set.
     *
     * @return true if Unit is set.
     */
    public function isSetUnit()
    {
        return !is_null($this->_fields['Unit']['FieldValue']);
    }
    /**
     * Set the value of Unit, return this.
     *
     * @param string $Unit
     * @return $this
     */
    public function withUnit($Unit)
    {
        $this->setUnit($Unit);
        return $this;
    }
}