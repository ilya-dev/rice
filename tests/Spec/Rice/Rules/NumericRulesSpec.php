<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumericRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\NumericRules');
    }

    function it_detects_odd_numbers()
    {
        $this->odd(null)->shouldReturn(false);

        $this->odd(2)->shouldReturn(false);

        $this->odd(3)->shouldReturn(true);
    }

    function it_detects_even_numbers()
    {
        $this->even(null)->shouldReturn(false);

        $this->even(3)->shouldReturn(false);

        $this->even(2)->shouldReturn(true);
    }

}

