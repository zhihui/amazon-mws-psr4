<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\FBAFeeds;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;

/**
 * OrderAdjustmentAdjustedItemPromotionAdjustments
 *
 *
 * @prop	string	PromotionClaimCode	6-12 characters
 * @prop	string	MerchantPromotionID	max 80 characters
 * @prop	MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList	Component	
 */
class MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustments extends MarketplaceWebServiceModel{
    public function __construct($data = null){
        $this->_fields = array(
            "PromotionClaimCode" => array('FieldValue' => null, 'FieldType' => 'string'),
            "MerchantPromotionID" => array('FieldValue' => null, 'FieldType' => 'string'),
            "Component" => array('FieldValue' => null, 'FieldType' => MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList::class),
        );
        parent::__construct($data);
    }
    /**
     * Gets the value of the PromotionClaimCode property.
     * 
     * @return string PromotionClaimCode
     */
    public function getPromotionClaimCode()
    {
        return $this->_fields["PromotionClaimCode"]["FieldValue"];
    }
    /**
     * Sets the value of the PromotionClaimCode property.
     * 
     * @param string PromotionClaimCode 6-12 characters
     * @return $this 
     */
    public function setPromotionClaimCode($value)
    {
        $this->_fields["PromotionClaimCode"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of PromotionClaimCode, return this.
     *
     * @param string $PromotionClaimCode 6-12 characters
     * @return $this
     */
    public function withPromotionClaimCode($PromotionClaimCode)
    {
        $this->setPromotionClaimCode($PromotionClaimCode);
        return $this;
    }
    /**
     * Checks if PromotionClaimCode is set
     * 
     * @return bool true if PromotionClaimCode  is set
     */
    public function isSetPromotionClaimCode()
    {
        return !is_null($this->_fields["PromotionClaimCode"]["FieldValue"]);
    }
    /**
     * Gets the value of the MerchantPromotionID property.
     * 
     * @return string MerchantPromotionID
     */
    public function getMerchantPromotionID()
    {
        return $this->_fields["MerchantPromotionID"]["FieldValue"];
    }
    /**
     * Sets the value of the MerchantPromotionID property.
     * 
     * @param string MerchantPromotionID max 80 characters
     * @return $this 
     */
    public function setMerchantPromotionID($value)
    {
        $this->_fields["MerchantPromotionID"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of MerchantPromotionID, return this.
     *
     * @param string $MerchantPromotionID max 80 characters
     * @return $this
     */
    public function withMerchantPromotionID($MerchantPromotionID)
    {
        $this->setMerchantPromotionID($MerchantPromotionID);
        return $this;
    }
    /**
     * Checks if MerchantPromotionID is set
     * 
     * @return bool true if MerchantPromotionID  is set
     */
    public function isSetMerchantPromotionID()
    {
        return !is_null($this->_fields["MerchantPromotionID"]["FieldValue"]);
    }
    /**
     * Gets the value of the Component property.
     * 
     * @return MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList Component
     */
    public function getComponent()
    {
        return $this->_fields["Component"]["FieldValue"];
    }
    /**
     * Sets the value of the Component property.
     * 
     * @param MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList Component 
     * @return $this 
     */
    public function setComponent($value)
    {
        $this->_fields["Component"]["FieldValue"] = $value;
        return $this;
    }
    /**
     * Set the value of Component, return this.
     *
     * @param MarketplaceWebServiceModelFBAFeedsOrderAdjustmentAdjustedItemPromotionAdjustmentsComponentList $Component 
     * @return $this
     */
    public function withComponent($Component)
    {
        $this->setComponent($Component);
        return $this;
    }
    /**
     * Checks if Component is set
     * 
     * @return bool true if Component  is set
     */
    public function isSetComponent()
    {
        return !is_null($this->_fields["Component"]["FieldValue"]);
    }
}
