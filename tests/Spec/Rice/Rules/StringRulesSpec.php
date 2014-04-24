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

    function it_checks_the_charset_of_string()
    {
        $this->charset('foo', 'dumb-charset')->shouldReturn(false);

        $this->charset('foo', 'ASCII')->shouldReturn(true);
    }

    function it_checks_whether_the_string_is_all_lowercase()
    {
        $this->lowercase('fdsGGfggFS')->shouldReturn(false);

        $this->lowercase('dfsgsgsbsf')->shouldReturn(true);
    }

    function it_checks_whether_the_string_is_all_uppercase()
    {
        $this->uppercase('gkjLGBosbg')->shouldReturn(false);

        $this->uppercase('JGGJGJGJGJ')->shouldReturn(true);
    }

    function it_checks_whether_the_string_starts_with_the_substring()
    {
        $this->starts('foobar', 'bar')->shouldReturn(false);

        $this->starts('foobar', 'foo')->shouldReturn(true);
    }

    function it_checks_whether_the_string_ends_with_the_substring()
    {
        $this->ends('foobar', 'foo')->shouldReturn(false);

        $this->ends('foobar', 'bar')->shouldReturn(true);
    }

    function it_checks_whether_the_string_has_the_substring()
    {
        $this->in('foobarbaz', 'wow')->shouldReturn(false);

        $this->in('foobarbaz', 'bar')->shouldReturn(true);
    }

    function it_checks_whether_the_length_of_the_string_is_equal_to_length()
    {
        $this->length('foobar', 5)->shouldReturn(false);

        $this->length('foobar', 6)->shouldReturn(true);
    }

    function it_checks_whether_the_length_of_the_string_fits_the_range()
    {
        $this->between('foobar', 7, 6)->shouldReturn(false);

        $this->between('foobar', 3, 5)->shouldReturn(false);

        $this->between('foobar', 3, 9)->shouldReturn(true);
    }

}

