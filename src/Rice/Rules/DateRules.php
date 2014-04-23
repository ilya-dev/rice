<?php namespace Rice\Rules;

class DateRules {

    /**
     * Check whether the given value is in the range (inclusively).
     *
     * @param \DateTime $value
     * @param \DateTime $min
     * @param \DateTime $max
     * @return boolean
     */
    public function between(\DateTime $value, \DateTime $min, \DateTime $max)
    {
        list($value, $min, $max) = [$value->getTimestamp(), $min->getTimestamp(), $max->getTimestamp()];

        return ($min <= $value) and ($value <= $max);
    }

}

