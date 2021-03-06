<?php
declare(ticks = 1);

/**
 * PHP_Invoker
 *
 * Copyright (c) 2011, Sebastian Bergmann <sb@sebastian-bergmann.de>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Sebastian Bergmann nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @package    PHP
 * @subpackage Invoker
 * @author     Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @copyright  2011 Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://github.com/sebastianbergmann/php-invoker
 * @since      File available since Release 1.0.0
 */

if (!defined('FIXTURE_PATH')) {
    define(
      'FIXTURE_PATH',
      dirname(__FILE__) . DIRECTORY_SEPARATOR .
      '_fixture' . DIRECTORY_SEPARATOR
    );
}

require_once FIXTURE_PATH . 'TestCallable.php';

/**
 * Tests for PHP_Invoker.
 *
 * @package    PHP
 * @subpackage Invoker
 * @author     Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @copyright  2011 Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://github.com/sebastianbergmann/php-invoker
 * @since      Class available since Release 1.0.0
 */
class PHP_InvokerTest extends PHPUnit_Framework_TestCase
{
    protected $callable;
    protected $invoker;

    protected function setUp()
    {
        $this->callable = new TestCallable;
        $this->invoker  = new PHP_Invoker;
    }

    public function testCallableIsCorrectlyInvoked()
    {
        $this->assertTrue(
          $this->invoker->invoke(array($this->callable, 'test'), array(0), 1)
        );
    }

    /**
     * @expectedException PHP_Invoker_TimeoutException
     */
    public function testExceptionIsRaisedOnTimeout()
    {
        $this->invoker->invoke(array($this->callable, 'test'), array(2), 1);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testExceptionIsRaisedOnInvalidCallable()
    {
        $this->invoker->invoke(NULL, array(), 1);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testExceptionIsRaisedOnInvalidTimeout()
    {
        $this->invoker->invoke(array($this->callable, 'test'), array(), NULL);
    }
}
