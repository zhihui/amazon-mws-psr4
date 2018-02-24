<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelDirectPayment
 * 
 * @property	string	$DirectPaymentType
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$DirectPaymentAmount
 */
class MwsFinancesServiceModelDirectPayment extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('DirectPaymentType' => array('FieldValue' => null, 'FieldType' => 'string'), 'DirectPaymentAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the DirectPaymentType property.
     *
     * @return String DirectPaymentType.
     */
    public function getDirectPaymentType()
    {
        return $this->_fields['DirectPaymentType']['FieldValue'];
    }
    /**
     * Set the value of the DirectPaymentType property.
     *
     * @param string directPaymentType
     * @return $this 
     */
    public function setDirectPaymentType($value)
    {
        $this->_fields['DirectPaymentType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DirectPaymentType is set.
     *
     * @return true if DirectPaymentType is set.
     */
    public function isSetDirectPaymentType()
    {
        return !is_null($this->_fields['DirectPaymentType']['FieldValue']);
    }
    /**
     * Set the value of DirectPaymentType, return this.
     *
     * @param directPaymentType
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDirectPaymentType($value)
    {
        $this->setDirectPaymentType($value);
        return $this;
    }
    /**
     * Get the value of the DirectPaymentAmount property.
     *
     * @return Currency DirectPaymentAmount.
     */
    public function getDirectPaymentAmount()
    {
        return $this->_fields['DirectPaymentAmount']['FieldValue'];
    }
    /**
     * Set the value of the DirectPaymentAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency directPaymentAmount
     * @return $this 
     */
    public function setDirectPaymentAmount($value)
    {
        $this->_fields['DirectPaymentAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DirectPaymentAmount is set.
     *
     * @return true if DirectPaymentAmount is set.
     */
    public function isSetDirectPaymentAmount()
    {
        return !is_null($this->_fields['DirectPaymentAmount']['FieldValue']);
    }
    /**
     * Set the value of DirectPaymentAmount, return this.
     *
     * @param directPaymentAmount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withDirectPaymentAmount($value)
    {
        $this->setDirectPaymentAmount($value);
        return $this;
    }
}