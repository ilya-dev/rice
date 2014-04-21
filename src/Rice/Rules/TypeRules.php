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

}

