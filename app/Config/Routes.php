<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); 
$routes->get('try','RegisterController::try');
//viewcart
$routes->get('viewcart','CategoryController::viewcart');
//addtocart
$routes->get('addtocart','CategoryController::addtocart');
//removecart
$routes->get('removecart/(:num)','CategoryController::removecart/$1');
$routes->get('viewimage','CategoryController::viewimage');

//payment methods
$routes->get('payment', 'PaymentController::payment');
$routes->post('processPayment', 'PaymentController::processPayment');

//billing details
$routes->get('billing_details','Billing::billing_details');
$routes->post('billing_details/submit', 'Billing::submit');
  


$routes->get('register','RegisterController::register'); //register
$routes->get('login','RegisterController::login'); //login 
$routes->get('login_dashboard','RegisterController::login_dashboard'); //login dashboard
$routes->get('dashboard','RegisterController::dashboard'); //dashboard
$routes->post('insertmessage','RegisterController::insertmessage');//insert message


$routes->post('register_insert','RegisterController::register_insert'); //insert data of registration into database


$routes->post('check_login_credentials','RegisterController::check_login_credentials');  //check login credentials 

$routes->get('explore','ExploreController::explore'); //explore section

$routes->get('categories','CategoryController::categories'); //categories section

$routes->get('women','CategoryController::women'); //type-1
$routes->get('bags_wallets_clutches','CategoryTypesController::bags_wallets_clutches');
$routes->get('brands','CategoryTypesController::brands');  
$routes->get('ethnic_fusion','CategoryTypesController::ethnic_fusion');
$routes->get('footwear','CategoryTypesController::footwear');
$routes->get('lingerie_loungewear','CategoryTypesController::lingerie_loungewear');   
$routes->get('western','CategoryTypesController::western');



$routes->get('men','CategoryController::men'); //type-2 
$routes->get('top_wear','CategoryTypesController::top_wear');   
$routes->get('bottom_wear','CategoryTypesController::bottom_wear');                 
$routes->get('ethnic_wear','CategoryTypesController::ethnic_wear');     
$routes->get('foot_wear','CategoryTypesController::foot_wear');      
$routes->get('inner_wear','CategoryTypesController::inner_wear');  
$routes->get('men_brand','CategoryTypesController::men_brand');  




$routes->get('digital','CategoryController::digital'); //type-3



$routes->get('cosmetics','CategoryController::cosmetics'); //type-4


$routes->get('kids','CategoryController::kids'); //type-5 
$routes->get('bags','CategoryTypesController::bags');            
$routes->get('boys_clothing','CategoryTypesController::boys_clothing'); 

$routes->get('jewellery','CategoryController::jewellery'); //type-6