--TEST--
MongoDB\BSON\ObjectID::__set_state() requires valid hex string
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

echo throws(function() {
    MongoDB\BSON\ObjectID::__set_state(['oid' => '0123456789abcdefghijklmn']);
}, 'MongoDB\Driver\Exception\InvalidArgumentException'), "\n";

echo throws(function() {
    MongoDB\BSON\ObjectID::__set_state(['oid' => 'INVALID']);
}, 'MongoDB\Driver\Exception\InvalidArgumentException'), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
OK: Got MongoDB\Driver\Exception\InvalidArgumentException
Invalid BSON ID provided
OK: Got MongoDB\Driver\Exception\InvalidArgumentException
Invalid BSON ID provided
===DONE===
