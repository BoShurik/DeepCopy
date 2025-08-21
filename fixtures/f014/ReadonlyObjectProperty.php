<?php declare(strict_types=1);

namespace BoShurik\DeepCopy\f014;

class ReadonlyObjectProperty
{
    public readonly ReadonlyScalarProperty $foo;

    public function __construct()
    {
        $this->foo = new ReadonlyScalarProperty();
    }
}