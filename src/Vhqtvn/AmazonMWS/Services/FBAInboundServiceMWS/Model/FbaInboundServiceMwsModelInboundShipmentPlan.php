<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlan
 * 
 * @property	string	$ShipmentId
 * @property	string	$DestinationFulfillmentCenterId
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress	$ShipToAddress
 * @property	string	$LabelPrepType
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanItemList	$Items
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails	$EstimatedBoxContentsFee
 */
class FbaInboundServiceMwsModelInboundShipmentPlan extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'), 'DestinationFulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ShipToAddress' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress::class), 'LabelPrepType' => array('FieldValue' => null, 'FieldType' => 'string'), 'Items' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanItemList::class), 'EstimatedBoxContentsFee' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the ShipmentId property.
     *
     * @return \string ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }
    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @return $this instance
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipmentId is set.
     *
     * @return true if ShipmentId is set.
     */
    public function isSetShipmentId()
    {
        return !is_null($this->_fields['ShipmentId']['FieldValue']);
    }
    /**
     * Set the value of ShipmentId, return this.
     *
     * @param string $ShipmentId
     * @return $this
     */
    public function withShipmentId($ShipmentId)
    {
        $this->setShipmentId($ShipmentId);
        return $this;
    }
    /**
     * Get the value of the DestinationFulfillmentCenterId property.
     *
     * @return \string DestinationFulfillmentCenterId.
     */
    public function getDestinationFulfillmentCenterId()
    {
        return $this->_fields['DestinationFulfillmentCenterId']['FieldValue'];
    }
    /**
     * Set the value of the DestinationFulfillmentCenterId property.
     *
     * @param string destinationFulfillmentCenterId
     * @return $this instance
     */
    public function setDestinationFulfillmentCenterId($value)
    {
        $this->_fields['DestinationFulfillmentCenterId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if DestinationFulfillmentCenterId is set.
     *
     * @return true if DestinationFulfillmentCenterId is set.
     */
    public function isSetDestinationFulfillmentCenterId()
    {
        return !is_null($this->_fields['DestinationFulfillmentCenterId']['FieldValue']);
    }
    /**
     * Set the value of DestinationFulfillmentCenterId, return this.
     *
     * @param string $DestinationFulfillmentCenterId
     * @return $this
     */
    public function withDestinationFulfillmentCenterId($DestinationFulfillmentCenterId)
    {
        $this->setDestinationFulfillmentCenterId($DestinationFulfillmentCenterId);
        return $this;
    }
    /**
     * Get the value of the ShipToAddress property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress ShipToAddress.
     */
    public function getShipToAddress()
    {
        return $this->_fields['ShipToAddress']['FieldValue'];
    }
    /**
     * Set the value of the ShipToAddress property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress shipToAddress
     * @return $this instance
     */
    public function setShipToAddress($value)
    {
        $this->_fields['ShipToAddress']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShipToAddress is set.
     *
     * @return true if ShipToAddress is set.
     */
    public function isSetShipToAddress()
    {
        return !is_null($this->_fields['ShipToAddress']['FieldValue']);
    }
    /**
     * Set the value of ShipToAddress, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelAddress $ShipToAddress
     * @return $this
     */
    public function withShipToAddress($ShipToAddress)
    {
        $this->setShipToAddress($ShipToAddress);
        return $this;
    }
    /**
     * Get the value of the LabelPrepType property.
     *
     * @return \string LabelPrepType.
     */
    public function getLabelPrepType()
    {
        return $this->_fields['LabelPrepType']['FieldValue'];
    }
    /**
     * Set the value of the LabelPrepType property.
     *
     * @param string labelPrepType
     * @return $this instance
     */
    public function setLabelPrepType($value)
    {
        $this->_fields['LabelPrepType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LabelPrepType is set.
     *
     * @return true if LabelPrepType is set.
     */
    public function isSetLabelPrepType()
    {
        return !is_null($this->_fields['LabelPrepType']['FieldValue']);
    }
    /**
     * Set the value of LabelPrepType, return this.
     *
     * @param string $LabelPrepType
     * @return $this
     */
    public function withLabelPrepType($LabelPrepType)
    {
        $this->setLabelPrepType($LabelPrepType);
        return $this;
    }
    /**
     * Get the value of the Items property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanItemList Items.
     */
    public function getItems()
    {
        return $this->_fields['Items']['FieldValue'];
    }
    /**
     * Set the value of the Items property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanItemList items
     * @return $this instance
     */
    public function setItems($value)
    {
        $this->_fields['Items']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Items is set.
     *
     * @return true if Items is set.
     */
    public function isSetItems()
    {
        return !is_null($this->_fields['Items']['FieldValue']);
    }
    /**
     * Set the value of Items, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelInboundShipmentPlanItemList $Items
     * @return $this
     */
    public function withItems($Items)
    {
        $this->setItems($Items);
        return $this;
    }
    /**
     * Get the value of the EstimatedBoxContentsFee property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails EstimatedBoxContentsFee.
     */
    public function getEstimatedBoxContentsFee()
    {
        return $this->_fields['EstimatedBoxContentsFee']['FieldValue'];
    }
    /**
     * Set the value of the EstimatedBoxContentsFee property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails estimatedBoxContentsFee
     * @return $this instance
     */
    public function setEstimatedBoxContentsFee($value)
    {
        $this->_fields['EstimatedBoxContentsFee']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if EstimatedBoxContentsFee is set.
     *
     * @return true if EstimatedBoxContentsFee is set.
     */
    public function isSetEstimatedBoxContentsFee()
    {
        return !is_null($this->_fields['EstimatedBoxContentsFee']['FieldValue']);
    }
    /**
     * Set the value of EstimatedBoxContentsFee, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelBoxContentsFeeDetails $EstimatedBoxContentsFee
     * @return $this
     */
    public function withEstimatedBoxContentsFee($EstimatedBoxContentsFee)
    {
        $this->setEstimatedBoxContentsFee($EstimatedBoxContentsFee);
        return $this;
    }
}