<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FileRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\FileRules');
    }

    function it_determines_whether_a_file_was_uploaded()
    {
        $this->uploaded(null)->shouldReturn(false);

        $this->uploaded('foo')->shouldReturn(false);
    }

}

