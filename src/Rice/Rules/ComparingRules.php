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
        return ($value >= $min) and ($max >= $value);
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

}

