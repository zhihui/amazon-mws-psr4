<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo
 * 
 * @property	string	$ReportId
 * @property	string	$ReportType
 * @property	string	$ReportRequestId
 * @property	string	$AvailableDate
 * @property	bool	$Acknowledged
 * @property	string	$AcknowledgedDate
 */
class MarketplaceWebServiceModelReportInfo extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelReportInfo
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReportId: string</li>
     * <li>ReportType: string</li>
     * <li>ReportRequestId: string</li>
     * <li>AvailableDate: string</li>
     * <li>Acknowledged: bool</li>
     * <li>AcknowledgedDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array('ReportId' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportType' => array('FieldValue' => null, 'FieldType' => 'string'), 'ReportRequestId' => array('FieldValue' => null, 'FieldType' => 'string'), 'AvailableDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'), 'Acknowledged' => array('FieldValue' => null, 'FieldType' => 'bool'), 'AcknowledgedDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'));
        parent::__construct($data);
    }
    /**
     * Gets the value of the ReportId property.
     * 
     * @return string ReportId
     */
    public function getReportId()
    {
        return $this->fields['ReportId']['FieldValue'];
    }
    /**
     * Sets the value of the ReportId property.
     * 
     * @param string ReportId
     * @return $this 
     */
    public function setReportId($value)
    {
        $this->fields['ReportId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of ReportId, return this.
     *
     * @param string $ReportId
     * @return $this
     */
    public function withReportId($ReportId)
    {
        $this->setReportId($ReportId);
        return $this;
    }
    /**
     * Checks if ReportId is set
     * 
     * @return bool true if ReportId  is set
     */
    public function isSetReportId()
    {
        return !is_null($this->fields['ReportId']['FieldValue']);
    }
    /**
     * Gets the value of the ReportType property.
     * 
     * @return string ReportType
     */
    public function getReportType()
    {
        return $this->fields['ReportType']['FieldValue'];
    }
    /**
     * Sets the value of the ReportType property.
     * 
     * @param string ReportType
     * @return $this 
     */
    public function setReportType($value)
    {
        $this->fields['ReportType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of ReportType, return this.
     *
     * @param string $ReportType
     * @return $this
     */
    public function withReportType($ReportType)
    {
        $this->setReportType($ReportType);
        return $this;
    }
    /**
     * Checks if ReportType is set
     * 
     * @return bool true if ReportType  is set
     */
    public function isSetReportType()
    {
        return !is_null($this->fields['ReportType']['FieldValue']);
    }
    /**
     * Gets the value of the ReportRequestId property.
     * 
     * @return string ReportRequestId
     */
    public function getReportRequestId()
    {
        return $this->fields['ReportRequestId']['FieldValue'];
    }
    /**
     * Sets the value of the ReportRequestId property.
     * 
     * @param string ReportRequestId
     * @return $this 
     */
    public function setReportRequestId($value)
    {
        $this->fields['ReportRequestId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of ReportRequestId, return this.
     *
     * @param string $ReportRequestId
     * @return $this
     */
    public function withReportRequestId($ReportRequestId)
    {
        $this->setReportRequestId($ReportRequestId);
        return $this;
    }
    /**
     * Checks if ReportRequestId is set
     * 
     * @return bool true if ReportRequestId  is set
     */
    public function isSetReportRequestId()
    {
        return !is_null($this->fields['ReportRequestId']['FieldValue']);
    }
    /**
     * Gets the value of the AvailableDate property.
     * 
     * @return string AvailableDate
     */
    public function getAvailableDate()
    {
        return $this->fields['AvailableDate']['FieldValue'];
    }
    /**
     * Sets the value of the AvailableDate property.
     * 
     * @param string AvailableDate
     * @return $this 
     */
    public function setAvailableDate($value)
    {
        $this->fields['AvailableDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of AvailableDate, return this.
     *
     * @param string $AvailableDate
     * @return $this
     */
    public function withAvailableDate($AvailableDate)
    {
        $this->setAvailableDate($AvailableDate);
        return $this;
    }
    /**
     * Checks if AvailableDate is set
     * 
     * @return bool true if AvailableDate  is set
     */
    public function isSetAvailableDate()
    {
        return !is_null($this->fields['AvailableDate']['FieldValue']);
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
     * Set the value of Acknowledged, return this.
     *
     * @param bool $Acknowledged
     * @return $this
     */
    public function withAcknowledged($Acknowledged)
    {
        $this->setAcknowledged($Acknowledged);
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
     * Gets the value of the AcknowledgedDate property.
     * 
     * @return string AcknowledgedDate
     */
    public function getAcknowledgedDate()
    {
        return $this->fields['AcknowledgedDate']['FieldValue'];
    }
    /**
     * Sets the value of the AcknowledgedDate property.
     * 
     * @param string AcknowledgedDate
     * @return $this 
     */
    public function setAcknowledgedDate($value)
    {
        $this->fields['AcknowledgedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of AcknowledgedDate, return this.
     *
     * @param string $AcknowledgedDate
     * @return $this
     */
    public function withAcknowledgedDate($AcknowledgedDate)
    {
        $this->setAcknowledgedDate($AcknowledgedDate);
        return $this;
    }
    /**
     * Checks if AcknowledgedDate is set
     * 
     * @return bool true if AcknowledgedDate  is set
     */
    public function isSetAcknowledgedDate()
    {
        return !is_null($this->fields['AcknowledgedDate']['FieldValue']);
    }
}