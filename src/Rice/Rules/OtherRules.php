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

    /**
     * Determine whether the given string is a valid e-mail address.
     *
     * @param mixed $address
     * @return boolean
     */
    public function email($address)
    {
        return (boolean) \filter_var($address, FILTER_VALIDATE_EMAIL);
    }

}

