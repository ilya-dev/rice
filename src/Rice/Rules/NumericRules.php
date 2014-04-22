<?php namespace Rice\Rules;

class NumericRules {

    /**
     * Determine whether the given value is positive.
     *
     * @param mixed $value
     * @return boolean
     */
    public function positive($value)
    {
        return \is_numeric($value) and $value >= 0;
    }

    /**
     * Determine whether the given value is odd.
     *
     * @param mixed $value
     * @return boolean
     */
    public function odd($value)
    {
        return \is_int($value) and ($value & 1);
    }

    /**
     * Determine whether the given value is even.
     *
     * @param mixed $value
     * @return boolean
     */
    public function even($value)
    {
        return \is_int($value) and ! ($value & 1);
    }

    /**
     * Determine whether the given value is a prime number.
     *
     * @param $value
     * @return boolean
     */
    public function prime($value)
    {
        if ( ! \is_int($value))
        {
            return false;
        }

        if (2 == $value)
        {
            return true;
        }

        if (1 == $value or $this->even($value))
        {
            return false;
        }

        // something stupid happens here
        // TODO: improve this code
        for ($i = 3; $i <= \ceil(\sqrt($value)); $i += 2)
        {
            if ( ! ($value % $i)) return false;
        }

        return true;
    }

}

