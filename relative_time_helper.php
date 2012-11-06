<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('relative_time')) {

    function relative_time($time) {

        $time = (is_string($time) ? strtotime($time) : $time);
        $timeSince = time() - $time;

        $tokens = array (
            31536000 => array('jaar','jaren'),
            2592000 =>  array('maand','maanden'),
            604800 =>   array('week','weken'),
            86400 =>    array('dag','dagen'),
            3600 =>     array('uur','uur'),
            60 =>       array('minuut','minuten'),
            1 =>        array('seconde','seconden')
        );

        foreach ($tokens as $unit => $label) {
            if ($timeSince < $unit) continue;

            $numberOfUnits  = floor($timeSince / $unit);
            $key            = ($numberOfUnits > 1) ? 1 : 0;
            
            return $numberOfUnits . ' ' . $label[ $key ];
        }

    }

}
