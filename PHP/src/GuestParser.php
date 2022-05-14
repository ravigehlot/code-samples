<?php namespace RaviGehlot;

use RaviGehlot\Guest;

/**
 * Parses an array into a Guest
 * object with properties.
 * 
 * @package RaviGehlot
 * @author Ravi Gehlot <ravi@gehlot.net>
 * @license Proprietary
 */
class GuestParser extends GuestGeneric {
    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function parse( array $guests ) {
       static::$guests = null;

       foreach( $guests as $guestItem ) {
            $guest = new Guest;
            $guest->setId( isset( $guestItem['guest_id'] ) ? $guestItem['guest_id'] : '' );
            $guest->setType( isset( $guestItem['guest_type'] ) ? $guestItem['guest_type'] : '' );
            $guest->setFirstName( isset( $guestItem['first_name'] ) ? $guestItem['first_name'] : '' );
            $guest->setMiddleName( isset( $guestItem['middle_name'] ) ? $guestItem['middle_name'] : '' );
            $guest->setLastName( isset( $guestItem['last_name'] ) ? $guestItem['last_name'] : '' );
            $guest->setGender( isset( $guestItem['gender'] ) ? $guestItem['gender'] : '' );

            if( $guestItem['guest_booking'] ) {
                foreach( $guestItem['guest_booking'] as $guestBooking ) {
                    $guest->setBookingNumber( isset( $guestBooking['booking_number'] ) ? $guestBooking['booking_number'] : '' );
                    $guest->setShipCode( isset( $guestBooking['ship_code'] ) ? $guestBooking['ship_code'] : '' );
                    $guest->setRoomNumber( isset( $guestBooking['room_no'] ) ? $guestBooking['room_no'] : '' );
                    $guest->setStartTime( isset( $guestBooking['start_time'] ) ? $guestBooking['start_time'] : '' );
                    $guest->setEndTime( isset( $guestBooking['end_time'] ) ? $guestBooking['end_time'] : '' );
                    $guest->setIsCheckedIn( isset( $guestBooking['is_checked_in'] ) ? $guestBooking['is_checked_in'] : '' );
                }
            }

            if( $guestItem['guest_account'] ) {
                foreach( $guestItem['guest_account'] as $guestBooking ) {
                    $guest->setAccountId( isset( $guestBooking['account_id'] ) ? $guestBooking['account_id'] : '' );
                    $guest->setStatusId( isset( $guestBooking['status_id'] ) ? $guestBooking['status_id'] : '' );
                    $guest->setAccountLimit( isset( $guestBooking['account_limit'] ) ? $guestBooking['account_limit'] : '' );
                    $guest->setAllowCharges( isset( $guestBooking['allow_charges'] ) ? $guestBooking['allow_charges'] : '' );
                }
            }

            static::$guests[] = $guest;
       }
    }
}
