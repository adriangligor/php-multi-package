```
$ cd modules/mod-shared
$ php ../../tools/composer.phar install
$ ./vendor/bin/phpunit
$ cd ../..

$ cd modules/mod-a
$ php ../../tools/composer.phar install
$ php src/main.php
$ cd ../..

$ cd modules/mod-b
$ php ../../tools/composer.phar install
$ php src/main.php
$ cd ../..

```
