# Humongous (by Worddrop) [![Build Status](https://travis-ci.org/worddrop/humongous.svg?branch=master)](https://travis-ci.org/worddrop/humongous)
A library that helps you create readable and short numbers from numbers that are larger than 999.

## Installation
Currently, the only reliable way (and recommended way) to install Humongous is by using PHP's package manager Composer. 

### Using Composer
``` json
{
    "require": {
        "worddrop/humongous": "dev-master"
    }
}
```

## Usage
``` php
<?php
use Humongous\Humongous;

$number = 13224;
$niceNumber = Humongous::parse($number, 1);
echo $niceNumber; // 13.2k
```

## API
``` php
Humongous::parse(int $number, int $precision = 1, string $decimalSeparator = '.');
```

**Variables**
- `$number` The number that has to be formatted.
- `$precision` The number of decimals that have to be preserved (0's will automatically be trimmed off)
- `$decimalSeparator` A character to separate the decimals.

**Returns** `string`

## License
This project is licensed under MIT license. For the full copyright and license information, please view the LICENSE file
that was distributed with this source code.

## Contributing
You may contribute in any way you want, as long as you agree that your code will be licensed under the same license as
the project itself.
