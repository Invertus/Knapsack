<?php

namespace spec\Invertus\Knapsack\Exceptions;

use Invertus\Knapsack\Exceptions\InvalidArgument;
use Invertus\Knapsack\Exceptions\RuntimeException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin InvalidArgument
 */
class InvalidArgumentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RuntimeException::class);
    }
}
