# ev-php-exam

## Problem 1

Filename: `number1.php`

Accepts input via `$argv[1]`, `$_GET['q']`

* * *

## Problem 2

Filename: `number2.php`

Accepts input via `$argv[1]`, `$_GET['q']` for the array, and `$argv[2]`, `$_GET['r']` for the needle

Input the array as a list of comma-delimited integers, ex: `1,2,3,4,5,6`

In the commandline: `php number2.php 3,2,3,4,3,6 3` will output **3**

* * *

## Problem 3

Filename: `number3/*`

* * *

## Problem 4

Filename: `number4.php`

Accepts input via `$argv[1]`, `$_GET['q']`

Input the array as a list of comma-delimited integers, ex: `1,2,3,4,5,6`

In the commandline: `php number4.php 3,2,3,4,3,6` will output **6**

* * *

## Problem 5

Filename: `number5.php`

Accepts input via `$argv[1]` for the filename

* * *

## Problem 6

Filename: `number6.php`

Accepts input via `$argv[1]`, `$_GET['q']`

Input the array as a list of comma-delimited integers, ex: `1,2,3,4,5,6`

In the commandline: `php number6.php 1,21,53,84,50,66,7,38,9` will output:

```
array(2) {
  'even' =>
  array(4) {
    [0] =>
    int(84)
    [1] =>
    int(50)
    [2] =>
    int(66)
    [3] =>
    int(38)
  }
  'odd' =>
  array(5) {
    [0] =>
    int(1)
    [1] =>
    int(21)
    [2] =>
    int(53)
    [3] =>
    int(7)
    [4] =>
    int(9)
  }
}
```

* * *

## Problem 7

Filename: `number7.php`

Accepts input via `$argv[1]`, `$_GET['q']`

* * *

## Appendix

Code to generate integer_list.txt in Python:

```python
import random
f = open('integer_list.txt', 'w'); f.write('\n'.join(str(x) for x in [random.randrange(0,10001) for i in range(100)])); f.close();
```
