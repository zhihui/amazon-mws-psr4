<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelListFinancialEventsRequest
 * 
 * @property	string	$SellerId
 * @property	string	$MWSAuthToken
 * @property	int	$MaxResultsPerPage
 * @property	string	$AmazonOrderId
 * @property	string	$FinancialEventGroupId
 * @property	string	$PostedAfter
 * @property	string	$PostedBefore
 */
class MwsFinancesServiceModelListFinancialEventsRequest extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('SellerId' => array('FieldValue' => null, 'FieldType' => 'string'), 'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'MaxResultsPerPage' => array('FieldValue' => null, 'FieldType' => 'int'), 'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'), 'FinancialEventGroupId' => array('FieldValue' => null, 'FieldType' => 'string'), 'PostedAfter' => array('FieldValue' => null, 'FieldType' => 'string'), 'PostedBefore' => array('FieldValue' => null, 'FieldType' => 'string'));
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
     * Get the value of the MaxResultsPerPage property.
     *
     * @return \int MaxResultsPerPage.
     */
    public function getMaxResultsPerPage()
    {
        return $this->_fields['MaxResultsPerPage']['FieldValue'];
    }
    /**
     * Set the value of the MaxResultsPerPage property.
     *
     * @param int maxResultsPerPage
     * @return $this instance
     */
    public function setMaxResultsPerPage($value)
    {
        $this->_fields['MaxResultsPerPage']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if MaxResultsPerPage is set.
     *
     * @return true if MaxResultsPerPage is set.
     */
    public function isSetMaxResultsPerPage()
    {
        return !is_null($this->_fields['MaxResultsPerPage']['FieldValue']);
    }
    /**
     * Set the value of MaxResultsPerPage, return this.
     *
     * @param int $MaxResultsPerPage
     * @return $this
     */
    public function withMaxResultsPerPage($MaxResultsPerPage)
    {
        $this->setMaxResultsPerPage($MaxResultsPerPage);
        return $this;
    }
    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return \string AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }
    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return $this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
    }
    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param string $AmazonOrderId
     * @return $this
     */
    public function withAmazonOrderId($AmazonOrderId)
    {
        $this->setAmazonOrderId($AmazonOrderId);
        return $this;
    }
    /**
     * Get the value of the FinancialEventGroupId property.
     *
     * @return \string FinancialEventGroupId.
     */
    public function getFinancialEventGroupId()
    {
        return $this->_fields['FinancialEventGroupId']['FieldValue'];
    }
    /**
     * Set the value of the FinancialEventGroupId property.
     *
     * @param string financialEventGroupId
     * @return $this instance
     */
    public function setFinancialEventGroupId($value)
    {
        $this->_fields['FinancialEventGroupId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FinancialEventGroupId is set.
     *
     * @return true if FinancialEventGroupId is set.
     */
    public function isSetFinancialEventGroupId()
    {
        return !is_null($this->_fields['FinancialEventGroupId']['FieldValue']);
    }
    /**
     * Set the value of FinancialEventGroupId, return this.
     *
     * @param string $FinancialEventGroupId
     * @return $this
     */
    public function withFinancialEventGroupId($FinancialEventGroupId)
    {
        $this->setFinancialEventGroupId($FinancialEventGroupId);
        return $this;
    }
    /**
     * Get the value of the PostedAfter property.
     *
     * @return \DateTime PostedAfter.
     */
    public function getPostedAfter()
    {
        return $this->_fields['PostedAfter']['FieldValue'];
    }
    /**
     * Set the value of the PostedAfter property.
     *
     * @param string postedAfter
     * @return $this instance
     */
    public function setPostedAfter($value)
    {
        $this->_fields['PostedAfter']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PostedAfter is set.
     *
     * @return true if PostedAfter is set.
     */
    public function isSetPostedAfter()
    {
        return !is_null($this->_fields['PostedAfter']['FieldValue']);
    }
    /**
     * Set the value of PostedAfter, return this.
     *
     * @param string $PostedAfter
     * @return $this
     */
    public function withPostedAfter($PostedAfter)
    {
        $this->setPostedAfter($PostedAfter);
        return $this;
    }
    /**
     * Get the value of the PostedBefore property.
     *
     * @return \DateTime PostedBefore.
     */
    public function getPostedBefore()
    {
        return $this->_fields['PostedBefore']['FieldValue'];
    }
    /**
     * Set the value of the PostedBefore property.
     *
     * @param string postedBefore
     * @return $this instance
     */
    public function setPostedBefore($value)
    {
        $this->_fields['PostedBefore']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PostedBefore is set.
     *
     * @return true if PostedBefore is set.
     */
    public function isSetPostedBefore()
    {
        return !is_null($this->_fields['PostedBefore']['FieldValue']);
    }
    /**
     * Set the value of PostedBefore, return this.
     *
     * @param string $PostedBefore
     * @return $this
     */
    public function withPostedBefore($PostedBefore)
    {
        $this->setPostedBefore($PostedBefore);
        return $this;
    }
}