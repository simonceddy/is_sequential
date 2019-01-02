# is_sequential

This library provides a single function that determines if an array should be considered sequential.

## Installation

You can install is_sequential with Composer:

```sh
composer require simoneddy/is_sequential
```

Alternatively you can clone/download this repository and simply include __src/is_sequential.php__ where neccessary in your project.

## Basic Use

Once the function is accessible (either by Composer's autoloader or including the function directly), it can be used as any standard PHP function:

```php
$myArray = [1, 2, 3];
$myOtherArray = ['test' => 1, 2, 3];

var_dump(is_sequential($myArray)); // returns true
var_dump(is_sequential($myOtherArray)); // returns false
```

The function is type hinted to only accept arrays, and will only ever return a boolean.