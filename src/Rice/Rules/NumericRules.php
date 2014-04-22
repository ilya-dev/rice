<?php namespace Rice\Rules;

class NumericRules {

    /**
     * Determine whether the given value is odd
     *
     * @param mixed $value
     * @return boolean
     */
    public function odd($value)
    {
        return \is_int($value) and ($value & 1);
    }

    /**
     * Determine whether the given value is even
     *
     * @param mixed $value
     * @return boolean
     */
    public function even($value)
    {
        return \is_int($value) and ! ($value & 1);
    }

}

