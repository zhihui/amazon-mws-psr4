<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyFeesEstimateRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateRequestList	$FeesEstimateRequestList
 */
class MarketplaceWebServiceProductsModelGetMyFeesEstimateRequest extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeesEstimateRequestList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateRequestList::class));
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
     * Get the value of the FeesEstimateRequestList property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateRequestList FeesEstimateRequestList.
     */
    public function getFeesEstimateRequestList()
    {
        return $this->_fields['FeesEstimateRequestList']['FieldValue'];
    }
    /**
     * Set the value of the FeesEstimateRequestList property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateRequestList feesEstimateRequestList
     * @return $this instance
     */
    public function setFeesEstimateRequestList($value)
    {
        $this->_fields['FeesEstimateRequestList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeesEstimateRequestList is set.
     *
     * @return true if FeesEstimateRequestList is set.
     */
    public function isSetFeesEstimateRequestList()
    {
        return !is_null($this->_fields['FeesEstimateRequestList']['FieldValue']);
    }
    /**
     * Set the value of FeesEstimateRequestList, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateRequestList $FeesEstimateRequestList
     * @return $this
     */
    public function withFeesEstimateRequestList($FeesEstimateRequestList)
    {
        $this->setFeesEstimateRequestList($FeesEstimateRequestList);
        return $this;
    }
}