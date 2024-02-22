<?php

namespace Mobius\Hello;

use Illuminate\Support\Str;

class CoolTool
{
    public function isCool(string $str): bool
    {
        return Str::contains($str, 'cool');
    }
}
