# CodeIgniter - Relative Time Helper (NL)

Converts dates into a relative time e.g. __2 maanden__

## Usage

Any valid date that can be passed to `strtotime()` - http://www.php.net/manual/en/datetime.formats.date.php

A value from the PHP `time()` function e.g. `1333494410`

    relative_time('2012-04-04 12:58:43');
    relative_time('2012-04-04');
    relative_time('12/22/78');
    relative_time(1333494410);

Adapted from - http://stackoverflow.com/a/2916189/617615

## Fork

This fork contains a Dutch adaptation of the relative time format, since's it a bit trickier grammar-wise.