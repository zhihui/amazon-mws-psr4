<?php

namespace Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model;

use Vhqtvn\AmazonMWS\Services\MWSFinancesService\MwsFinancesServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCouponPaymentEvent
 * 
 * @property	string	$PostedDate
 * @property	string	$CouponId
 * @property	string	$SellerCouponDescription
 * @property	int	$ClipOrRedemptionCount
 * @property	string	$PaymentEventId
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent	$FeeComponent
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent	$ChargeComponent
 * @property	\Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency	$TotalAmount
 */
class MwsFinancesServiceModelCouponPaymentEvent extends MwsFinancesServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'), 'CouponId' => array('FieldValue' => null, 'FieldType' => 'string'), 'SellerCouponDescription' => array('FieldValue' => null, 'FieldType' => 'string'), 'ClipOrRedemptionCount' => array('FieldValue' => null, 'FieldType' => 'int'), 'PaymentEventId' => array('FieldValue' => null, 'FieldType' => 'string'), 'FeeComponent' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent::class), 'ChargeComponent' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent::class), 'TotalAmount' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }
    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return $this 
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set.
     */
    public function isSetPostedDate()
    {
        return !is_null($this->_fields['PostedDate']['FieldValue']);
    }
    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);
        return $this;
    }
    /**
     * Get the value of the CouponId property.
     *
     * @return String CouponId.
     */
    public function getCouponId()
    {
        return $this->_fields['CouponId']['FieldValue'];
    }
    /**
     * Set the value of the CouponId property.
     *
     * @param string couponId
     * @return $this 
     */
    public function setCouponId($value)
    {
        $this->_fields['CouponId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if CouponId is set.
     *
     * @return true if CouponId is set.
     */
    public function isSetCouponId()
    {
        return !is_null($this->_fields['CouponId']['FieldValue']);
    }
    /**
     * Set the value of CouponId, return this.
     *
     * @param couponId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withCouponId($value)
    {
        $this->setCouponId($value);
        return $this;
    }
    /**
     * Get the value of the SellerCouponDescription property.
     *
     * @return String SellerCouponDescription.
     */
    public function getSellerCouponDescription()
    {
        return $this->_fields['SellerCouponDescription']['FieldValue'];
    }
    /**
     * Set the value of the SellerCouponDescription property.
     *
     * @param string sellerCouponDescription
     * @return $this 
     */
    public function setSellerCouponDescription($value)
    {
        $this->_fields['SellerCouponDescription']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if SellerCouponDescription is set.
     *
     * @return true if SellerCouponDescription is set.
     */
    public function isSetSellerCouponDescription()
    {
        return !is_null($this->_fields['SellerCouponDescription']['FieldValue']);
    }
    /**
     * Set the value of SellerCouponDescription, return this.
     *
     * @param sellerCouponDescription
     *             The new value to set.
     *
     * @return $this .
     */
    public function withSellerCouponDescription($value)
    {
        $this->setSellerCouponDescription($value);
        return $this;
    }
    /**
     * Get the value of the ClipOrRedemptionCount property.
     *
     * @return Long ClipOrRedemptionCount.
     */
    public function getClipOrRedemptionCount()
    {
        return $this->_fields['ClipOrRedemptionCount']['FieldValue'];
    }
    /**
     * Set the value of the ClipOrRedemptionCount property.
     *
     * @param int clipOrRedemptionCount
     * @return $this 
     */
    public function setClipOrRedemptionCount($value)
    {
        $this->_fields['ClipOrRedemptionCount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ClipOrRedemptionCount is set.
     *
     * @return true if ClipOrRedemptionCount is set.
     */
    public function isSetClipOrRedemptionCount()
    {
        return !is_null($this->_fields['ClipOrRedemptionCount']['FieldValue']);
    }
    /**
     * Set the value of ClipOrRedemptionCount, return this.
     *
     * @param clipOrRedemptionCount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withClipOrRedemptionCount($value)
    {
        $this->setClipOrRedemptionCount($value);
        return $this;
    }
    /**
     * Get the value of the PaymentEventId property.
     *
     * @return String PaymentEventId.
     */
    public function getPaymentEventId()
    {
        return $this->_fields['PaymentEventId']['FieldValue'];
    }
    /**
     * Set the value of the PaymentEventId property.
     *
     * @param string paymentEventId
     * @return $this 
     */
    public function setPaymentEventId($value)
    {
        $this->_fields['PaymentEventId']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if PaymentEventId is set.
     *
     * @return true if PaymentEventId is set.
     */
    public function isSetPaymentEventId()
    {
        return !is_null($this->_fields['PaymentEventId']['FieldValue']);
    }
    /**
     * Set the value of PaymentEventId, return this.
     *
     * @param paymentEventId
     *             The new value to set.
     *
     * @return $this .
     */
    public function withPaymentEventId($value)
    {
        $this->setPaymentEventId($value);
        return $this;
    }
    /**
     * Get the value of the FeeComponent property.
     *
     * @return FeeComponent FeeComponent.
     */
    public function getFeeComponent()
    {
        return $this->_fields['FeeComponent']['FieldValue'];
    }
    /**
     * Set the value of the FeeComponent property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelFeeComponent feeComponent
     * @return $this 
     */
    public function setFeeComponent($value)
    {
        $this->_fields['FeeComponent']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if FeeComponent is set.
     *
     * @return true if FeeComponent is set.
     */
    public function isSetFeeComponent()
    {
        return !is_null($this->_fields['FeeComponent']['FieldValue']);
    }
    /**
     * Set the value of FeeComponent, return this.
     *
     * @param feeComponent
     *             The new value to set.
     *
     * @return $this .
     */
    public function withFeeComponent($value)
    {
        $this->setFeeComponent($value);
        return $this;
    }
    /**
     * Get the value of the ChargeComponent property.
     *
     * @return ChargeComponent ChargeComponent.
     */
    public function getChargeComponent()
    {
        return $this->_fields['ChargeComponent']['FieldValue'];
    }
    /**
     * Set the value of the ChargeComponent property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelChargeComponent chargeComponent
     * @return $this 
     */
    public function setChargeComponent($value)
    {
        $this->_fields['ChargeComponent']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if ChargeComponent is set.
     *
     * @return true if ChargeComponent is set.
     */
    public function isSetChargeComponent()
    {
        return !is_null($this->_fields['ChargeComponent']['FieldValue']);
    }
    /**
     * Set the value of ChargeComponent, return this.
     *
     * @param chargeComponent
     *             The new value to set.
     *
     * @return $this .
     */
    public function withChargeComponent($value)
    {
        $this->setChargeComponent($value);
        return $this;
    }
    /**
     * Get the value of the TotalAmount property.
     *
     * @return Currency TotalAmount.
     */
    public function getTotalAmount()
    {
        return $this->_fields['TotalAmount']['FieldValue'];
    }
    /**
     * Set the value of the TotalAmount property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSFinancesService\Model\MwsFinancesServiceModelCurrency totalAmount
     * @return $this 
     */
    public function setTotalAmount($value)
    {
        $this->_fields['TotalAmount']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if TotalAmount is set.
     *
     * @return true if TotalAmount is set.
     */
    public function isSetTotalAmount()
    {
        return !is_null($this->_fields['TotalAmount']['FieldValue']);
    }
    /**
     * Set the value of TotalAmount, return this.
     *
     * @param totalAmount
     *             The new value to set.
     *
     * @return $this .
     */
    public function withTotalAmount($value)
    {
        $this->setTotalAmount($value);
        return $this;
    }
}