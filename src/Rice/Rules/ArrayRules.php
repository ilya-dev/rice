<?php namespace Rice\Rules;

class ArrayRules {

    /**
     * Determine whether the array contains the value.
     *
     * @param mixed $array
     * @param mixed $value
     * @return boolean
     */
    public function in($array, $value)
    {
        return \in_array($value, $array, true);
    }

    /**
     * Determine whether the array has the key.
     *
     * @param mixed $array
     * @param mixed $key
     * @return boolean
     */
    public function key($array, $key)
    {
        return \array_key_exists($key, $array);
    }

    /**
     * Compare the length of the array to the given length.
     *
     * @param mixed $array
     * @param integer $length
     * @return boolean
     */
    public function length($array, $length)
    {
        return \count($array) == $length;
    }

}

