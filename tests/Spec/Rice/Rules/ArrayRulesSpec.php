<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\ArrayRules');
    }

    function it_checks_whether_the_array_contains_the_value()
    {
        $this->in(['foo', null], false)->shouldReturn(false);

        $this->in(['foo', null], 'foo')->shouldReturn(true);
    }

    function it_checks_whether_the_array_has_the_key()
    {
        $this->key([1, 2, 3], 1)->shouldReturn(true);

        $this->key([1, 2, 3], 5)->shouldReturn(false);

        $this->key(['foo' => 'bar'], 'foo')->shouldReturn(true);

        $this->key([], 'bar')->shouldReturn(false);
    }

}

