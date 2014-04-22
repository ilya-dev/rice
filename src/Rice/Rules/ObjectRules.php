<?php namespace Rice\Rules;

class ObjectRules {

    /**
     * Calculate the object length.
     *
     * @param mixed $object
     * @param integer $min
     * @param integer|null $max
     * @return boolean
     */
    public function length($object, $min = 0, $max = null)
    {
        $amount = \count(\get_object_vars($object));

        return $max ? ($amount >= $min and $amount <= $max) : ($amount >= $min);
    }

}

