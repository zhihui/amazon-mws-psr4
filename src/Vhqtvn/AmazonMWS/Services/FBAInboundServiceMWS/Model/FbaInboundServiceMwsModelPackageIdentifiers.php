<?php

namespace Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model;

use Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\FbaInboundServiceMwsModel;
/**
 * \Vhqtvn\AmazonMWS\Services\FBAInboundServiceMWS\Model\FbaInboundServiceMwsModelPackageIdentifiers
 * 
 * @property	\string[]	$member
 */
class FbaInboundServiceMwsModelPackageIdentifiers extends FbaInboundServiceMwsModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('member' => array('FieldValue' => array(), 'FieldType' => array('string')));
        parent::__construct($data);
    }
    /**
     * Get the value of the member property.
     *
     * @return \string[] member.
     */
    public function getmember()
    {
        if ($this->_fields['member']['FieldValue'] == null) {
            $this->_fields['member']['FieldValue'] = array();
        }
        return $this->_fields['member']['FieldValue'];
    }
    /**
     * Set the value of the member property.
     *
     * @param array member
     * @return $this instance
     */
    public function setmember($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['member']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Clear member.
     */
    public function unsetmember()
    {
        $this->_fields['member']['FieldValue'] = array();
    }
    /**
     * Check to see if member is set.
     *
     * @return true if member is set.
     */
    public function isSetmember()
    {
        return !empty($this->_fields['member']['FieldValue']);
    }
    /**
     * Add values for member, return this.
     *
     * @param \string[] $member_array,...
     * @return $this
     */
    public function withmember(...$member_array)
    {
        foreach ($member_array as $member) {
            $this->_fields['member']['FieldValue'][] = $member;
        }
        return $this;
    }
}