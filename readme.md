# dump_die($var); the missing function of symfony's VarDumper component

Though this function was rejected by symfony core team, it will probably still save tons of keystrokes around the world.

## Installation

    composer require ivoba/dump-die --dev

## Usage

    dump_die($var);

Shortcuts:  

    d($var); // shortcut for dump($var);
    dd($var); // shortcut for dump_die($var);

### Credits

https://github.com/symfony/symfony/pull/13657
https://github.com/symfony/symfony/pull/17267
https://github.com/symfony/symfony/pull/19096

one function package ;) npm style...


#### Todo
test html output
https://github.com/donatj/mock-webserver
