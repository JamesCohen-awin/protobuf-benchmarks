<?php

require_once 'pb_proto_searchrequest.php';

$req = new SearchRequest();
$req->setQuery("foo")
	->setPageNumber(3)
	->setResultPerPage(100);
$encoded = $req->serializeToString();

$decoded = new SearchRequest();
$decoded->parseFromString($encoded);

$methods = array('getQuery','getPageNumber','getResultPerPage');
foreach ($methods as $k) {
	assert($req->$k() === $decoded->$k(), "values for $k don't match");
}

$iterations = pow(10,6);
$start = microtime(true);
for ($i=0; $i<$iterations; $i++) {
	$x = new SearchRequest();
	$x->parseFromString($encoded);
}
$end = microtime(true);
$duration = $end - $start;

printf("Ran %d iterations in ~%d seconds\n", $iterations, $duration);
printf("Average iterations/s %d\n", $iterations/$duration);
