<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OtherRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\OtherRules');
    }

}

