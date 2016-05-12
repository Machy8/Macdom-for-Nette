<?php

use Tester\Assert;

require 'bootstrap.php';

$o->setup->ncaRegExpInlineTags = ['\<(?:skipthisarea) *[^>]*\>.*\<\/skipthisarea\>'];
$o->setup->ncaRegExpOpenTags = ['\<(?:skipthisarea) *[^>]*\>'];
$o->setup->ncaCloseTags = ['</skipthisarea>'];
$o->setup->skipElements = 'table h6';

Assert::matchFile(
	TEMPLATES."/skip-areas-b.html", 
	$o->compile(file_get_contents(TEMPLATES."/skip-areas-a.html"))
);
