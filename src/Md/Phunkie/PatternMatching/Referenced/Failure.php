<?php

namespace Md\Phunkie\PatternMatching\Referenced;

class Failure
{
    public $value;
    public function __construct(&$value)
    {
        $this->value = &$value;
    }
}