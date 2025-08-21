<?php declare(strict_types=1);

namespace BoShurik\DeepCopy\f007;

use DateTimeZone;

class FooDateTimeZone extends DateTimeZone
{
    public $cloned = false;

    public function __clone()
    {
        $this->cloned = true;
    }
}
