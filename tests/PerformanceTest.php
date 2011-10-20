<?php
require_once 'PHPUnit/Extensions/PerformanceTestCase.php';
 
class PerformanceTest extends PHPUnit_Extensions_PerformanceTestCase {

    public function testPerformanceMaxRuntimeZero() {

        $this->setMaxRunningTime(0.0);
        sleep(0);
    }

    public function testPerformanceMaxRuntimeOne() {

        $this->setMaxRunningTime(1.0);
        sleep(0.9999);
    }

    public function testPerformanceMaxRuntimeOneEdgeCase() {

        //ini_set("precision", 4);
        //ini_set("precision", 1);

        $this->setMaxRunningTime(1.0);
        sleep(0.9999999999999999);
    }
}