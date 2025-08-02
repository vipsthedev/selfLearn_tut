<?php

$data = [];

try {
	$f = fopen('data.csv', 'r');

	do {
		$row = fgetcsv($f);
		$data[] = $row;
	} while ($row);

	fclose($f);
} catch (Exception $ex) {
	echo $ex->getMessage();
}
