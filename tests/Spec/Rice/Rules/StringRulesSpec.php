<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\StringRules');
    }

    function it_checks_whether_a_string_matches_the_regex()
    {
        $regex = '/^[a-z]{5}$/i';

        $this->regex('av5gG', $regex)->shouldReturn(false);

        $this->regex('LfAeg', $regex)->shouldReturn(true);
    }

}

