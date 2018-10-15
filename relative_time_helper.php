<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('relative_time')) {

    function relative_time($time) {

        $time = (is_string($time) ? strtotime($time) : $time);
        $timeSince = time() - $time;

        $tokens = array (
            31536000 => array('year','years'),
            2592000 =>  array('month','months'),
            604800 =>   array('week','weeks'),
            86400 =>    array('day','days'),
            3600 =>     array('hour','hours'),
            60 =>       array('minute','minutes'),
            1 =>        array('second','seconds')
        );

        foreach ($tokens as $unit => $label) {
            if ($timeSince < $unit) continue;

            $numberOfUnits  = floor($timeSince / $unit);
            $key            = ($numberOfUnits > 1) ? 1 : 0;
            
            return $numberOfUnits . ' ' . $label[ $key ];
        }

    }

}
