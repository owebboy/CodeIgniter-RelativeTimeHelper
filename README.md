# CodeIgniter - Relative Time Helper

Converts dates into a relative time e.g. __2 months__

## Usage

Any valid date that can be passed to `strtotime()` - http://www.php.net/manual/en/datetime.formats.date.php
A value from the PHP `time()` function e.g. `1333494410`

    relative_time('2012-04-04 12:58:43');
    relative_time('2012-04-04');
    relative_time('12/22/78');
    relative_time(1333494410);

Adapted from - http://stackoverflow.com/a/2916189/617615

