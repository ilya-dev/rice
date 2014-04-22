<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FileRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\FileRules');
    }

}

