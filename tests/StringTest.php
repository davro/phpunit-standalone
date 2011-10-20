<?php
 
class StringTest extends PHPUnit_Framework_TestCase {
    
	public function testStringContainsSingleCharacter() {

		$fixture = (string) '';
                $this->assertEquals(0, strlen($fixture));
                
		$fixture = 'a';
		$this->assertEquals(1, sizeof($fixture));
	}

	public function testStringContainsMultipleCharacters() {

		$fixture = (string) '';
                $this->assertEquals(0, strlen($fixture));
                
		$fixture = 'ab';
		$this->assertEquals(2, strlen($fixture));
                $this->assertEquals(2, strlen($fixture));
	}
}