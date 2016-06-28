<?php

use Tester\Assert;


require __DIR__ . '/bootstrap.php';

Assert::matchFile(
	EXPECTED . "/macros.html",
	$macdom->compile(file_get_contents(ACTUAL . "/macros.html"))
);
