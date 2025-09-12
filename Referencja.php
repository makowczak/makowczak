<?php
    $foo = 'Bob';
    $bar = &$foo; // referencja na $foo
    $bar = 'Andy';
    echo $bar;
    echo $foo;