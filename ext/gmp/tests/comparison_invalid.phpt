--TEST--
Invalid comparison with a GMP object
--SKIPIF--
<?php if (!extension_loaded("gmp")) print "skip"; ?>
--FILE--
<?php

try {
    var_dump("hapfegfbu" > gmp_init(0));
} catch (\Error $e) {
    echo $e::class, ': ', $e->getMessage(), \PHP_EOL;
}

try {
    var_dump((new DateTime()) > gmp_init(0));
} catch (\Error $e) {
    echo $e::class, ': ', $e->getMessage(), \PHP_EOL;
}

?>
--EXPECT--
TypeError: main(): Argument #2 is not an integer string
TypeError: main(): Argument #2 must be of type GMP|string|int, DateTime given
