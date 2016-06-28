<?php

use Tester\Assert;


require __DIR__ . '/bootstrap.php';

Assert::matchFile(
	EXPECTED . "/showcase.html",
	$macdom->compile(file_get_contents(ACTUAL . "/showcase.html"))
);
