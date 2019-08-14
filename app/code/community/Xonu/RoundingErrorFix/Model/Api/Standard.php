<?php

class Xonu_RoundingErrorFix_Model_Api_Standard extends Mage_Paypal_Model_Api_Standard {
    /**
     * Filter amounts in API calls
     * @param float|string $value
     * @return string
     */
    protected function _filterAmount($value)
    {
        // return sprintf('%.2F', $value); // original line would round e. g. 30.605 to 30.60
        return sprintf('%.2F', round($value, 2)); // the modified line would round 30.605 to 30.61
    }
}