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
