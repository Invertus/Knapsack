<?php

namespace spec\Invertus\Knapsack\Exceptions;

use Invertus\Knapsack\Exceptions\ItemNotFound;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use RuntimeException;

/**
 * @mixin ItemNotFound
 */
class ItemNotFoundSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RuntimeException::class);
    }
}
