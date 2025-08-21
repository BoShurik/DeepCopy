<?php

namespace BoShurik\DeepCopy;

use function function_exists;

if (false === function_exists('BoShurik\DeepCopy\deep_copy')) {
    /**
     * Deep copies the given value.
     *
     * @param mixed $value
     * @param bool  $useCloneMethod
     * @param bool  $stateless
     *
     * @return mixed
     */
    function deep_copy($value, $useCloneMethod = false, $stateless = true)
    {
        return (new DeepCopy($useCloneMethod, $stateless))->copy($value);
    }
}
