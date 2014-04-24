<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OtherRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\OtherRules');
    }

    function it_detects_a_valid_MAC_address()
    {
        $this->mac('3D:F2:C9:A6:B3')->shouldReturn(false);

        $this->mac('3D:F2:C9:A6#B3#4F')->shouldReturn(false);

        $this->mac('3D:F2:C9:A6:B3:4F')->shouldReturn(true);

        $this->mac('3D-F2-C9-A6-B3-4F')->shouldReturn(true);
    }

}

