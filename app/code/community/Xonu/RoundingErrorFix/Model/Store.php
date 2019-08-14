<?php

/**
 * @copyright (c) 2013, Pawel Kazakow <support@xonu.de>
 * @license http://xonu.de/license/ xonu.de EULA
 */

class Xonu_RoundingErrorFix_Model_Store extends Mage_Core_Model_Store {

    /**
     * Round price
     *
     * @param mixed $price
     * @return double
     */
    public function roundPrice($price)
    {
        // return round($price, 2); // original code
        return round($price, 4);
    }
}