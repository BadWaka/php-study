<?php

namespace Foo\Bar;

// 引入
include 'file1.php';

const FOO = 2;
function f00()
{

}

class foo
{
    static function staticmethod()
    {

    }
}

//foo();
foo::staticmethod();
echo FOO;

subnamespace\foo();
subnamespace\foo::staticmethod();
echo subnamespace\FOO;

?>