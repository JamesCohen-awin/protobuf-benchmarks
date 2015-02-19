<?php

$json = <<<EO_JSON
{
    "query": "foo",
    "page_number": 3,
    "result_per_page": 100
}
EO_JSON;

$decodedJson = json_decode($json);

$tests = array(
    'json_decode' => $json,
    'json_encode' => $decodedJson
);

// testing iterations
$n = 1000000;

foreach ($tests as $method => $payload) {

    echo "Starting $method test". PHP_EOL;

    $testStart = microtime(true);
    for($i=0;$i<$n;$i++) {
        $x = $method($payload);
    }

    $testEnd = microtime(true);
    $testTime = $testEnd - $testStart;
    $testIterationTime = $testTime / $n;

    printf('Tested %d iterations in %0.1f seconds (%s iterations/s)'. PHP_EOL,
        $n, $testTime, number_format($n/$testTime)
    );
}
