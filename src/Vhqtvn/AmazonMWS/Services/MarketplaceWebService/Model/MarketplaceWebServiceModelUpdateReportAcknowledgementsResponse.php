<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebService\MarketplaceWebServiceModel;
use DOMDocument;
use DOMXPath;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResponse
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResult	$UpdateReportAcknowledgementsResult
 * @property	\Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata	$ResponseMetadata
 */
class MarketplaceWebServiceModelUpdateReportAcknowledgementsResponse extends MarketplaceWebServiceModel
{
    /**
     * Construct new \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>UpdateReportAcknowledgementsResult: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResult</li>
     * <li>ResponseMetadata: \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array('UpdateReportAcknowledgementsResult' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResult::class), 'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelResponseMetadata::class));
        parent::__construct($data);
    }
    /**
     * Construct \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:UpdateReportAcknowledgementsResponse');
        if ($response->length == 1) {
            return new MarketplaceWebServiceModelUpdateReportAcknowledgementsResponse($response->item(0));
        } else {
            throw new \Exception("Unable to construct MarketplaceWebService_Model_UpdateReportAcknowledgementsResponse from provided XML. \n                                  Make sure that UpdateReportAcknowledgementsResponse is a root element");
        }
    }
    /**
     * Gets the value of the UpdateReportAcknowledgementsResult.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResult UpdateReportAcknowledgementsResult
     */
    public function getUpdateReportAcknowledgementsResult()
    {
        return $this->_fields['UpdateReportAcknowledgementsResult']['FieldValue'];
    }
    /**
     * Sets the value of the UpdateReportAcknowledgementsResult.
     * 
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResult UpdateReportAcknowledgementsResult
     * @return void
     */
    public function setUpdateReportAcknowledgementsResult($value)
    {
        $this->_fields['UpdateReportAcknowledgementsResult']['FieldValue'] = $value;
        return;
    }
    /**
     * Set the value of UpdateReportAcknowledgementsResult, return this.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebService\Model\MarketplaceWebServiceModelUpdateReportAcknowledgementsResult $UpdateReportAcknowledgementsResult
     * @return $this
     */
    public function withUpdateReportAcknowledgementsResult($UpdateReportAcknowledgementsResult)
    {
        $this->setUpdateReportAcknowledgementsResult($UpdateReportAcknowledgementsResult);
        return $this;
    }
    /**
     * Checks if UpdateReportAcknowledgementsResult  is set
     * 
     * @return bool true if UpdateReportAcknowledgementsResult property is set
     */
    public function isSetUpdateReportAcknowledgementsResult()
    {
        return !is_null($this->_fields['UpdateReportAcknowledgementsResult']['FieldValue']);
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
        $xml .= "<UpdateReportAcknowledgementsResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</UpdateReportAcknowledgementsResponse>";
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