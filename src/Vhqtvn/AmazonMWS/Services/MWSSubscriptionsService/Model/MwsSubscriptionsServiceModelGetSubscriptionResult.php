<?php

namespace Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model;

use Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\MwsSubscriptionsServiceModel;
/**
 * \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelGetSubscriptionResult
 * 
 * @property	\Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscription	$Subscription
 */
class MwsSubscriptionsServiceModelGetSubscriptionResult extends MwsSubscriptionsServiceModel
{
    public function __construct($data = null)
    {
        $this->_fields = array('Subscription' => array('FieldValue' => null, 'FieldType' => \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscription::class));
        parent::__construct($data);
    }
    /**
     * Get the value of the Subscription property.
     *
     * @return \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscription Subscription.
     */
    public function getSubscription()
    {
        return $this->_fields['Subscription']['FieldValue'];
    }
    /**
     * Set the value of the Subscription property.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscription subscription
     * @return $this instance
     */
    public function setSubscription($value)
    {
        $this->_fields['Subscription']['FieldValue'] = $value;
        return $this;
    }
    /**
     * Check to see if Subscription is set.
     *
     * @return true if Subscription is set.
     */
    public function isSetSubscription()
    {
        return !is_null($this->_fields['Subscription']['FieldValue']);
    }
    /**
     * Set the value of Subscription, return this.
     *
     * @param \Vhqtvn\AmazonMWS\Services\MWSSubscriptionsService\Model\MwsSubscriptionsServiceModelSubscription $Subscription
     * @return $this
     */
    public function withSubscription($Subscription)
    {
        $this->setSubscription($Subscription);
        return $this;
    }
}