<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelItem
 * 
 * @property	string	$OrderItemId
 * @property	int	$Quantity
 */
class MwsMerchantFulfillmentServiceModelItem extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('OrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Quantity' => array('FieldValue' => null, 'FieldType' => 'int'));
        parent::__construct($data);
    }
    /**
     * Get the value of the OrderItemId property.
     *
     * @return String OrderItemId.
     */
    public function getOrderItemId()
    {
        return $this->_fields['OrderItemId']['FieldValue'];
    }
    /**
     * Set the value of the OrderItemId property.
     *
     * @param string orderItemId
     * @return $this 
     */
    public function setOrderItemId($value)
    {
        $this->_fields['OrderItemId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if OrderItemId is set.
     *
     * @return true if OrderItemId is set.
     */
    public function isSetOrderItemId()
    {
        return !is_null($this->_fields['OrderItemId']['FieldValue']);
    }
    /**
     * Set the value of OrderItemId, return this.
     *
     * @param orderItemId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withOrderItemId($value)
    {
        $this->setOrderItemId($value);
        return $this;
    }
    /**
     * Get the value of the Quantity property.
     *
     * @return int Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }
    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @return $this 
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set.
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields['Quantity']['FieldValue']);
    }
    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return $this .
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }
}