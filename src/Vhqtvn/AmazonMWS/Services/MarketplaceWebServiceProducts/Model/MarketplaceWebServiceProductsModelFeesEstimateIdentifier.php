<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateIdentifier
 * 
 * @property	string	$MarketplaceId
 * @property	string	$SellerId
 * @property	string	$IdType
 * @property	string	$IdValue
 * @property	bool	$IsAmazonFulfilled
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceToEstimateFees	$PriceToEstimateFees
 * @property	string	$SellerInputIdentifier
 */
class MarketplaceWebServiceProductsModelFeesEstimateIdentifier extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'IdType' => array('FieldValue' => null, 'FieldType' => 'string'), 'IdValue' => array('FieldValue' => null, 'FieldType' => 'string'), 'IsAmazonFulfilled' => array('FieldValue' => null, 'FieldType' => 'bool'), 'PriceToEstimateFees' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceToEstimateFees::class), 'SellerInputIdentifier' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
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
     * Get the value of the IdType property.
     *
     * @return \string IdType.
     */
    public function getIdType()
    {
        return $this->_fields['IdType']['FieldValue'];
    }
    /**
     * Set the value of the IdType property.
     *
     * @param string idType
     * @return $this instance
     */
    public function setIdType($value)
    {
        $this->_fields['IdType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IdType is set.
     *
     * @return true if IdType is set.
     */
    public function isSetIdType()
    {
        return !is_null($this->_fields['IdType']['FieldValue']);
    }
    /**
     * Set the value of IdType, return this.
     *
     * @param string $IdType
     * @return $this
     */
    public function withIdType($IdType)
    {
        $this->setIdType($IdType);
        return $this;
    }
    /**
     * Get the value of the IdValue property.
     *
     * @return \string IdValue.
     */
    public function getIdValue()
    {
        return $this->_fields['IdValue']['FieldValue'];
    }
    /**
     * Set the value of the IdValue property.
     *
     * @param string idValue
     * @return $this instance
     */
    public function setIdValue($value)
    {
        $this->_fields['IdValue']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IdValue is set.
     *
     * @return true if IdValue is set.
     */
    public function isSetIdValue()
    {
        return !is_null($this->_fields['IdValue']['FieldValue']);
    }
    /**
     * Set the value of IdValue, return this.
     *
     * @param string $IdValue
     * @return $this
     */
    public function withIdValue($IdValue)
    {
        $this->setIdValue($IdValue);
        return $this;
    }
    /**
     * Check the value of IsAmazonFulfilled.
     *
     * @return true if IsAmazonFulfilled is set to true.
     */
    public function isIsAmazonFulfilled()
    {
        return !is_null($this->_fields['IsAmazonFulfilled']['FieldValue']) && $this->_fields['IsAmazonFulfilled']['FieldValue'];
    }
    /**
     * Get the value of the IsAmazonFulfilled property.
     *
     * @return \bool IsAmazonFulfilled.
     */
    public function getIsAmazonFulfilled()
    {
        return $this->_fields['IsAmazonFulfilled']['FieldValue'];
    }
    /**
     * Set the value of the IsAmazonFulfilled property.
     *
     * @param bool isAmazonFulfilled
     * @return $this instance
     */
    public function setIsAmazonFulfilled($value)
    {
        $this->_fields['IsAmazonFulfilled']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if IsAmazonFulfilled is set.
     *
     * @return true if IsAmazonFulfilled is set.
     */
    public function isSetIsAmazonFulfilled()
    {
        return !is_null($this->_fields['IsAmazonFulfilled']['FieldValue']);
    }
    /**
     * Set the value of IsAmazonFulfilled, return this.
     *
     * @param bool $IsAmazonFulfilled
     * @return $this
     */
    public function withIsAmazonFulfilled($IsAmazonFulfilled)
    {
        $this->setIsAmazonFulfilled($IsAmazonFulfilled);
        return $this;
    }
    /**
     * Get the value of the PriceToEstimateFees property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceToEstimateFees PriceToEstimateFees.
     */
    public function getPriceToEstimateFees()
    {
        return $this->_fields['PriceToEstimateFees']['FieldValue'];
    }
    /**
     * Set the value of the PriceToEstimateFees property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceToEstimateFees priceToEstimateFees
     * @return $this instance
     */
    public function setPriceToEstimateFees($value)
    {
        $this->_fields['PriceToEstimateFees']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PriceToEstimateFees is set.
     *
     * @return true if PriceToEstimateFees is set.
     */
    public function isSetPriceToEstimateFees()
    {
        return !is_null($this->_fields['PriceToEstimateFees']['FieldValue']);
    }
    /**
     * Set the value of PriceToEstimateFees, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceToEstimateFees $PriceToEstimateFees
     * @return $this
     */
    public function withPriceToEstimateFees($PriceToEstimateFees)
    {
        $this->setPriceToEstimateFees($PriceToEstimateFees);
        return $this;
    }
    /**
     * Get the value of the SellerInputIdentifier property.
     *
     * @return \string SellerInputIdentifier.
     */
    public function getSellerInputIdentifier()
    {
        return $this->_fields['SellerInputIdentifier']['FieldValue'];
    }
    /**
     * Set the value of the SellerInputIdentifier property.
     *
     * @param string sellerInputIdentifier
     * @return $this instance
     */
    public function setSellerInputIdentifier($value)
    {
        $this->_fields['SellerInputIdentifier']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerInputIdentifier is set.
     *
     * @return true if SellerInputIdentifier is set.
     */
    public function isSetSellerInputIdentifier()
    {
        return !is_null($this->_fields['SellerInputIdentifier']['FieldValue']);
    }
    /**
     * Set the value of SellerInputIdentifier, return this.
     *
     * @param string $SellerInputIdentifier
     * @return $this
     */
    public function withSellerInputIdentifier($SellerInputIdentifier)
    {
        $this->setSellerInputIdentifier($SellerInputIdentifier);
        return $this;
    }
}