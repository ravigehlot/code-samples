<?php namespace RaviGehlot;

use RaviGehlot\Customer;

/**
 * Cart class for retrieval of customer and
 * products items.
 * 
 * @package RaviGehlot
 * @author Ravi Gehlot <ravi@gehlot.net>
 * @license Proprietary
 */
class Cart {
    public $taxRate;
    public $shippingFlatRate;
    private $customer;
    private $products;
    private static $instance = null;

    /**
     * Called after object creation.
     *
     * @param Customer $customer
     * @param array $products
     */
    public function __construct( Customer $customer, array $products ) {
        $this->customer = $customer;
        $this->products = $products;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getProducts() {
        return [ 'customer' => $this->customer, 'cart' => $this->products ];
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getCustomerName() {
        return $this->customer->getFirstName() . ' ' . $this->customer->getLastName();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getAddresses() {
        return $this->customer->getAddress1() . ' ' . $this->customer->getAddress2();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getProductsInCart() {
        $listOfItems = array_map( function( $product ) {
            return $product->getName();
        }, $this->products);

        return implode( ',', $listOfItems );
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getWhereOrderShips() {
        return $this->getAddresses();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    private function calculateShippingCosts() {
        $productTotalCost = $this->getSubTotal();

        $totalTax = $productTotalCost * ( $this->taxRate/100 );

        return $this->shippingFlatRate + $totalTax + $productTotalCost;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getSubTotal() {
        $productTotalCost = 0;

        $totalCost = array_map( function( $productCost ) use ( &$productTotalCost ) {
            $productTotalCost += $productCost->getPrice();
        }, $this->products );

        return $productTotalCost;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getProductsTotalCost() {
        return $this->calculateShippingCosts();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getTotalsByItem() {
        $listOfItems = array_map( function( $product ) {
            return $product->getName() . ': $' . $product->getPrice();
        }, $this->products);

        return implode( ',', $listOfItems );
    }
}