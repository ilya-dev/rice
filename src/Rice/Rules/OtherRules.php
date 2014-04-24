<?php namespace Rice\Rules;

class OtherRules {

    /**
     * Determine whether the given string is a valid MAC address.
     *
     * @param mixed $address
     * @return boolean
     */
    public function mac($address)
    {
        $pattern = '/^([0-9A-F]{2}[:-]){5}([0-9A-F]{2})$/';

        return (boolean) \preg_match($pattern, $address);
    }

}

