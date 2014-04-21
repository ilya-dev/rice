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

    function it_detects_a_float()
    {
        $this->float(42)->shouldReturn(false);

        $this->float(42.000000000001)->shouldReturn(true);
    }

    function it_determines_whether_the_object_is_an_instance_of_the_class()
    {
        $this->instance(new \stdClass, 'fdsfgaga')->shouldReturn(false);

        $this->instance(new \stdClass, 'stdClass')->shouldReturn(true);
    }

    function it_detects_an_integer()
    {
        $this->integer(null)->shouldReturn(false);

        $this->integer(.1)->shouldReturn(false);

        $this->integer(10)->shouldReturn(true);
    }

    function it_detects_a_null_value()
    {
        $this->null(null)->shouldReturn(true);

        $this->null(false)->shouldReturn(false);
    }

    function it_detects_a_string()
    {
        $this->string([])->shouldReturn(false);

        $this->string('foo')->shouldReturn(true);
    }

}

class DummyTraversable implements \IteratorAggregate {

    public function getIterator() {}

}

