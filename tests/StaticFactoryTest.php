<?php

namespace AlexanderZabornyi\StaticFactoryTest;

use AlexanderZabornyi\StaticFactoryTest\Format\FormatNumber;
use AlexanderZabornyi\StaticFactoryTest\Format\FormatString;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateFormatNumber()
    {
        $this->assertInstanceOf(
            FormatNumber::class,
            StaticFactory::factory('number')
        );
    }

    public function testCanCreateFormatString()
    {
        $this->assertInstanceOf(
            FormatString::class,
            StaticFactory::factory('string')
        );
    }

    public function testException()
    {
        StaticFactory::factory('test');
    }
}