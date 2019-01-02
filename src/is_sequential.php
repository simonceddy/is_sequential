<?php
if (!function_exists('is_sequential')) {
    function is_sequential(array $array)
    {
        if (isset($array[0])
            && is_int(implode('', array_keys($array)))
        ) {
            return true;
        }
        return false;
    }
}
