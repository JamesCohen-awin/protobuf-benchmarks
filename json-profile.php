<?php

$json = <<<EO_JSON
{
    "glossary": {
        "title": "example glossary",
		"GlossDiv": {
            "title": "S",
			"GlossList": {
                "GlossEntry": {
                    "ID": "SGML",
					"SortAs": "SGML",
					"GlossTerm": "Standard Generalized Markup Language",
					"Acronym": "SGML",
					"Abbrev": "ISO 8879:1986",
					"GlossDef": {
                        "para": "A meta-markup language, used to create markup languages such as DocBook.",
						"GlossSeeAlso": ["GML", "XML"]
                    },
					"GlossSee": "markup"
                }
            }
        }
    }
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