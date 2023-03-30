<?php

use ParallelError\Test;

require_once __DIR__ . '/vendor/autoload.php';

$test = new Test();
$test->prop = 'value';

\parallel\bootstrap(__DIR__ . '/vendor/autoload.php');
\parallel\run(function (Test $test) {
    echo $test->prop . PHP_EOL;
}, [$test]);

echo 'Main' . PHP_EOL;
