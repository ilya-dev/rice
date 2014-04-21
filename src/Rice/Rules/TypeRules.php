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
     * Determine whether the given value is a date
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

