<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ComparingRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\ComparingRules');
    }

    function it_checks_whether_the_value_is_in_a_range()
    {
        $this->between(5, 3, 7)->shouldReturn(true);

        $this->between(3, 3, 5)->shouldReturn(true);

        $this->between(2, 3, 4)->shouldReturn(false);
    }

    function it_compares_two_values()
    {
        $this->equals(12, 15)->shouldReturn(false);

        $this->equals(12, '12')->shouldReturn(false);

        $this->equals(12, 12)->shouldReturn(true);
    }

    function it_checks_the_minimum_value()
    {
        $this->min(null, 0)->shouldReturn(false);

        $this->min(5, 7)->shouldReturn(false);

        $this->min(5, 5)->shouldReturn(true);

        $this->min(5, 3)->shouldReturn(true);
    }

    function it_checks_the_maximum_value()
    {
        $this->max(null, 0)->shouldReturn(false);

        $this->max(7, 5)->shouldReturn(false);

        $this->max(5, 5)->shouldReturn(true);

        $this->max(3, 5)->shouldReturn(true);
    }

}

