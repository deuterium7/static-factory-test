<?php

namespace AlexanderZabornyi\StaticFactoryTest;

use AlexanderZabornyi\StaticFactoryTest\Format\FormatNumber;
use AlexanderZabornyi\StaticFactoryTest\Format\FormatString;

final class StaticFactory
{
    /**
     * Создать экземпляр
     *
     * @param string $type
     *
     * @return FormatNumber|FormatString
     */
    public static function factory(string $type)
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}