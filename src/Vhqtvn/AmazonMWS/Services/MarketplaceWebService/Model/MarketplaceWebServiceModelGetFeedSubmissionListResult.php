<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListResult
 * 
 * @property	string	$NextToken
 * @property	bool	$HasNext
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo	$FeedSubmissionInfo
 */
class MarketplaceWebServiceModelGetFeedSubmissionListResult extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelGetFeedSubmissionListResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>NextToken: string</li>
     * <li>HasNext: bool</li>
     * <li>FeedSubmissionInfo: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('NextToken' => array('FieldValue' => null, 'FieldType' => 'string'), 'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'), 'FeedSubmissionInfo' => array('FieldValue' => array(), 'FieldType' => array(\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo::class)));
        parent::__construct($data);
    }
    /**
     * Gets the value of the NextToken property.
     * 
     * @return string NextToken
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }
    /**
     * Sets the value of the NextToken property.
     * 
     * @param string NextToken
     * @return $this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of NextToken, return this.
     *
     * @param string $NextToken
     * @return $this
     */
    public function withNextToken($NextToken)
    {
        $this->setNextToken($NextToken);
        return $this;
    }
    /**
     * Checks if NextToken is set
     * 
     * @return bool true if NextToken  is set
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }
    /**
     * Gets the value of the HasNext property.
     * 
     * @return bool HasNext
     */
    public function getHasNext()
    {
        return $this->_fields['HasNext']['FieldValue'];
    }
    /**
     * Sets the value of the HasNext property.
     * 
     * @param bool HasNext
     * @return $this instance
     */
    public function setHasNext($value)
    {
        $this->_fields['HasNext']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Set the value of HasNext, return this.
     *
     * @param bool $HasNext
     * @return $this
     */
    public function withHasNext($HasNext)
    {
        $this->setHasNext($HasNext);
        return $this;
    }
    /**
     * Checks if HasNext is set
     * 
     * @return bool true if HasNext  is set
     */
    public function isSetHasNext()
    {
        return !is_null($this->_fields['HasNext']['FieldValue']);
    }
    /**
     * Gets the value of the FeedSubmissionInfo.
     * 
     * @return array of FeedSubmissionInfo FeedSubmissionInfo
     */
    public function getFeedSubmissionInfoList()
    {
        return $this->_fields['FeedSubmissionInfo']['FieldValue'];
    }
    /**
     * Sets the value of the FeedSubmissionInfo.
     * 
     * @param mixed FeedSubmissionInfo or an array of FeedSubmissionInfo FeedSubmissionInfo
     * @return $this instance
     */
    public function setFeedSubmissionInfoList($feedSubmissionInfo)
    {
        if (!$this->_isNumericArray($feedSubmissionInfo)) {
            $feedSubmissionInfo = array($feedSubmissionInfo);
        }
        $this->_fields['FeedSubmissionInfo']['FieldValue'] = $feedSubmissionInfo;
        return $this;
    }
    /**
     * Add values for FeedSubmissionInfo, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelFeedSubmissionInfo[] $FeedSubmissionInfo_array,...
     * @return $this
     */
    public function withFeedSubmissionInfo(...$FeedSubmissionInfo_array)
    {
        foreach ($FeedSubmissionInfo_array as $feedSubmissionInfo) {
            $this->_fields['FeedSubmissionInfo']['FieldValue'][] = $feedSubmissionInfo;
        }
        return $this;
    }
    /**
     * Checks if FeedSubmissionInfo list is non-empty
     * 
     * @return bool true if FeedSubmissionInfo list is non-empty
     */
    public function isSetFeedSubmissionInfo()
    {
        return count($this->_fields['FeedSubmissionInfo']['FieldValue']) > 0;
    }
}