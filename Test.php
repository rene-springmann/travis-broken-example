<?php

class_alias('\PHPUnit_Framework_TestCase', 'PHPUnit\Framework\TestCase');

class Test extends PHPUnit\Framework\TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1, 2);
  	}
}

?>
