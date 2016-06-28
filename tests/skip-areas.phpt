<?php

use Tester\Assert;


require __DIR__ . '/bootstrap.php';

$macdom->setup->skipElements = 'table h6 skipthisarea';

Assert::matchFile(
	EXPECTED . "/skip-areas.html",
	$macdom->compile(file_get_contents(ACTUAL . "/skip-areas.html"))
);
