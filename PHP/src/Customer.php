<?php namespace RaviGehlot;

/**
 * Creates a Customer object with 
 * customer related data. Allows
 * for retrieval of such data.
 * 
 * @package RaviGehlot
 * @author Ravi Gehlot <ravi@gehlot.net>
 * @license Proprietary
 */
class Customer {
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private static $instance = null;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $firstName;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $lastName;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $address1;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $address2;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $state;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $city;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $zipCode;

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
     * @param string $first_name
     * @return Customer
     */
    public function setFirstName( string $first_name ) : Customer {
        $this->firstName = $first_name;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getFirstName() : string {
        return $this->firstName;
    }

    /**
     * Undocumented function
     *
     * @param string $last_name
     * @return Customer
     */
    public function setLastName( string $last_name ) : Customer {
        $this->lastName = $last_name;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getLastName() : string {
        return $this->lastName;
    }

    /**
     * Undocumented function
     *
     * @param string $address_1
     * @return Customer
     */
    public function setAddress1( string $address_1 ) : Customer {
        $this->address1 = $address_1;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getAddress1() : string {
        return $this->address1;
    }

    /**
     * Undocumented function
     *
     * @param string $address_2
     * @return Customer
     */
    public function setAddress2( string $address_2 ) : Customer {
        $this->address2 = $address_2;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getAddress2() : string {
        return $this->address2;
    }

    /**
     * Undocumented function
     *
     * @param string $state
     * @return Customer
     */
    public function setState( string $state ) : Customer {
        $this->state = $state;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $city
     * @return Customer
     */
    public function setCity( string $city ) : Customer {
        $this->city = $city;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getCity() : string {
        return $this->city;
    }

    /**
     * Undocumented function
     *
     * @param integer $zipCode
     * @return Customer
     */
    public function setZipCode( int $zipCode ) : Customer {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getZipCode() : int {
        return $this->zipCode;
    }
}