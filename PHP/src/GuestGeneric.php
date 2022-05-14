<?php namespace RaviGehlot;

use Console_Table;

/**
 * General class that provides helper
 * methods for the Guest set of classes.
 * 
 * @package RaviGehlot
 * @author Ravi Gehlot <ravi@gehlot.net>
 * @license Proprietary
 */
class GuestGeneric {
    /**
     * Guest information, booking
     * and account info.
     *
     * @var array
     */
    protected static $guests;

    /**
     * Columns
     */
    const LABELS = [
        'Id', 
        'Type', 
        'Full Name', 
        'Gender', 
        'Booking No',
        'Ship Code',
        'Room No',
        'Start Time',
        'End Time',
        'Checked-in',
        'Account Id',
        'Status Id',
        'Account Limit',
        'Allow Charges'
    ];

    /**
     * Undocumented function
     *
     * @param array $items
     * @return string
     */
    public final function prettyPrint( array $items ) : string {
        $consoleTable = new Console_Table();
        
        $consoleTable->setHeaders( self::LABELS );

        foreach( $items as $item ) {
            $consoleTable->addRow([
                $item->getId(), 
                $item->getType(), 
                $this->formatFullName( [ $item->getFirstName(), $item->getMiddleName(), $item->getLastName() ] ),
                $this->formatGender( $item->getGender() ),
                $item->getBookingNumber(),
                $item->getShipCode(),
                $item->getRoomNumber(),
                $this->formatDate( $item->getStartTime() ),
                $this->formatDate( $item->getEndTime() ),
                $this->formatIsCheckedIn( $item->getIsCheckedIn() ),
                $item->getAccountId( $item->getAccountId() ),
                $item->getStatusId( $item->getStatusId() ),
                $item->getAccountLimit( $item->getAccountLimit() ),
                $this->formatAllowCharges( $item->getAllowCharges() ),
            ]);
        }

        return $consoleTable->getTable() . "\n";
    }

    /**
     * Undocumented function
     *
     * @param int $timestamp
     * @return string
     */
    public static function formatAllowCharges( bool $allowCharges ) : string {
        return ( $allowCharges == 1 ) ? 'yes' : 'no';
    }

    /**
     * Undocumented function
     *
     * @param int $timestamp
     * @return string
     */
    public static function formatIsCheckedIn( bool $checkedIn ) : string {
        return ( $checkedIn == 1 ) ? 'yes' : 'no';
    }

    /**
     * Undocumented function
     *
     * @param int $timestamp
     * @return string
     */
    public static function formatDate( $timestamp ) : string {
        return $timestamp ? date( 'g:i a', $timestamp ) : '';
    }

    /**
     * Undocumented function
     *
     * @param array $nameParts
     * @return string
     */
    public final function formatFullName( array $nameParts ) : string {
        return implode( ' ', array_filter( $nameParts ) );
    }

    /**
     * Undocumented function
     *
     * @param string $gender
     * @return string
     */
    public final function formatGender( string $gender ) : string {
        return ( 'm' === strtolower( $gender ) ) ? 'Male' : 'Female';
    }

    /**
     * Undocumented function
     *
     * @param integer $index
     * @return guest
     */
    public function findOne( int $index ) : Guest {
        return ( static::$guests[$index] instanceof Guest ) ? static::$guests[$index] : new Guest;
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getAll() {
        return static::$guests;
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    private function findByValue( string $value, $method ) : array {
        return array_filter( array_map( function( $guest ) use ( $value, $method ) {
            if( strcasecmp( trim( $guest->$method() ), $value ) == 0 ) return $guest;
        }, static::$guests ) );
    }

    /**
     * Undocumented function
     *
     * @param [type] $firstName
     * @return void
     */
    public function findByFirstName( string $firstName ) : array {
        return $this->findByValue( $firstName, 'getFirstName' );
    }

    /**
     * Undocumented function
     *
     * @param [type] $accountId
     * @return void
     */
    public function findByAccountId( int $accountId ) : array {
        return $this->findByValue( $accountId, 'getAccountId' );
    }
}