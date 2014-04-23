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

    /**
     * Compare the $charset to the real charset of $string.
     *
     * @param mixed $string
     * @param string $charset
     * @return boolean
     */
    public function charset($string, $charset)
    {
        return \mb_detect_encoding($string) == $charset;
    }

    /**
     * Check whether the $string consists of lowercase symbols only.
     *
     * @param mixed $string
     * @return boolean
     */
    public function lowercase($string)
    {
        return ($string) == \mb_strtolower($string, \mb_detect_encoding($string));
    }

}

