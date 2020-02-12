<?php

namespace Stuff;

use MoreStuff\DateTimeStuff;

class SomeStuff
{
    public function sayHello(string $name): string
    {
        $dts = new DateTimeStuff();
        $now = $dts->now()->toDateTimeString();

        return "Hello, {$name}! It's {$now}.";
    }
}
