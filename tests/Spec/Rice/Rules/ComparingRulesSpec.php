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

}

