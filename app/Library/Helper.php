<?php

namespace App\Library;
use Illuminate\Database\Eloquent\Model;

class Helper
{
    public static function camelCase($str, array $noStrip = [])
    {
// non-alpha and non-numeric characters become spaces
        $str = preg_replace('/[^a-z0-9' . implode("", $noStrip) . ']+/i', ' ', $str);
        $str = trim($str);
// uppercase the first character of each word
        $str = ucwords($str);
        $str = str_replace(" ", "", $str);
        $str = lcfirst($str);

        return $str;
    }
    public static function persian2LatinDigit($string)
    {
        $persian_digits = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
        $arabic_digits = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
        $english_digits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

        $string = str_replace($persian_digits, $english_digits, $string);
        $string = str_replace($arabic_digits, $english_digits, $string);

        return $string;
    }
    public static function isMobile() {
        $userAgent = isset($_SERVER["HTTP_USER_AGENT"]) ? $_SERVER["HTTP_USER_AGENT"] : '';
        $mobileKeywords = array(
            'android', 'iphone', 'ipad', 'blackberry', 'windows phone', 'kindle', 'symbian', 'webos',
            'opera mini', 'opera mobi', 'ucbrowser', 'iemobile', 'palm', 'maemo', 'meego', 'bada',
            'fennec', 'nokia', 'motorola', 'sonyericsson', 'lg', 'samsung', 'htc', 'zte', 'huawei'
        );

        foreach ($mobileKeywords as $keyword) {
            if (stripos($userAgent, $keyword) !== false) {
                return true;
            }
        }

        return false;
    }

    public static function unikUrl($model, $url, $id = null)
    {

        $NamespacedModel = 'App\\Models\\' . $model;
        $unik = $NamespacedModel::where('url', $url)->where('id','<>', $id)->first();

        return $unik;
    }



}
