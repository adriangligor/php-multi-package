<?php

namespace MoreStuff;

use PHPUnit\Framework\TestCase;

class DateTimeStuffTest extends TestCase
{
    /**
     * @test
     */
    public function nowShouldBeCurrentTime(): void
    {
        $now_ts = time();
        $now = (new DateTimeStuff())->now();

        $this->assertEquals($now_ts, $now->timestamp);
    }
}
