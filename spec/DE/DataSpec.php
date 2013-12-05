<?php

namespace spec\DE;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DataSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('DE\Data');
    }

    function it_should_return_data()
    {
        $data = array(1,2,3);
        $this->get()->shouldReturn($data);
    }

    function it_should_listen()
    {
        $this->isListening()->shouldReturn(true);
    }

}
