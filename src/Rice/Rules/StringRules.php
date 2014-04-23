<?php namespace Rice\Rules;

class StringRules {

    /**
     * Check whether the $regex matches the $string.
     *
     * @param mixed $string
     * @param string $regex
     * @return boolean
     */
    public function regex($string, $regex)
    {
        return (boolean) \preg_match($regex, $string);
    }

}

