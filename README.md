# PHP-era
New destination for the PHP knowledge
# PHP-basic
```
# echo with comma will concat the text but not with print
# & is variable reference 
# <?= $variable ?> can echo single variable
# $$ define the value of older variable as variable
  <?php
     $foo = 'bar';
     $$foo = 'baz';
     echo $foo, $bar; // result => 'barbarz';
  ?>

/* PHP Data Types & Type Casting */
# 4 Scalar Types
    # bool
    # int
    # float
    # string

# 4 Compound Types
    # array
    # object
    # callable
    # iterable

# 2 Special Types
    # resource
    # null
# declare(strict_types = 1) // strict mode on 

/* PHP String */
- '${} string interpolation' is deprecated since PHP 8.2.

/* Operator Precedence & Associativity */
// follow this link 
https://www.php.net/manual/en/language.operators.precedence.php

/* Loops */
using extra function on for loop condition expression is bad practice.
bad practice => for($i = 0, $i < count($array); $i++){}
good practice => for($i = 0, $length = count($array); $i < $length; $i++){}

Becasue  
Loop have to run many times until the condition is false. If we use extra function within loop can cause performance issues. So, just defined the variable from the intitial state for performance issue. 

Don't use functions as a comparison directly because it will reduce the performance.
if you want to work with functions for logical statements use switch/case;

Switch() / Case can create multiple expression;
match() can't create muliple expression just use function expression for data;


require => can include multiple times.
require_once => can include only one time in one file.

//Variables
every variables in php is local scope.

callable function is normal function.
closure function is anonymous function.
fn() => single expression // arrow expression.