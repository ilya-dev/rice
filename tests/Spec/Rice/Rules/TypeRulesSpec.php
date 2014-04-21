<?php namespace Spec\Rice\Rules;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TypeRulesSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Rice\Rules\TypeRules');
    }

    function it_detects_a_traversable()
    {
        $this->traversable(null)->shouldReturn(false);

        $this->traversable([1, 2, 3])->shouldReturn(true);

        $this->traversable(new \stdClass)->shouldReturn(false);

        $this->traversable(new DummyTraversable)->shouldReturn(true);
    }

    function it_detects_a_boolean_value()
    {
        $this->boolean(null)->shouldReturn(false);

        $this->boolean(true)->shouldReturn(true);
    }

    function it_detects_a_date()
    {
        $this->date(new \DateTime)->shouldReturn(true);

        $this->date('2014-04-22')->shouldReturn(true);

        $this->date('22-2014-04', 'd-Y-m')->shouldReturn(true);

        $this->date(null)->shouldReturn(false);

        $this->date('fdfdfdfsg')->shouldReturn(false);

        $this->date('dsdsggshsg', 'cierkjd')->shouldReturn(false);
    }

}

class DummyTraversable implements \IteratorAggregate {

    public function getIterator() {}

}

