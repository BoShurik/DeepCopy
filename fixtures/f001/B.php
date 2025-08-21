<?php declare(strict_types=1);

namespace BoShurik\DeepCopy\f001;

class B extends A
{
    private $bProp;

    public function getBProp()
    {
        return $this->bProp;
    }

    public function setBProp($prop)
    {
        $this->bProp = $prop;

        return $this;
    }
}
