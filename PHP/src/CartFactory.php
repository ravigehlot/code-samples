<?php namespace RaviGehlot;

use RaviGehlot\Cart;

/**
 * Creates a cart with 1 customer 
 * and 1 product or more.
 * 
 * @package RaviGehlot
 * @author Ravi Gehlot <ravi@gehlot.net>
 * @license Proprietary
 */
class CartFactory {
    /**
     * Creates a cart.
     *
     * @param [type] $customer
     * @param array $products
     * @return Cart
     */
    public static function create( $customer, array $products ) : Cart {
        return new Cart( $customer, $products );
    }
}