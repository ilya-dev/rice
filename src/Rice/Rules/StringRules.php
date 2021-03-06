<?php namespace Rice\Rules;

class StringRules {

    /**
     * Check whether the length of the $string is equal to $length.
     *
     * @param mixed $string
     * @param integer $length
     * @return boolean
     */
    public function length($string, $length)
    {
        return \mb_strlen($string, \mb_detect_encoding($string)) == $length;
    }

    /**
     * Check whether the length of the string fits the range.
     *
     * @param mixed $string
     * @param integer $min
     * @param integer $max
     * @return boolean
     */
    public function between($string, $min, $max)
    {
        $length = \mb_strlen($string, \mb_detect_encoding($string));

        return ($min <= $length) and ($max >= $length);
    }

    /**
     * Check whether the $string has the $sub string.
     *
     * @param mixed $string
     * @param string $sub
     * @return boolean
     */
    public function in($string, $sub)
    {
        return false !== \mb_strpos($string, $sub, 0, \mb_detect_encoding($string));
    }

    /**
     * Check whether the $string starts with the $sub string.
     *
     * @param mixed $string
     * @param string $sub
     * @return boolean
     */
    public function starts($string, $sub)
    {
        return 0 == \mb_strpos($string, $sub, 0, \mb_detect_encoding($string));
    }

    /**
     * Check whether the $string ends with the $sub string.
     *
     * @param mixed $string
     * @param string $sub
     * @return boolean
     */
    public function ends($string, $sub)
    {
        $index = \mb_strlen($string, \mb_detect_encoding($string))
                 - \mb_strlen($sub, \mb_detect_encoding($sub));

        return ($index) == \mb_strpos($string, $sub, 0, \mb_detect_encoding($string));
    }

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

    /**
     * Check whether the $string consists of uppercase symbols only.
     *
     * @param mixed $string
     * @return boolean
     */
    public function uppercase($string)
    {
        return ($string) == \mb_strtoupper($string, \mb_detect_encoding($string));
    }

}

