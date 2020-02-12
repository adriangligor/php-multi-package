<?php

namespace MoreStuff;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;

class DateTimeStuff
{
    public function now(): CarbonInterface
    {
        return CarbonImmutable::now();
    }
}
