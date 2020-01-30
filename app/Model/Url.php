<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereurl($url)
 * @method static where(string $string, $any)
 */
class Url extends Model
{
    public static function get_unique_short_url()
    {
        $short_url = base_convert(rand(10000,99999),10,36);
        if (self::where('short_url',$short_url)->first()){
           return self::get_unique_short_url();
        }
        return $short_url;
    }
}
