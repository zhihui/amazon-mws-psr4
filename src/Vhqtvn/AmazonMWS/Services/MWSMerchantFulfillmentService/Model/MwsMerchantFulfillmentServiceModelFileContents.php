<?php

namespace Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model;

use Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\MwsMerchantFulfillmentServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSMerchantFulfillmentService\Model\MwsMerchantFulfillmentServiceModelFileContents
 * 
 * @property	string	$Contents
 * @property	string	$FileType
 * @property	string	$Checksum
 */
class MwsMerchantFulfillmentServiceModelFileContents extends MwsMerchantFulfillmentServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Contents' => array('FieldValue' => null, 'FieldType' => 'string'), 'FileType' => array('FieldValue' => null, 'FieldType' => 'string'), 'Checksum' => array('FieldValue' => null, 'FieldType' => 'string'));
        parent::__construct($data);
    }
    /**
     * Get the value of the Contents property.
     *
     * @return \string Contents.
     */
    public function getContents()
    {
        return $this->_fields['Contents']['FieldValue'];
    }
    /**
     * Set the value of the Contents property.
     *
     * @param string contents
     * @return $this instance
     */
    public function setContents($value)
    {
        $this->_fields['Contents']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Contents is set.
     *
     * @return true if Contents is set.
     */
    public function isSetContents()
    {
        return !is_null($this->_fields['Contents']['FieldValue']);
    }
    /**
     * Set the value of Contents, return this.
     *
     * @param string $Contents
     * @return $this
     */
    public function withContents($Contents)
    {
        $this->setContents($Contents);
        return $this;
    }
    /**
     * Get the value of the FileType property.
     *
     * @return \string FileType.
     */
    public function getFileType()
    {
        return $this->_fields['FileType']['FieldValue'];
    }
    /**
     * Set the value of the FileType property.
     *
     * @param string fileType
     * @return $this instance
     */
    public function setFileType($value)
    {
        $this->_fields['FileType']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FileType is set.
     *
     * @return true if FileType is set.
     */
    public function isSetFileType()
    {
        return !is_null($this->_fields['FileType']['FieldValue']);
    }
    /**
     * Set the value of FileType, return this.
     *
     * @param string $FileType
     * @return $this
     */
    public function withFileType($FileType)
    {
        $this->setFileType($FileType);
        return $this;
    }
    /**
     * Get the value of the Checksum property.
     *
     * @return \string Checksum.
     */
    public function getChecksum()
    {
        return $this->_fields['Checksum']['FieldValue'];
    }
    /**
     * Set the value of the Checksum property.
     *
     * @param string checksum
     * @return $this instance
     */
    public function setChecksum($value)
    {
        $this->_fields['Checksum']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Checksum is set.
     *
     * @return true if Checksum is set.
     */
    public function isSetChecksum()
    {
        return !is_null($this->_fields['Checksum']['FieldValue']);
    }
    /**
     * Set the value of Checksum, return this.
     *
     * @param string $Checksum
     * @return $this
     */
    public function withChecksum($Checksum)
    {
        $this->setChecksum($Checksum);
        return $this;
    }
}