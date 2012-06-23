--TEST--
SplFileObject::key(): error case with parameters
--CREDITS--
Rafael Dohms <rdohms at php.net>
--FILE--
<?php
$file = __DIR__ . '/SplFileObject.file';
$fo = new SplFileObject($file, 'w');

echo $fo->key(1);
?>
--CLEAN--
<?php
$file = __DIR__ . '/SplFileObject.file';
unlink($file);
?>
--EXPECTF--
Warning: SplFileObject::key() expects exactly 0 parameters, 1 given in %s on line %d