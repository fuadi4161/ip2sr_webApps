<?php

namespace App\CompOS\Util;

class Util {

    public static function contains($string, $needle) {
        $pos = strpos($string, $needle);
        if (!($pos === FALSE)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}