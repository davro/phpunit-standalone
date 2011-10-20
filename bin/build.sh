#!/bin/bash
#
# PHPUnit standalone build script
# 
# TODO remove .git dotfiles.
# TODO 
#
# @author      David Stevens
# @license     http://www.gnu.org/licenses/lgpl.html   LGPL
#

cd ../lib
git clone git://github.com/sebastianbergmann/phpunit.git
git clone git://github.com/sebastianbergmann/dbunit.git
git clone git://github.com/sebastianbergmann/php-file-iterator.git
git clone git://github.com/sebastianbergmann/php-text-template.git
git clone git://github.com/sebastianbergmann/php-code-coverage.git
git clone git://github.com/sebastianbergmann/php-token-stream.git
git clone git://github.com/sebastianbergmann/php-timer.git
git clone git://github.com/sebastianbergmann/phpunit-mock-objects.git
git clone git://github.com/sebastianbergmann/phpunit-selenium.git
git clone git://github.com/sebastianbergmann/phpunit-story.git
git clone git://github.com/sebastianbergmann/php-invoker.git