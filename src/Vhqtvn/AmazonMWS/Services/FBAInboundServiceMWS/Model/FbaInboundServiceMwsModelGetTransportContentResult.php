<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelGetTransportContentResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportContent	$TransportContent
 */
class FbaInboundServiceMwsModelGetTransportContentResult extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('TransportContent' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportContent::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the TransportContent property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportContent TransportContent.
     */
    public function getTransportContent()
    {
        return $this->_fields['TransportContent']['FieldValue'];
    }
    /**
     * Set the value of the TransportContent property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportContent transportContent
     * @return $this instance
     */
    public function setTransportContent($value)
    {
        $this->_fields['TransportContent']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TransportContent is set.
     *
     * @return true if TransportContent is set.
     */
    public function isSetTransportContent()
    {
        return !is_null($this->_fields['TransportContent']['FieldValue']);
    }
    /**
     * Set the value of TransportContent, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelTransportContent $TransportContent
     * @return $this
     */
    public function withTransportContent($TransportContent)
    {
        $this->setTransportContent($TransportContent);
        return $this;
    }
}