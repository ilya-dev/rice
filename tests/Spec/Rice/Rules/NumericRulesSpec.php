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

    function it_detects_prime_numbers()
    {
        $this->prime(null)->shouldReturn(false);

        $this->prime(2)->shouldReturn(true);

        $this->prime(1)->shouldReturn(false);

        $this->prime(4)->shouldReturn(false);

        $this->prime(41)->shouldReturn(true);

        $this->prime(54)->shouldReturn(false);

        $this->prime(67)->shouldReturn(true);
    }

    function it_detects_positive_numbers()
    {
        $this->positive(null)->shouldReturn(false);

        $this->positive(41)->shouldReturn(true);

        $this->positive(-542)->shouldReturn(false);

        $this->positive(0)->shouldReturn(true);
    }

    function it_detects_negative_numbers()
    {
        $this->negative(null)->shouldReturn(false);

        $this->negative(0)->shouldReturn(true);

        $this->negative(-12)->shouldReturn(true);

        $this->negative(23)->shouldReturn(false);
    }

    function it_detects_perfect_squares()
    {
        $this->square(6)->shouldReturn(false);

        $this->square(9)->shouldReturn(true);
    }

    function it_detects_something()
    {
        $this->multiple(null, 0)->shouldReturn(false);

        $this->multiple(11, 3)->shouldReturn(false);

        $this->multiple(12, 3)->shouldReturn(true);
    }

}

