Latest release: 0.1


### Introduction

PhpUnitStandalone enables PHPUnit run outside of the Pear Repository this 
project includes the related libraries required for PhpUnit to Standalone.
The bin/phpunit script sets up the include paths for the PhpUnit's Autoloader.

Project status: Usable, but experimental.

Follow @chillierdavro for the latest developments.


### Features

* LGPL Licence


### How does it work?

Setup your $PATH variable to use something like this.
PATH="$PATH:/home/davro/workspace/project-phpunit-standalone/bin"

Remember to source your changes into your current session, something like.
source ~/.bashrc 

Then just run the command to get PhpUnit help
phpunit 

Run all your tests
phpunit tests/


### Tutorials

PhpUnit http://www.phpunit.de/manual/current/en/


### Tests

There are some basic sanity tests.
phpunit tests/


### Known Issues

* No bugs found.


### Contributors

* David Stevens (davro)


### License

PhpUnitStandalone is released under the LGPL license.