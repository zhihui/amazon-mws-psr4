<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelLowestOfferListingType
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelQualifiersType	$Qualifiers
 * @property	int	$NumberOfOfferListingsConsidered
 * @property	int	$SellerFeedbackCount
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType	$Price
 * @property	string	$MultipleOffersAtLowestPrice
 */
class MarketplaceWebServiceProductsModelLowestOfferListingType extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Qualifiers' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelQualifiersType::class), 'NumberOfOfferListingsConsidered' => array('FieldValue' => null, 'FieldType' => 'int'), 'SellerFeedbackCount' => array('FieldValue' => null, 'FieldType' => 'int'), 'Price' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType::class), 'MultipleOffersAtLowestPrice' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Qualifiers property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelQualifiersType Qualifiers.
     */
    public function getQualifiers()
    {
        return $this->_fields['Qualifiers']['FieldValue'];
    }
    /**
     * Set the value of the Qualifiers property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelQualifiersType qualifiers
     * @return $this instance
     */
    public function setQualifiers($value)
    {
        $this->_fields['Qualifiers']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Qualifiers is set.
     *
     * @return true if Qualifiers is set.
     */
    public function isSetQualifiers()
    {
        return !is_null($this->_fields['Qualifiers']['FieldValue']);
    }
    /**
     * Set the value of Qualifiers, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelQualifiersType $Qualifiers
     * @return $this
     */
    public function withQualifiers($Qualifiers)
    {
        $this->setQualifiers($Qualifiers);
        return $this;
    }
    /**
     * Get the value of the NumberOfOfferListingsConsidered property.
     *
     * @return \int NumberOfOfferListingsConsidered.
     */
    public function getNumberOfOfferListingsConsidered()
    {
        return $this->_fields['NumberOfOfferListingsConsidered']['FieldValue'];
    }
    /**
     * Set the value of the NumberOfOfferListingsConsidered property.
     *
     * @param int numberOfOfferListingsConsidered
     * @return $this instance
     */
    public function setNumberOfOfferListingsConsidered($value)
    {
        $this->_fields['NumberOfOfferListingsConsidered']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if NumberOfOfferListingsConsidered is set.
     *
     * @return true if NumberOfOfferListingsConsidered is set.
     */
    public function isSetNumberOfOfferListingsConsidered()
    {
        return !is_null($this->_fields['NumberOfOfferListingsConsidered']['FieldValue']);
    }
    /**
     * Set the value of NumberOfOfferListingsConsidered, return this.
     *
     * @param int $NumberOfOfferListingsConsidered
     * @return $this
     */
    public function withNumberOfOfferListingsConsidered($NumberOfOfferListingsConsidered)
    {
        $this->setNumberOfOfferListingsConsidered($NumberOfOfferListingsConsidered);
        return $this;
    }
    /**
     * Get the value of the SellerFeedbackCount property.
     *
     * @return int SellerFeedbackCount.
     */
    public function getSellerFeedbackCount()
    {
        return $this->_fields['SellerFeedbackCount']['FieldValue'];
    }
    /**
     * Set the value of the SellerFeedbackCount property.
     *
     * @param int sellerFeedbackCount
     * @return $this instance
     */
    public function setSellerFeedbackCount($value)
    {
        $this->_fields['SellerFeedbackCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerFeedbackCount is set.
     *
     * @return true if SellerFeedbackCount is set.
     */
    public function isSetSellerFeedbackCount()
    {
        return !is_null($this->_fields['SellerFeedbackCount']['FieldValue']);
    }
    /**
     * Set the value of SellerFeedbackCount, return this.
     *
     * @param int $SellerFeedbackCount
     * @return $this
     */
    public function withSellerFeedbackCount($SellerFeedbackCount)
    {
        $this->setSellerFeedbackCount($SellerFeedbackCount);
        return $this;
    }
    /**
     * Get the value of the Price property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType Price.
     */
    public function getPrice()
    {
        return $this->_fields['Price']['FieldValue'];
    }
    /**
     * Set the value of the Price property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType price
     * @return $this instance
     */
    public function setPrice($value)
    {
        $this->_fields['Price']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Price is set.
     *
     * @return true if Price is set.
     */
    public function isSetPrice()
    {
        return !is_null($this->_fields['Price']['FieldValue']);
    }
    /**
     * Set the value of Price, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelPriceType $Price
     * @return $this
     */
    public function withPrice($Price)
    {
        $this->setPrice($Price);
        return $this;
    }
    /**
     * Get the value of the MultipleOffersAtLowestPrice property.
     *
     * @return \string MultipleOffersAtLowestPrice.
     */
    public function getMultipleOffersAtLowestPrice()
    {
        return $this->_fields['MultipleOffersAtLowestPrice']['FieldValue'];
    }
    /**
     * Set the value of the MultipleOffersAtLowestPrice property.
     *
     * @param string multipleOffersAtLowestPrice
     * @return $this instance
     */
    public function setMultipleOffersAtLowestPrice($value)
    {
        $this->_fields['MultipleOffersAtLowestPrice']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MultipleOffersAtLowestPrice is set.
     *
     * @return true if MultipleOffersAtLowestPrice is set.
     */
    public function isSetMultipleOffersAtLowestPrice()
    {
        return !is_null($this->_fields['MultipleOffersAtLowestPrice']['FieldValue']);
    }
    /**
     * Set the value of MultipleOffersAtLowestPrice, return this.
     *
     * @param string $MultipleOffersAtLowestPrice
     * @return $this
     */
    public function withMultipleOffersAtLowestPrice($MultipleOffersAtLowestPrice)
    {
        $this->setMultipleOffersAtLowestPrice($MultipleOffersAtLowestPrice);
        return $this;
    }
}