<?php namespace RaviGehlot;

use Guest;

/**
 * Sorts a multidimensional array using
 * multiple keys.
 * 
 * @package RaviGehlot
 * @author Ravi Gehlot <ravi@gehlot.net>
 * @license Proprietary
 */
class GuestSorter extends GuestGeneric {
    /**
     * Undocumented function
     *
     * @param array $haystack
     * @param array $needles
     * @param [type] $sort
     * @return array
     */
    public function sort( array $haystack, array $needles, $sort ) : array {
        $temp = [];
        array_walk_recursive( $haystack, function( $value, $key ) use ( $needles, &$temp ) {
            if( in_array( $key, $needles ) ) {
                $temp[$key][] = $value;
            }

            return $temp;
        });

        $needleToSort = array_map( function($needleToSort) {
            return $needleToSort;
        }, $haystack );

        array_multisort( $needleToSort, $sort, $haystack );

        return $haystack;
    }
}