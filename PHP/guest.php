<?php require_once __DIR__ . '/bootstrap.php';

$sorter = new RaviGehlot\GuestSorter;
$parser = new RaviGehlot\GuestParser;

$keysToSortOn = [
    'is_checked_in', 
    'guest_id'
];

// Return guest array of guest objects.
$parser->parse( $arrayToBeSorted );

findByAccountId( $parser, 10000519 ); // Find by account id.
findByFirstName( $parser, 'Ismael' ); // Find by first name.
printAllGuests( $parser ); // Show all guests.
printAllGuestIds( $parser ); // Show all guest ids.
printCatchyPhraseByIndex( $parser, 2 ); // Print catchy phrase by index.
sortGuests( $parser, $sorter, $arrayToBeSorted, $keysToSortOn, SORT_DESC ); // Sort and show all guests

function findByAccountId( $parser, $accountId ) {
    echo $parser->prettyPrint( $parser->findByAccountId( $accountId ) );
}

function findByFirstName( $parser, $firstName ) {
    echo $parser->prettyPrint( $parser->findByFirstName( $firstName ) );
}

function printAllGuests( $parser ) {
    echo $parser->prettyPrint( $parser->getAll() );
}

function printAllGuestIds( $parser ) {
    foreach( $parser->getAll() as $guest )
        echo $guest->getId() . "\n";
}

function printCatchyPhraseByIndex( $parser, $index ) {
    $member = $parser->findOne( $index );
    echo "\n The {$member->getType()} member Mr. {$member->getLastName()} has an account limit of {$member->getAccountLimit()}. \n\n";
}

function sortGuests( $parser, $sorter, $arrayToBeSorted, $keysToSortOn, $sortOrder ) {
    $sorted = $sorter->sort( $arrayToBeSorted, $keysToSortOn, $sortOrder ); 
    $parser->parse( $sorted );
    echo $sorter->prettyPrint( $parser->getAll() );
}
