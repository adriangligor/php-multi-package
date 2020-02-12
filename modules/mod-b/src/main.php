<?php

require_once __DIR__.'/../vendor/autoload.php';

use MoreStuff\DateTimeStuff;

$dts = new DateTimeStuff();
$now = $dts->now()->toDateTimeString();

print("Hello, it's {$now}.\n");
