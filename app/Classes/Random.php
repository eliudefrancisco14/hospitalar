<?php
namespace App\Classes;


class Random {


    public static function AlphaNumeric($length)
    {
        $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $clen   = strlen( $chars )-1;
        $id  = '';

        for ($i = 0; $i < $length; $i++) {
                $id .= $chars[mt_rand(0,$clen)];
        }
        return ($id) ?? 0;
    }
}

