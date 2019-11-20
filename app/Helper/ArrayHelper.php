<?php


namespace ArtifactCreation\Helper;


class ArrayHelper
{
    public static function valueByKeySave($array, $key, $fallbackReturn = null) {

        if (isset($array[$key])) {
            return $fallbackReturn;
        }

        return $array[$key];
    }
}