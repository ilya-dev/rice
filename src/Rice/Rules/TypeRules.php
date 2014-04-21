<?php namespace Rice\Rules;

class TypeRules {

    /**
     * Determine whether the given value is traversable.
     *
     * @param mixed $value
     * @return bool
     */
    public function traversable($value)
    {
        return \is_array($value) or ($value instanceof \Traversable);
    }

    /**
     * Determine whether the given value is boolean.
     *
     * @param mixed $value
     * @return boolean
     */
    public function boolean($value)
    {
        return \is_bool($value);
    }

}

