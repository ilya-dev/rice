<?php namespace Rice\Rules;

class ComparingRules {

    /**
     * Check whether the value is in a range (inclusively).
     *
     * @param mixed $value
     * @param integer $min
     * @param integer $max
     * @return boolean
     */
    public function between($value, $min, $max)
    {
        return \is_numeric($value) and ($value >= $min) and ($max >= $value);
    }

    /**
     * Compare $left and $right (strict).
     *
     * @param mixed $left
     * @param mixed $right
     * @return boolean
     */
    public function equals($left, $right)
    {
        return ($left) === $right;
    }

    /**
     * Check whether the given value is higher than the minimum value.
     *
     * @param mixed $value
     * @param integer $min
     * @return boolean
     */
    public function min($value, $min)
    {
        return \is_numeric($value) and ($value >= $min);
    }

    /**
     * Check whether the given value is not higher than the maximum value.
     *
     * @param mixed $value
     * @param integer $max
     * @return boolean
     */
    public function max($value, $max)
    {
        return \is_numeric($value) and ($max >= $value);
    }

}

