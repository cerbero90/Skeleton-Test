<?php

namespace spec\Cerbero\SkeletonTest;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CiaoSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Cerbero\SkeletonTest\Ciao');
    }
}
