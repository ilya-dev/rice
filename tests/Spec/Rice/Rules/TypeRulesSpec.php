<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TypeRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\TypeRules');
    }

}

