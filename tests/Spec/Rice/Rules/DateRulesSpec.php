<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DateRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\DateRules');
    }

    function it_checks_whether_a_value_fits_the_range()
    {
        $format = 'Y-m-d H:i:s';

        $value = \DateTime::createFromFormat($format, '2014-04-23 20:27:30');

        $min = \DateTime::createFromFormat($format, '2014-04-23 18:00:00');

        $max = \DateTime::createFromFormat($format, '2014-04-23 20:00:00');

        $this->between($value, $min, $max)->shouldReturn(false);

        $max = \DateTime::createFromFormat($format, '2014-04-23 21:00:00');

        $this->between($value, $min, $max)->shouldReturn(true);
    }

}

