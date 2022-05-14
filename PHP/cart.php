<?php require_once __DIR__ . '/bootstrap.php';

define( 'TAX_RATE', 7 ); // 7%
define( 'SHIPPING_FLAT_RATE', 5.99 ); // 7%

$cartFactory = new RaviGehlot\CartFactory;
$customer1 = new RaviGehlot\Customer;
$customer2 = new RaviGehlot\Customer;
$product1 = new RaviGehlot\Product;
$product2 = new RaviGehlot\Product;

// Customer 1
$customer1->setFirstName( 'Bill' )->setLastName( 'Smith' )
            ->setAddress1( '1234 End of Curb' )->setAddress2( '8974 My Business instead' )
            ->setCity( 'Sevierville' )->setState( 'TN' )
            ->setZipCode( 37876 );

// Customer 2
$customer2->setFirstName( 'Ravi' )->setLastName( 'Gehlot' )
            ->setAddress1( '1224 World ends' )->setAddress2( '3245 To Grandmas house instead' )
            ->setCity( 'Sarasota' )->setState( 'FL' )
            ->setZipCode( 1234 );

// Product 1
$product1->setId( 1 )->setName( 'Macanudo Cigars' )->setQuantity( 2 )->setPrice( 13.75 );
// Product 2
$product2->setId( 2 )->setName( 'Villa Antinori Toscana 2015' )->setQuantity( 1 )->setPrice( 19.99 );

$cart = $cartFactory::create( $customer2, [ $product1, $product2 ] );
$cart->taxRate = TAX_RATE;
$cart->shippingFlatRate = SHIPPING_FLAT_RATE;
echo "\n\n";

// Customer Name
echo $cart->getCustomerName();
echo "\n\n";

// Customer Addresses
echo $cart->getAddresses();
echo "\n\n";

// Items in Cart
echo $cart->getProductsInCart();
echo "\n\n";

// Where Order Ships
echo $cart->getWhereOrderShips();
echo "\n\n";

// Cost of item in cart, including shipping and tax
echo $cart->getProductsTotalCost();
echo "\n\n";

// Subtotal and total for all items
echo $cart->getSubTotal();
echo "\n\n";
echo $cart->getTotalsByItem();
echo "\n\n";