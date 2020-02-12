<?php
// Require composer's autoloader.
require_once __DIR__.'/../vendor/autoload.php';
// All of the command line classes are in the Garden\Cli namespace.

use Garden\Cli\Cli;
use Stuff\SomeStuff;

// Define the cli options.
$cli = new Cli();

$cli->description('Dump some information from your database.')
    ->opt('host:h', 'Connect to host.', true)
    ->opt('port:P', 'Port number to use.', false, 'integer')
    ->opt('user:u', 'User for login if not current user.', true)
    ->opt('password:p', 'Password to use when connecting to server.')
    ->opt('database:d', 'The name of the database to dump.', true);

$stuff = new SomeStuff();
print($stuff->sayHello('Adrian') . "\n");

// Parse and return cli args.
$args = $cli->parse($argv, true);
