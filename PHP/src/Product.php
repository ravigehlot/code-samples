<?php namespace RaviGehlot;

/**
 * Creates a Product object with 
 * product related data. Allows
 * for retrieval of such data.
 * 
 * @package RaviGehlot
 * @author Ravi Gehlot <ravi@gehlot.net>
 * @license Proprietary
 */
class Product {
    private $id;
    private $name;
    private $quantity;
    private $price;

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return Product
     */
    public function setId( int $id ) : Product {
        $this->id = $id;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getId() : int {
        return $this->id;
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return Product
     */
    public function setName( string $name ) : Product {
        $this->name = $name;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getName() : string {
        return $this->name;
    }

    /**
     * Undocumented function
     *
     * @param integer $quantity
     * @return Product
     */
    public function setQuantity( int $quantity ) : Product {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getQuantity() : int {
        return $this->quantity;
    }

    /**
     * Undocumented function
     *
     * @param float $price
     * @return Product
     */
    public function setPrice( float $price ) : Product {
        $this->price = $price;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return float
     */
    public function getPrice() : float {
        return $this->price;
    }
}