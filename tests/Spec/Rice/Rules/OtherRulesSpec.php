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

    function it_detects_an_email_address()
    {
        $this->email('some-complex-email')->shouldReturn(false);

        $this->email('-argh@wow')->shouldReturn(false);

        $this->email('lol42@bar.foo')->shouldReturn(true);

        $this->email('foo-bar@hey.wow.com')->shouldReturn(true);
    }

    function it_detects_a_valid_JSON_string()
    {
        $this->json('{"wow.such": }')->shouldReturn(false);

        $this->json('{"foo": "bar"}')->shouldReturn(true);
    }

    function it_detects_a_valid_IP_address()
    {
        $this->ip('123.51.lolwhat.124')->shouldReturn(false);

        $this->ip('245.32.43.')->shouldReturn(false);

        $this->ip('214.43.52.184')->shouldReturn(true);
    }

    function it_detects_a_valid_URL_address()
    {
        $this->url('secret-porn-collection')->shouldReturn(false);

        $this->url('http://foo.bar/baz.wow?so=lol')->shouldReturn(true);
    }

}

