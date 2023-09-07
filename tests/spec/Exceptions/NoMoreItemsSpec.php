<?php

namespace spec\Invertus\Knapsack\Exceptions;

use Invertus\Knapsack\Exceptions\NoMoreItems;
use Invertus\Knapsack\Exceptions\RuntimeException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin NoMoreItems
 */
class NoMoreItemsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RuntimeException::class);
    }
}
