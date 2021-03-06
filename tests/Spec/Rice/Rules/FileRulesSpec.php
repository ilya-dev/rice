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

    function it_determines_whether_a_file_exists()
    {
        $this->exists(null)->shouldReturn(false);

        $this->exists(__DIR__)->shouldReturn(true);

        $this->exists(\uniqid())->shouldReturn(false);

        $this->exists(__FILE__)->shouldReturn(true);
    }

    function it_checks_whether_the_path_points_to_a_directory()
    {
        $this->directory(__FILE__)->shouldReturn(false);

        $this->directory(null)->shouldReturn(false);

        $this->directory(__DIR__)->shouldReturn(true);
    }

    function it_checks_whether_the_path_points_to_a_file()
    {
        $this->file(null)->shouldReturn(false);

        $this->file(__DIR__)->shouldReturn(false);

        $this->file(__FILE__)->shouldReturn(true);
    }

    function it_checks_whether_a_path_is_readable()
    {
        $this->readable(null)->shouldReturn(false);

        $this->readable(__FILE__)->shouldReturn(true);
    }

    function it_checks_whether_a_path_is_writable()
    {
        $this->writable(null)->shouldReturn(false);

        $this->writable(__FILE__)->shouldReturn(true);
    }

}

