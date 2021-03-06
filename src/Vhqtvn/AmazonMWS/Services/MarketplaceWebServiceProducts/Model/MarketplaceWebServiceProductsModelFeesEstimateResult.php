<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateResult
 * 
 * @property	string	$Status
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateIdentifier	$FeesEstimateIdentifier
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimate	$FeesEstimate
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError	$Error
 */
class MarketplaceWebServiceProductsModelFeesEstimateResult extends MarketplaceWebServiceProductsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Status' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeesEstimateIdentifier' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateIdentifier::class), 'FeesEstimate' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimate::class), 'Error' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Status property.
     *
     * @return \string Status.
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }
    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @return $this instance
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Status is set.
     *
     * @return true if Status is set.
     */
    public function isSetStatus()
    {
        return !is_null($this->_fields['Status']['FieldValue']);
    }
    /**
     * Set the value of Status, return this.
     *
     * @param string $Status
     * @return $this
     */
    public function withStatus($Status)
    {
        $this->setStatus($Status);
        return $this;
    }
    /**
     * Get the value of the FeesEstimateIdentifier property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateIdentifier FeesEstimateIdentifier.
     */
    public function getFeesEstimateIdentifier()
    {
        return $this->_fields['FeesEstimateIdentifier']['FieldValue'];
    }
    /**
     * Set the value of the FeesEstimateIdentifier property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateIdentifier feesEstimateIdentifier
     * @return $this instance
     */
    public function setFeesEstimateIdentifier($value)
    {
        $this->_fields['FeesEstimateIdentifier']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeesEstimateIdentifier is set.
     *
     * @return true if FeesEstimateIdentifier is set.
     */
    public function isSetFeesEstimateIdentifier()
    {
        return !is_null($this->_fields['FeesEstimateIdentifier']['FieldValue']);
    }
    /**
     * Set the value of FeesEstimateIdentifier, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimateIdentifier $FeesEstimateIdentifier
     * @return $this
     */
    public function withFeesEstimateIdentifier($FeesEstimateIdentifier)
    {
        $this->setFeesEstimateIdentifier($FeesEstimateIdentifier);
        return $this;
    }
    /**
     * Get the value of the FeesEstimate property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimate FeesEstimate.
     */
    public function getFeesEstimate()
    {
        return $this->_fields['FeesEstimate']['FieldValue'];
    }
    /**
     * Set the value of the FeesEstimate property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimate feesEstimate
     * @return $this instance
     */
    public function setFeesEstimate($value)
    {
        $this->_fields['FeesEstimate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeesEstimate is set.
     *
     * @return true if FeesEstimate is set.
     */
    public function isSetFeesEstimate()
    {
        return !is_null($this->_fields['FeesEstimate']['FieldValue']);
    }
    /**
     * Set the value of FeesEstimate, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelFeesEstimate $FeesEstimate
     * @return $this
     */
    public function withFeesEstimate($FeesEstimate)
    {
        $this->setFeesEstimate($FeesEstimate);
        return $this;
    }
    /**
     * Get the value of the Error property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError Error.
     */
    public function getError()
    {
        return $this->_fields['Error']['FieldValue'];
    }
    /**
     * Set the value of the Error property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError error
     * @return $this instance
     */
    public function setError($value)
    {
        $this->_fields['Error']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Error is set.
     *
     * @return true if Error is set.
     */
    public function isSetError()
    {
        return !is_null($this->_fields['Error']['FieldValue']);
    }
    /**
     * Set the value of Error, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelError $Error
     * @return $this
     */
    public function withError($Error)
    {
        $this->setError($Error);
        return $this;
    }
}