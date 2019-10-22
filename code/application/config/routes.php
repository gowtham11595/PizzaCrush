<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|


*/
/* module_name/class Name/function name*/


$route['default_controller'] = 'Login/signinup/login_view';


$route['signin_submit'] = 'Login/signinup/signin_submit';

$route['logout'] = 'Login/signinup/logout';

$route['signup_submit']='Login/signinup/signup_submit';
$route['afteradminlogin']='Login/signinup/afteradminlogin';
$route['afterlogin']='Login/signinup/afterlogin';
$route['do_addpizza']='Login/signinup/do_addpizza';
$route['do_addbread']='Login/signinup/do_addbread';
$route['do_addextra']='Login/signinup/do_addextra';
$route['do_addsauce']='Login/signinup/do_addsauce';
$route['do_addcombo']='Login/signinup/do_addcombo';
$route['do_addtoppings']='Login/signinup/do_addtoppings';
$route['branch_submit']='Login/signinup/branch_submit';
$route['place_submit']='Login/signinup/place_submit';
$route['addpizza']='Login/signinup/addpizza';
$route['addextras']='Login/signinup/addextras';
$route['addsauce']='Login/signinup/addsauce';
$route['addbread']='Login/signinup/addbread';
$route['addtoppings']='Login/signinup/addtoppings';
$route['updatepizza']='Login/signinup/updatepizza';
$route['updatepizzaprice']='Login/signinup/updatepizzaprice';
$route['updatetoppingsprice']='Login/signinup/updatetoppingsprice';
$route['updatebreadprice']='Login/signinup/updatebreadprice';
$route['updateextrasprice']='Login/signinup/updateextrasprice';
$route['updatesauceprice']='Login/signinup/updatesauceprice';
$route['updatepizzaprice_submit']='Login/signinup/updatepizzaprice_submit';
$route['updatetoppingsprice_submit']='Login/signinup/updatetoppingsprice_submit';
$route['updatebreadprice_submit']='Login/signinup/updatebreadprice_submit';
$route['updateextrasprice_submit']='Login/signinup/updateextrasprice_submit';
$route['updatesauceprice_submit']='Login/signinup/updatesauceprice_submit';
$route['updatetoppings']='Login/signinup/updatetoppings';
$route['addbranch']='Login/signinup/addbranch';
$route['addplace']='Login/signinup/addplace';
$route['addcombo']='Login/signinup/addcombo';
$route['deletepizza']='Login/signinup/deletepizza';
$route['deletetoppings']='Login/signinup/deletetoppings';
$route['deletebread']='Login/signinup/deletebread';
$route['deleteextras']='Login/signinup/deleteextras';
$route['deletesauce']='Login/signinup/deletesauce';
$route['deletebranch']='Login/signinup/deletebranch';
$route['deleteplace']='Login/signinup/deleteplace';
$route['deletepizza_submit']='Login/signinup/deletepizza_submit';
$route['deletetoppings_submit']='Login/signinup/deletetoppings_submit';
$route['deletebread_submit']='Login/signinup/deletebread_submit';
$route['deleteextras_submit']='Login/signinup/deleteextras_submit';
$route['deletesauce_submit']='Login/signinup/deletesauce_submit';
$route['deletebranch_submit']='Login/signinup/deletebranch_submit';
$route['deleteplace_submit']='Login/signinup/deleteplace_submit';
$route['locator']='Login/signinup/locator';
$route['locator_submit']='Login/signinup/locator_submit';
$route['order_online']='Login/signinup/order_online';
$route['readymade']='Login/signinup/readymade';
$route['ownpizza']='Login/signinup/ownpizza';
$route['pizza_click/(:any)']='Login/signinup/pizza_click/$1/$2/$3/$4';
$route['toppings_display']='Login/signinup/toppings_display';
$route['sauce_display']='Login/signinup/sauce_display';
$route['sauce_click/(:any)']='Login/signinup/sauce_click/$1/$2';
$route['delete_p/(:any)']='Login/signinup/delete_p/$1';
$route['delete_t/(:any)']='Login/signinup/delete_t/$1';
$route['delete_b/(:any)']='Login/signinup/delete_b/$1/$2';
$route['delete_s/(:any)']='Login/signinup/delete_s/$1';
$route['toppings_click/(:any)']='Login/signinup/toppings_click/$1/$2/$3';
$route['own_toppings_click/(:any)']='Login/signinup/own_toppings_click/$1/$2/$3';
$route['bread_click/(:any)']='Login/signinup/bread_click/$1/$2';
$route['pizza_application']='Login/signinup/pizza_application';
$route['own_pizza_application']='Login/signinup/own_pizza_application';
$route['pay_submit']='Login/signinup/pay_submit';
$route['images']='Login/signinup/images';
$route['about']='Login/signinup/about';

$route['orderisplaced']='Login/signinup/orderisplaced';
$route['own_pay_submit/(:any)']='Login/signinup/own_pay_submit/$1/$2/$3';
$route['addreview']='Login/signinup/addreview';
$route['review_submit']='Login/signinup/review_submit';
$route['deletereview']='Login/signinup/deletereview';
$route['delete_review_submit']='Login/signinup/delete_review_submit';
$route['view_review']='Login/signinup/view_review';
$route['show_orders']='Login/signinup/show_orders';
$route['proceedt']='Login/signinup/proceedt';
$route['ownorders']='Login/signinup/ownorders';
$route['menuorders']='Login/signinup/menuorders';
$route['owndelivered/(:any)']='Login/signinup/owndelivered/$1';
$route['menudelivered/(:any)']='Login/signinup/menudelivered/$1';

$route['changeloc']='Login/signinup/changeloc';

$route['changeloc_submit']='Login/signinup/changeloc_submit';
/* End of file routes.php */
/* Location: ./application/config/routes.php */

