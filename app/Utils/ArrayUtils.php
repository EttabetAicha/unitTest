<?php

namespace App\Utils;

class ArrayUtils
{
    public static function fusionnerTableaux($tableau1, $tableau2)
    {
        $result = array_unique(array_merge($tableau1, $tableau2));
        sort($result);
        return $result;
    }
}
