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

    /**
     * Determine whether the given value is a float.
     *
     * @param mixed $value
     * @return boolean
     */
    public function float($value)
    {
        return \is_float($value);
    }

    /**
     * Determine whether the $value is an instance of $name.
     *
     * @param mixed $value
     * @param string $name
     * @return boolean
     */
    public function instance($value, $name)
    {
        return $value instanceof $name;
    }

    /**
     * Determine whether the given value is an integer.
     *
     * @param mixed $value
     * @return boolean
     */
    public function integer($value)
    {
        return \is_int($value);
    }

    /**
     * Determine whether the given value is null.
     *
     * @param mixed $value
     * @return boolean
     */
    public function null($value)
    {
        return \is_null($value);
    }

    /**
     * Determine whether the given value is a string.
     *
     * @param mixed $value
     * @return boolean
     */
    public function string($value)
    {
        return \is_string($value);
    }

    /**
     * Determine whether the given value is an object.
     *
     * @param mixed $value
     * @return boolean
     */
    public function object($value)
    {
        return \is_object($value);
    }

    /**
     * Determine whether the given value is a date.
     *
     * @param mixed $value
     * @param string|null $format
     * @return boolean
     */
    public function date($value, $format = null)
    {
        if ($value instanceof \DateTime)
        {
            return true;
        }

        if ( ! \is_string($value))
        {
            return false;
        }

        if (\is_null($format))
        {
            return \strtotime($value) !== false;
        }

        $instance = \DateTime::createFromFormat($format, $value);

        return $instance and \date($format, $instance->getTimestamp()) === $value;
    }

}

