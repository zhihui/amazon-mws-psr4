<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest
 * 
 * @property	string	$Marketplace
 * @property	string	$Merchant
 * @property	int	$MaxCount
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList	$ReportTypeList
 * @property	bool	$Acknowledged
 * @property	string	$AvailableFromDate
 * @property	string	$AvailableToDate
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList	$ReportRequestIdList
 */
class MarketplaceWebServiceModelGetReportListRequest extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>MaxCount: int</li>
     * <li>ReportTypeList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList</li>
     * <li>Acknowledged: bool</li>
     * <li>AvailableFromDate: string</li>
     * <li>AvailableToDate: string</li>
     * <li>ReportRequestIdList: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'), 'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'MaxCount' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportTypeList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelTypeList::class), 'Acknowledged' => array('FieldValue' => null, 'FieldType' => 'bool'), 'AvailableFromDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'AvailableToDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'ReportRequestIdList' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelIdList::class));
        parent::__construct($data);
    }
    /**
     * Gets the value of the Marketplace property.
     * 
     * @return string Marketplace
     */
    public function getMarketplace()
    {
        return $this->fields['Marketplace']['FieldValue'];
    }
    /**
     * Sets the value of the Marketplace property.
     * 
     * @param string Marketplace
     * @return $this 
     */
    public function setMarketplace($value)
    {
        $this->fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the Marketplace and returns this instance
     * 
     * @param string $value Marketplace
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest instance
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);
        return $this;
    }
    /**
     * Checks if Marketplace is set
     * 
     * @return bool true if Marketplace  is set
     */
    public function isSetMarketplace()
    {
        return !is_null($this->fields['Marketplace']['FieldValue']);
    }
    /**
     * Gets the value of the Merchant property.
     * 
     * @return string Merchant
     */
    public function getMerchant()
    {
        return $this->fields['Merchant']['FieldValue'];
    }
    /**
     * Sets the value of the Merchant property.
     * 
     * @param string Merchant
     * @return $this 
     */
    public function setMerchant($value)
    {
        $this->fields['Merchant']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the Merchant and returns this instance
     * 
     * @param string $value Merchant
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest instance
     */
    public function withMerchant($value)
    {
        $this->setMerchant($value);
        return $this;
    }
    /**
     * Checks if Merchant is set
     * 
     * @return bool true if Merchant  is set
     */
    public function isSetMerchant()
    {
        return !is_null($this->fields['Merchant']['FieldValue']);
    }
    /**
     * Gets the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->fields['MWSAuthToken']['FieldValue'];
    }
    /**
     * Sets the value of the MWSAuthToken property.
     *
     * @param string MWSAuthToken
     * @return $this 
     */
    public function setMWSAuthToken($value)
    {
        $this->fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the MWSAuthToken and returns this instance
     *
     * @param string $value MWSAuthToken
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }
    /**
     * Checks if MWSAuthToken is set
     *
     * @return bool true if MWSAuthToken  is set
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->fields['MWSAuthToken']['FieldValue']);
    }
    /**
     * Gets the value of the MaxCount property.
     * 
     * @return int MaxCount
     */
    public function getMaxCount()
    {
        return $this->fields['MaxCount']['FieldValue'];
    }
    /**
     * Sets the value of the MaxCount property.
     * 
     * @param int MaxCount
     * @return $this 
     */
    public function setMaxCount($value)
    {
        $this->fields['MaxCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the MaxCount and returns this instance
     * 
     * @param int $value MaxCount
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest instance
     */
    public function withMaxCount($value)
    {
        $this->setMaxCount($value);
        return $this;
    }
    /**
     * Checks if MaxCount is set
     * 
     * @return bool true if MaxCount  is set
     */
    public function isSetMaxCount()
    {
        return !is_null($this->fields['MaxCount']['FieldValue']);
    }
    /**
     * Gets the value of the ReportTypeList.
     * 
     * @return TypeList ReportTypeList
     */
    public function getReportTypeList()
    {
        return $this->fields['ReportTypeList']['FieldValue'];
    }
    /**
     * Sets the value of the ReportTypeList.
     * 
     * @param TypeList ReportTypeList
     * @return void
     */
    public function setReportTypeList($value)
    {
        $this->fields['ReportTypeList']['FieldValue'] = $value;
        return;
    }
    /**
     * Sets the value of the ReportTypeList  and returns this instance
     * 
     * @param TypeList $value ReportTypeList
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest instance
     */
    public function withReportTypeList($value)
    {
        $this->setReportTypeList($value);
        return $this;
    }
    /**
     * Checks if ReportTypeList  is set
     * 
     * @return bool true if ReportTypeList property is set
     */
    public function isSetReportTypeList()
    {
        return !is_null($this->fields['ReportTypeList']['FieldValue']);
    }
    /**
     * Gets the value of the Acknowledged property.
     * 
     * @return bool Acknowledged
     */
    public function getAcknowledged()
    {
        return $this->fields['Acknowledged']['FieldValue'];
    }
    /**
     * Sets the value of the Acknowledged property.
     * 
     * @param bool Acknowledged
     * @return $this 
     */
    public function setAcknowledged($value)
    {
        $this->fields['Acknowledged']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the Acknowledged and returns this instance
     * 
     * @param bool $value Acknowledged
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest instance
     */
    public function withAcknowledged($value)
    {
        $this->setAcknowledged($value);
        return $this;
    }
    /**
     * Checks if Acknowledged is set
     * 
     * @return bool true if Acknowledged  is set
     */
    public function isSetAcknowledged()
    {
        return !is_null($this->fields['Acknowledged']['FieldValue']);
    }
    /**
     * Gets the value of the AvailableFromDate property.
     * 
     * @return string AvailableFromDate
     */
    public function getAvailableFromDate()
    {
        return $this->fields['AvailableFromDate']['FieldValue'];
    }
    /**
     * Sets the value of the AvailableFromDate property.
     * 
     * @param string AvailableFromDate
     * @return $this 
     */
    public function setAvailableFromDate($value)
    {
        $this->fields['AvailableFromDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the AvailableFromDate and returns this instance
     * 
     * @param string $value AvailableFromDate
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest instance
     */
    public function withAvailableFromDate($value)
    {
        $this->setAvailableFromDate($value);
        return $this;
    }
    /**
     * Checks if AvailableFromDate is set
     * 
     * @return bool true if AvailableFromDate  is set
     */
    public function isSetAvailableFromDate()
    {
        return !is_null($this->fields['AvailableFromDate']['FieldValue']);
    }
    /**
     * Gets the value of the AvailableToDate property.
     * 
     * @return string AvailableToDate
     */
    public function getAvailableToDate()
    {
        return $this->fields['AvailableToDate']['FieldValue'];
    }
    /**
     * Sets the value of the AvailableToDate property.
     * 
     * @param string AvailableToDate
     * @return $this 
     */
    public function setAvailableToDate($value)
    {
        $this->fields['AvailableToDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Sets the value of the AvailableToDate and returns this instance
     * 
     * @param string $value AvailableToDate
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest instance
     */
    public function withAvailableToDate($value)
    {
        $this->setAvailableToDate($value);
        return $this;
    }
    /**
     * Checks if AvailableToDate is set
     * 
     * @return bool true if AvailableToDate  is set
     */
    public function isSetAvailableToDate()
    {
        return !is_null($this->fields['AvailableToDate']['FieldValue']);
    }
    /**
     * Gets the value of the ReportRequestIdList.
     * 
     * @return IdList ReportRequestIdList
     */
    public function getReportRequestIdList()
    {
        return $this->fields['ReportRequestIdList']['FieldValue'];
    }
    /**
     * Sets the value of the ReportRequestIdList.
     * 
     * @param IdList ReportRequestIdList
     * @return void
     */
    public function setReportRequestIdList($value)
    {
        $this->fields['ReportRequestIdList']['FieldValue'] = $value;
        return;
    }
    /**
     * Sets the value of the ReportRequestIdList  and returns this instance
     * 
     * @param IdList $value ReportRequestIdList
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetReportListRequest instance
     */
    public function withReportRequestIdList($value)
    {
        $this->setReportRequestIdList($value);
        return $this;
    }
    /**
     * Checks if ReportRequestIdList  is set
     * 
     * @return bool true if ReportRequestIdList property is set
     */
    public function isSetReportRequestIdList()
    {
        return !is_null($this->fields['ReportRequestIdList']['FieldValue']);
    }
}