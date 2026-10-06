<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

if (!function_exists('str_unique')) {
    /**
     * @param int $length
     * @return string
     */
    function str_unique(int $length = 30): string
    {
        $side = rand(0,1);
        $salt = rand(0,9);
        $len = $length - 1;
        $string = \Illuminate\Support\Str::random($len <= 0 ? 7 : $len);
        $separatorPos = (int) ceil($length/4);
        $string = $side === 0 ? ($salt . $string) : ($string . $salt);
        $string = substr_replace($string, '-', $separatorPos, 0);
        return substr_replace($string, '-', -$separatorPos, 0);
    }
}

function user_id(){
    return optional(Auth::user())->id;
}


if (!function_exists('user')) {
    function user() {
        return auth()->user();
    }
}

if (! function_exists('number_2_format')) {
    function number_2_format($value)
    {
        return  number_format( $value , 2, '.' , ',' );
    }
}
