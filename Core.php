<?php
namespace Poirot\Core {
    /**
     * Merge two arrays together.
     *
     * If an integer key exists in both arrays, the value from the second array
     * will be appended the the first array. If both values are arrays, they
     * are merged together, else the value of the second array overwrites the
     * one of the first array.
     *
     * @param  array $a
     * @param  array $b
     * @return array
     */
    function array_merge(array $a, array $b)
    {
        foreach ($b as $key => $value)
            if (array_key_exists($key, $a)) {
                if (is_int($key)) {
                    if (!in_array($value, $a))
                        $a[] = $value;
                }
                elseif (is_array($value) && is_array($a[$key]))
                    $a[$key] = array_merge($a[$key], $value);
                else
                    $a[$key] = $value;
            } else
                $a[$key] = $value;

        return $a;
    }
}
