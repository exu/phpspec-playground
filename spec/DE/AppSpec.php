<?php

namespace spec\DE;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use DE\Data;

class AppSpec extends ObjectBehavior
{
    function let(Data $data)
    {
        $data->get()->willReturn(array(3,4,5));
        $this->beConstructedWith($data, true);
    }

    function it_is_initializable()
    {
        $this->beConstructedWith([[], false]);
        $this->shouldHaveType('DE\App');
    }

    function it_should_have_some_things()
    {
        $this->hasThings()->shouldReturn(false);
    }

    function it_renders_things_from_model()
    {
        $separator = ',';
        $expected = "3,4,5";

        $this->render($separator)->shouldReturn($expected);
    }


}
