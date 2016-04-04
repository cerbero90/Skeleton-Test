<?php

namespace spec\Cerbero\SkeletonTest;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CiaoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Cerbero\SkeletonTest\Ciao');
    }
}
