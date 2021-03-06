<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
use DOMDocument;
use DOMXPath;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResult	$CancelFeedSubmissionsResult
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata	$ResponseMetadata
 */
class MarketplaceWebServiceModelCancelFeedSubmissionsResponse extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CancelFeedSubmissionsResult: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResult</li>
     * <li>ResponseMetadata: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('CancelFeedSubmissionsResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata::class));
        parent::__construct($data);
    }
    /**
     * Construct \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:CancelFeedSubmissionsResponse');
        if ($response->length == 1) {
            return new MarketplaceWebServiceModelCancelFeedSubmissionsResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MarketplaceWebService_Model_CancelFeedSubmissionsResponse from provided XML. \n                                  Make sure that CancelFeedSubmissionsResponse is a root element");
        }
    }
    /**
     * Gets the value of the CancelFeedSubmissionsResult.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResult CancelFeedSubmissionsResult
     */
    public function getCancelFeedSubmissionsResult()
    {
        return $this->_fields['CancelFeedSubmissionsResult']['FieldValue'];
    }
    /**
     * Sets the value of the CancelFeedSubmissionsResult.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResult CancelFeedSubmissionsResult
     * @return void
     */
    public function setCancelFeedSubmissionsResult($value)
    {
        $this->_fields['CancelFeedSubmissionsResult']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of CancelFeedSubmissionsResult, return this.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelCancelFeedSubmissionsResult $CancelFeedSubmissionsResult
     * @return $this
     */
    public function withCancelFeedSubmissionsResult($CancelFeedSubmissionsResult)
    {
        $this->setCancelFeedSubmissionsResult($CancelFeedSubmissionsResult);
        return $this;
    }
    /**
     * Checks if CancelFeedSubmissionsResult  is set
     * 
     * @return bool true if CancelFeedSubmissionsResult property is set
     */
    public function isSetCancelFeedSubmissionsResult()
    {
        return !is_null($this->_fields['CancelFeedSubmissionsResult']['FieldValue']);
    }
    /**
     * Gets the value of the ResponseMetadata.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }
    /**
     * Sets the value of the ResponseMetadata.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata $ResponseMetadata
     * @return $this
     */
    public function withResponseMetadata($ResponseMetadata)
    {
        $this->setResponseMetadata($ResponseMetadata);
        return $this;
    }
    /**
     * Checks if ResponseMetadata  is set
     * 
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<CancelFeedSubmissionsResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CancelFeedSubmissionsResponse>";
        return $xml;
    }
    private $_responseHeaderMetadata = null;
    public function getResponseHeaderMetadata()
    {
        return $this->_responseHeaderMetadata;
    }
    public function setResponseHeaderMetadata($responseHeaderMetadata)
    {
        return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }
}