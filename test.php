<?php

require_once 'DrSlump/Protobuf.php';
\DrSlump\Protobuf::autoload();

// lazy because this can autoload if it's placed in an expected path
require_once 'searchrequest.php';



$req = new SearchRequest();
$req->setQuery("foo")
	->setPageNumber(3)
	->setResultPerPage(100);
$encoded = $req->serialize();

$decoded = new SearchRequest($encoded);

foreach ($req as $k => $v) {
	assert($v === $decoded->$k, "values for $k don't match");
}


$iterations = pow(10,6);
$start = microtime(true);
for ($i=0; $i<$iterations; $i++) {
	$x = new SearchRequest($encoded);
}
$end = microtime(true);
$duration = $end - $start;

printf("Ran %d iterations in %d seconds\n", $iterations, $duration);
printf("Average iterations/s %d\n", $iterations/$duration);
