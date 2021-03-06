<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelPerformanceBondRefundEvent
 * 
 * @property	string	$MarketplaceCountryCode
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$Amount
 * @property	\string[]	$ProductGroupList
 */
class MwsFinancesServiceModelPerformanceBondRefundEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('MarketplaceCountryCode' => array('FieldValue' => null, 'FieldType' => 'string'), 'Amount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class), 'ProductGroupList' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'ProductGroup'));
        parent::__construct($data);
    }
    /**
     * Get the value of the MarketplaceCountryCode property.
     *
     * @return \string MarketplaceCountryCode.
     */
    public function getMarketplaceCountryCode()
    {
        return $this->_fields['MarketplaceCountryCode']['FieldValue'];
    }
    /**
     * Set the value of the MarketplaceCountryCode property.
     *
     * @param string marketplaceCountryCode
     * @return $this instance
     */
    public function setMarketplaceCountryCode($value)
    {
        $this->_fields['MarketplaceCountryCode']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MarketplaceCountryCode is set.
     *
     * @return true if MarketplaceCountryCode is set.
     */
    public function isSetMarketplaceCountryCode()
    {
        return !is_null($this->_fields['MarketplaceCountryCode']['FieldValue']);
    }
    /**
     * Set the value of MarketplaceCountryCode, return this.
     *
     * @param string $MarketplaceCountryCode
     * @return $this
     */
    public function withMarketplaceCountryCode($MarketplaceCountryCode)
    {
        $this->setMarketplaceCountryCode($MarketplaceCountryCode);
        return $this;
    }
    /**
     * Get the value of the Amount property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }
    /**
     * Set the value of the Amount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency amount
     * @return $this instance
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set.
     */
    public function isSetAmount()
    {
        return !is_null($this->_fields['Amount']['FieldValue']);
    }
    /**
     * Set the value of Amount, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency $Amount
     * @return $this
     */
    public function withAmount($Amount)
    {
        $this->setAmount($Amount);
        return $this;
    }
    /**
     * Get the value of the ProductGroupList property.
     *
     * @return \string[] ProductGroupList.
     */
    public function getProductGroupList()
    {
        if ($this->_fields['ProductGroupList']['FieldValue'] == null) {
            $this->_fields['ProductGroupList']['FieldValue'] = array();
        }
        return $this->_fields['ProductGroupList']['FieldValue'];
    }
    /**
     * Set the value of the ProductGroupList property.
     *
     * @param array productGroupList
     * @return $this instance
     */
    public function setProductGroupList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ProductGroupList']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear ProductGroupList.
     */
    public function unsetProductGroupList()
    {
        $this->_fields['ProductGroupList']['FieldValue'] = array();
    }
    /**
     * Check to see if ProductGroupList is set.
     *
     * @return true if ProductGroupList is set.
     */
    public function isSetProductGroupList()
    {
        return !empty($this->_fields['ProductGroupList']['FieldValue']);
    }
    /**
     * Add values for ProductGroupList, return this.
     *
     * @param \string[] $ProductGroupList_array,...
     * @return $this
     */
    public function withProductGroupList(...$ProductGroupList_array)
    {
        foreach ($ProductGroupList_array as $ProductGroupList) {
            $this->_fields['ProductGroupList']['FieldValue'][] = $ProductGroupList;
        }
        return $this;
    }
}