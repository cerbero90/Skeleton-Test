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

    /**
     * @testdox    It says ciao.
     *
     * @author    Andrea Marco Sartori
     * @return    void
     */
    public function it_says_ciao()
    {
        $this->greet()->shouldReturn('ciao');
    }
}
