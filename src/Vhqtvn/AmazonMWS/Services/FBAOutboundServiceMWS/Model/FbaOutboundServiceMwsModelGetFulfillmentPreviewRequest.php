<?php

namespace Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\FbaOutboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelGetFulfillmentPreviewRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	string	$Marketplace
 * @property	string	$MarketplaceId
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress	$Address
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelGetFulfillmentPreviewItemList	$Items
 * @property	\Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelShippingSpeedCategoryList	$ShippingSpeedCategories
 * @property	bool	$IncludeCODFulfillmentPreview
 * @property	bool	$IncludeDeliveryWindows
 */
class FbaOutboundServiceMwsModelGetFulfillmentPreviewRequest extends FbaOutboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'Address' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress::class), 'Items' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelGetFulfillmentPreviewItemList::class), 'ShippingSpeedCategories' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelShippingSpeedCategoryList::class), 'IncludeCODFulfillmentPreview' => array('FieldValue' => null, 'FieldType' => 'bool'), 'IncludeDeliveryWindows' => array('FieldValue' => null, 'FieldType' => 'bool'));
        parent::__construct($data);
    }
    /**
     * Get the value of the SellerId property.
     *
     * @return \string SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }
    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return $this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }
    /**
     * Set the value of SellerId, return this.
     *
     * @param string $SellerId
     * @return $this
     */
    public function withSellerId($SellerId)
    {
        $this->setSellerId($SellerId);
        return $this;
    }
    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return \string MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }
    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return $this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }
    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param string $MWSAuthToken
     * @return $this
     */
    public function withMWSAuthToken($MWSAuthToken)
    {
        $this->setMWSAuthToken($MWSAuthToken);
        return $this;
    }
    /**
     * Get the value of the Marketplace property.
     *
     * @return \string Marketplace.
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }
    /**
     * Set the value of the Marketplace property.
     *
     * @param string marketplace
     * @return $this instance
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set.
     */
    public function isSetMarketplace()
    {
        return !is_null($this->_fields['Marketplace']['FieldValue']);
    }
    /**
     * Set the value of Marketplace, return this.
     *
     * @param string $Marketplace
     * @return $this
     */
    public function withMarketplace($Marketplace)
    {
        $this->setMarketplace($Marketplace);
        return $this;
    }
    /**
     * Get the value of the MarketplaceId property.
     *
     * @return \string MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return $this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param string $MarketplaceId
     * @return $this
     */
    public function withMarketplaceId($MarketplaceId)
    {
        $this->setMarketplaceId($MarketplaceId);
        return $this;
    }
    /**
     * Get the value of the Address property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress Address.
     */
    public function getAddress()
    {
        return $this->_fields['Address']['FieldValue'];
    }
    /**
     * Set the value of the Address property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress address
     * @return $this instance
     */
    public function setAddress($value)
    {
        $this->_fields['Address']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Address is set.
     *
     * @return true if Address is set.
     */
    public function isSetAddress()
    {
        return !is_null($this->_fields['Address']['FieldValue']);
    }
    /**
     * Set the value of Address, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelAddress $Address
     * @return $this
     */
    public function withAddress($Address)
    {
        $this->setAddress($Address);
        return $this;
    }
    /**
     * Get the value of the Items property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelGetFulfillmentPreviewItemList Items.
     */
    public function getItems()
    {
        return $this->_fields['Items']['FieldValue'];
    }
    /**
     * Set the value of the Items property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelGetFulfillmentPreviewItemList items
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
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelGetFulfillmentPreviewItemList $Items
     * @return $this
     */
    public function withItems($Items)
    {
        $this->setItems($Items);
        return $this;
    }
    /**
     * Get the value of the ShippingSpeedCategories property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelShippingSpeedCategoryList ShippingSpeedCategories.
     */
    public function getShippingSpeedCategories()
    {
        return $this->_fields['ShippingSpeedCategories']['FieldValue'];
    }
    /**
     * Set the value of the ShippingSpeedCategories property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelShippingSpeedCategoryList shippingSpeedCategories
     * @return $this instance
     */
    public function setShippingSpeedCategories($value)
    {
        $this->_fields['ShippingSpeedCategories']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ShippingSpeedCategories is set.
     *
     * @return true if ShippingSpeedCategories is set.
     */
    public function isSetShippingSpeedCategories()
    {
        return !is_null($this->_fields['ShippingSpeedCategories']['FieldValue']);
    }
    /**
     * Set the value of ShippingSpeedCategories, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAOutboundServiceMWS\Model\FbaOutboundServiceMwsModelShippingSpeedCategoryList $ShippingSpeedCategories
     * @return $this
     */
    public function withShippingSpeedCategories($ShippingSpeedCategories)
    {
        $this->setShippingSpeedCategories($ShippingSpeedCategories);
        return $this;
    }
    /**
     * Check the value of IncludeCODFulfillmentPreview.
     *
     * @return true if IncludeCODFulfillmentPreview is set to true.
     */
    public function isIncludeCODFulfillmentPreview()
    {
        return !is_null($this->_fields['IncludeCODFulfillmentPreview']['FieldValue']) && $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'];
    }
    /**
     * Get the value of the IncludeCODFulfillmentPreview property.
     *
     * @return \bool IncludeCODFulfillmentPreview.
     */
    public function getIncludeCODFulfillmentPreview()
    {
        return $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'];
    }
    /**
     * Set the value of the IncludeCODFulfillmentPreview property.
     *
     * @param bool includeCODFulfillmentPreview
     * @return $this instance
     */
    public function setIncludeCODFulfillmentPreview($value)
    {
        $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IncludeCODFulfillmentPreview is set.
     *
     * @return true if IncludeCODFulfillmentPreview is set.
     */
    public function isSetIncludeCODFulfillmentPreview()
    {
        return !is_null($this->_fields['IncludeCODFulfillmentPreview']['FieldValue']);
    }
    /**
     * Set the value of IncludeCODFulfillmentPreview, return this.
     *
     * @param bool $IncludeCODFulfillmentPreview
     * @return $this
     */
    public function withIncludeCODFulfillmentPreview($IncludeCODFulfillmentPreview)
    {
        $this->setIncludeCODFulfillmentPreview($IncludeCODFulfillmentPreview);
        return $this;
    }
    /**
     * Check the value of IncludeDeliveryWindows.
     *
     * @return true if IncludeDeliveryWindows is set to true.
     */
    public function isIncludeDeliveryWindows()
    {
        return !is_null($this->_fields['IncludeDeliveryWindows']['FieldValue']) && $this->_fields['IncludeDeliveryWindows']['FieldValue'];
    }
    /**
     * Get the value of the IncludeDeliveryWindows property.
     *
     * @return \bool IncludeDeliveryWindows.
     */
    public function getIncludeDeliveryWindows()
    {
        return $this->_fields['IncludeDeliveryWindows']['FieldValue'];
    }
    /**
     * Set the value of the IncludeDeliveryWindows property.
     *
     * @param bool includeDeliveryWindows
     * @return $this instance
     */
    public function setIncludeDeliveryWindows($value)
    {
        $this->_fields['IncludeDeliveryWindows']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IncludeDeliveryWindows is set.
     *
     * @return true if IncludeDeliveryWindows is set.
     */
    public function isSetIncludeDeliveryWindows()
    {
        return !is_null($this->_fields['IncludeDeliveryWindows']['FieldValue']);
    }
    /**
     * Set the value of IncludeDeliveryWindows, return this.
     *
     * @param bool $IncludeDeliveryWindows
     * @return $this
     */
    public function withIncludeDeliveryWindows($IncludeDeliveryWindows)
    {
        $this->setIncludeDeliveryWindows($IncludeDeliveryWindows);
        return $this;
    }
}