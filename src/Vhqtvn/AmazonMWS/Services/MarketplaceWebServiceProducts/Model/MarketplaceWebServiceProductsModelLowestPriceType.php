<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestPriceType
 * 
 * @property	string	$condition
 * @property	string	$fulfillmentChannel
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$LandedPrice
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$ListingPrice
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType	$Shipping
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints	$Points
 */
class MarketplaceWebServiceProductsModelLowestPriceType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('condition' => array('FieldValue' => null, 'FieldType' => '@string'), 'fulfillmentChannel' => array('FieldValue' => null, 'FieldType' => '@string'), 'LandedPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'ListingPrice' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'Shipping' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType::class), 'Points' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the condition property.
     *
     * @return \string condition.
     */
    public function getcondition()
    {
        return $this->_fields['condition']['FieldValue'];
    }
    /**
     * Set the value of the condition property.
     *
     * @param string condition
     * @return $this instance
     */
    public function setcondition($value)
    {
        $this->_fields['condition']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if condition is set.
     *
     * @return true if condition is set.
     */
    public function isSetcondition()
    {
        return !is_null($this->_fields['condition']['FieldValue']);
    }
    /**
     * Set the value of condition, return this.
     *
     * @param string $condition
     * @return $this
     */
    public function withcondition($condition)
    {
        $this->setcondition($condition);
        return $this;
    }
    /**
     * Get the value of the fulfillmentChannel property.
     *
     * @return \string fulfillmentChannel.
     */
    public function getfulfillmentChannel()
    {
        return $this->_fields['fulfillmentChannel']['FieldValue'];
    }
    /**
     * Set the value of the fulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return $this instance
     */
    public function setfulfillmentChannel($value)
    {
        $this->_fields['fulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if fulfillmentChannel is set.
     *
     * @return true if fulfillmentChannel is set.
     */
    public function isSetfulfillmentChannel()
    {
        return !is_null($this->_fields['fulfillmentChannel']['FieldValue']);
    }
    /**
     * Set the value of fulfillmentChannel, return this.
     *
     * @param string $fulfillmentChannel
     * @return $this
     */
    public function withfulfillmentChannel($fulfillmentChannel)
    {
        $this->setfulfillmentChannel($fulfillmentChannel);
        return $this;
    }
    /**
     * Get the value of the LandedPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType LandedPrice.
     */
    public function getLandedPrice()
    {
        return $this->_fields['LandedPrice']['FieldValue'];
    }
    /**
     * Set the value of the LandedPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType landedPrice
     * @return $this instance
     */
    public function setLandedPrice($value)
    {
        $this->_fields['LandedPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if LandedPrice is set.
     *
     * @return true if LandedPrice is set.
     */
    public function isSetLandedPrice()
    {
        return !is_null($this->_fields['LandedPrice']['FieldValue']);
    }
    /**
     * Set the value of LandedPrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $LandedPrice
     * @return $this
     */
    public function withLandedPrice($LandedPrice)
    {
        $this->setLandedPrice($LandedPrice);
        return $this;
    }
    /**
     * Get the value of the ListingPrice property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType ListingPrice.
     */
    public function getListingPrice()
    {
        return $this->_fields['ListingPrice']['FieldValue'];
    }
    /**
     * Set the value of the ListingPrice property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType listingPrice
     * @return $this instance
     */
    public function setListingPrice($value)
    {
        $this->_fields['ListingPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ListingPrice is set.
     *
     * @return true if ListingPrice is set.
     */
    public function isSetListingPrice()
    {
        return !is_null($this->_fields['ListingPrice']['FieldValue']);
    }
    /**
     * Set the value of ListingPrice, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $ListingPrice
     * @return $this
     */
    public function withListingPrice($ListingPrice)
    {
        $this->setListingPrice($ListingPrice);
        return $this;
    }
    /**
     * Get the value of the Shipping property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType Shipping.
     */
    public function getShipping()
    {
        return $this->_fields['Shipping']['FieldValue'];
    }
    /**
     * Set the value of the Shipping property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType shipping
     * @return $this instance
     */
    public function setShipping($value)
    {
        $this->_fields['Shipping']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Shipping is set.
     *
     * @return true if Shipping is set.
     */
    public function isSetShipping()
    {
        return !is_null($this->_fields['Shipping']['FieldValue']);
    }
    /**
     * Set the value of Shipping, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelMoneyType $Shipping
     * @return $this
     */
    public function withShipping($Shipping)
    {
        $this->setShipping($Shipping);
        return $this;
    }
    /**
     * Get the value of the Points property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints Points.
     */
    public function getPoints()
    {
        return $this->_fields['Points']['FieldValue'];
    }
    /**
     * Set the value of the Points property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints points
     * @return $this instance
     */
    public function setPoints($value)
    {
        $this->_fields['Points']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Points is set.
     *
     * @return true if Points is set.
     */
    public function isSetPoints()
    {
        return !is_null($this->_fields['Points']['FieldValue']);
    }
    /**
     * Set the value of Points, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPoints $Points
     * @return $this
     */
    public function withPoints($Points)
    {
        $this->setPoints($Points);
        return $this;
    }
}