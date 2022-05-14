<?php namespace RaviGehlot;

/**
 * Creates a Guest object with 
 * guest related data. Allows
 * for retrieval of such data.
 * 
 * @package RaviGehlot
 * @author Ravi Gehlot <ravi@gehlot.net>
 * @license Proprietary
 */
final class Guest {
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $id;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $type;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $firstName;
    
    /**
     * Middle name variable
     *
     * @var string|null
     */
    private $middleName;

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
    private $gender;

    /**
     * Booking number variable
     *
     * @var int|null
     */
    private $bookingNumber;

    /**
     * Ship code variable
     *
     * @var string
     */
    private $shipCode;

    /**
     * Room number variable
     *
     * @var string
     */
    private $roomNumber;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $startTime;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $endTime;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $isCheckedIn;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $accountId;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $statusId;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $accountLimit;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $allowCharges;

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return void
     */
    public function setId( int $guest_id ) {
        $this->id = $guest_id;
    }

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getId() : int {
        return $this->id ?: '';
    }
   
    /**
     * Undocumented function
     *
     * @param string $guest_type
     * @return void
     */
    public function setType( string $type ) {
        $this->type = $type;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getType() : string {
        return $this->type ?: '';
    }

    /**
     * Undocumented function
     *
     * @param string $first_name
     * @return void
     */
    public function setFirstName( string $first_name ) {
        $this->firstName = $first_name;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getFirstName() : string {
        return $this->firstName ?: '';
    }

    /**
     * Undocumented function
     *
     * @param string|NULL $middle_name
     * @return void
     */
    public function setMiddleName( $middle_name ) {
        $this->middleName = $middle_name;
    }
    
    /**
     * Undocumented function
     *
     * @return string
     */
    public function getMiddleName() : ?string {
        return $this->middleName ?: '';
    }

    /**
     * Undocumented function
     *
     * @param string $last_name
     * @return void
     */
    public function setLastName( string $last_name ) {
        $this->lastName = $last_name;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getLastName() : string {
        return $this->lastName ?: '';
    }

    /**
     * Undocumented function
     *
     * @param string $gender
     * @return void
     */
    public function setGender( string $gender ) {
        $this->gender = $gender;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getGender() : string {
        return $this->gender ?: '';
    }

    /**
     * Undocumented function
     *
     * @param int|null $bookingNumber
     * @return void
     */
    public function setBookingNumber( $booking_number ) {
        $this->bookingNumber = $booking_number;
    }

    /**
     * Get Booking Number function
     *
     * @return int|null
     */
    public function getBookingNumber() : ?int {
        return $this->bookingNumber ?: '';
    }

    /**
     * Set ship code function
     *
     * @param string $shipCode
     * @return void
     */
    public function setShipCode( string $ship_code ) {
        $this->shipCode = $ship_code;
    }

    /**
     * Get ship code function
     *
     * @return string
     */
    public function getShipCode() : string {
        return $this->shipCode ?: '';
    }

    /**
     * Set room number function
     *
     * @param string $room_no
     * @return void
     */
    public function setRoomNumber( string $room_no ) {
        $this->roomNumber = $room_no;
    }

    /**
     * Get room number function
     *
     * @return string
     */
    public function getRoomNumber() : string {
        return $this->roomNumber ?: '';
    }

    /**
     * Undocumented function
     *
     * @param int|string $startTime
     * @return void
     */
    public function setStartTime( $start_time ) {
        $this->startTime = $start_time;
    }

    /**
     * Undocumented function
     *
     * @return int
     */
    public function getStartTime() {
        return $this->startTime;
    }

    /**
     * Undocumented function
     *
     * @param int|string $endTime
     * @return void
     */
    public function setEndTime( $end_time ) {
        $this->endTime = $end_time;
    }

    /**
     * Undocumented function
     *
     * @return int
     */
    public function getEndTime() {
        return $this->endTime;
    }

    /**
     * Undocumented function
     *
     * @param bool $isCheckedIn
     * @return void
     */
    public function setIsCheckedIn( bool $is_checked_in ) {
        $this->isCheckedIn = $is_checked_in;
    }

    /**
     * Undocumented function
     *
     * @return mixed bool or empty
     */
    public function getIsCheckedIn() {
        return $this->isCheckedIn ?: '';
    }

    /**
     * Undocumented function
     *
     * @param int $accountId
     * @return void
     */
    public function setAccountId( int $account_id ) {
        $this->accountId = $account_id;
    }

    /**
     * Undocumented function
     *
     * @return int
     */
    public function getAccountId() : int {
        return $this->accountId ?: '';
    }

    /**
     * Undocumented function
     *
     * @param mixed $statusId int or empty
     * @return void
     */
    public function setStatusId( $status_id ) {
        $this->statusId = $status_id;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getStatusId() {
        return $this->statusId ?: '';
    }

    /**
     * Undocumented function
     *
     * @param int $accountLimit
     * @return void
     */
    public function setAccountLimit( int $account_limit ) {
        $this->accountLimit = $account_limit;
    }

    /**
     * Undocumented function
     *
     * @return int
     */
    public function getAccountLimit() : int {
        return $this->accountLimit;
    }

    /**
     * Undocumented function
     *
     * @param bool $allowCharges
     * @return void
     */
    public function setAllowCharges( bool $allow_charges ) {
        $this->allowCharges = $allow_charges;
    }

    /**
     * Undocumented function
     *
     * @return bool
     */
    public function getAllowCharges() : bool {
        return $this->allowCharges ?: '';
    }
}
