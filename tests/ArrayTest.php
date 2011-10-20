<?php
 
class ArrayTest extends PHPUnit_Framework_TestCase {
	public function testNewArrayIsEmpty() {
            
		$fixture = array();
		$this->assertEquals(0, sizeof($fixture));
	}
 
	public function testArrayContainsAnElement() {

		$fixture = array();
		$fixture[] = 'Element';

		$this->assertEquals(1, sizeof($fixture));
	}

	public function testArrayContainsMultipleElements() {

		$fixture = array();
		$fixture[] = 'Element0';
		$fixture[] = 'Element1';

		$this->assertEquals(2, sizeof($fixture));
		$this->assertEquals(2, count($fixture));
	}
}