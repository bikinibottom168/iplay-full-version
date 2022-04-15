<?php 
// HELPER FOR IAMTHEME.COM
// VERSION 1.0
// AUTHOR IAMTHEME.COM
use App\Option;




if ( !function_exists('option_get') )
{
    function option_get($key)
    {
        $data = Option::where('key', $key)->first();
        if($data)
        {
            return $data['value'];
        }
        else
        {
            return false;
        }
    }
}

if ( !function_exists('option_set') )
{
    function option_set($key, $value)
    {
        $check = Option::where('key', $key)->first();
        if($check)
        {
            $check->delete();
        }

        $data = new Option;
        $data->key = $key;
        $data->value = $value;
        $data->save();
        return $value;
    }
}