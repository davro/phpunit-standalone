<?php

class DataTest extends PHPUnit_Framework_TestCase {

	public static function providerTesting() {

		return array(
			array(0, 0, 0),
			array(0, 1, 1),
			array(1, 0, 1),
			array(1, 1, 2)
		);
	}

	/**
	 * @dataProvider providerTesting
	 */
	public function testAdd($a, $b, $c) {

		$this->assertEquals($c, $a + $b);
	}
}