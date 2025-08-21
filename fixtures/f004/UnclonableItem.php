<?php declare(strict_types=1);

namespace BoShurik\DeepCopy\f004;

use BadMethodCallException;

class UnclonableItem
{
    private function __clone()
    {
        throw new BadMethodCallException('Unsupported call.');
    }
}
