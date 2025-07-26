<?php

abstract class Dumper
{
	abstract public function dump($data);
}

class WebDumper extends Dumper
{
	public function dump($data)
	{
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
	}
	public function vip()
	{
		echo "Vipul";
	}
}

$webDumper = new WebDumper();
$webDumper->dump('PHP abstract class is awesome!');
$webDumper->vip();