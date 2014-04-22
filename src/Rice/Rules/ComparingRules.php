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

}

