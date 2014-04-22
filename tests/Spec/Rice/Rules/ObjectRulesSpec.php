<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ObjectRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\ObjectRules');
    }

    function it_calculates_the_length_of_object()
    {
        $object = (object) ['foo' => 'bar', 'baz' => 'wow'];

        $this->length($object, 0, 2)->shouldReturn(true);

        $this->length($object, 2)->shouldReturn(true);

        $this->length($object, 2, 4)->shouldReturn(true);

        $this->length($object, 3)->shouldReturn(false);
    }

}

