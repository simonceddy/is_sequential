<?php
if (!function_exists('is_sequential')) {

    /**
     * Check if an array should be considered Sequential.
     * 
     * This function will return true only if:
     *  - A key with the value of 0 is present,
     *  - Only integer keys are present.
     * 
     * If $array is empty or does not fulfill the above requirements this
     * function will return false.
     *
     * @param array $array
     * @return boolean
     */
    function is_sequential(array $array)
    {
        if (isset($array[0])
            && !preg_match('/\D/', implode('', array_keys($array)))
        ) {
            return true;
        }
        return false;
    }
}
