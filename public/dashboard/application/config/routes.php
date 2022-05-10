<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*$route['default_controller'] = 'Artwise/home';
$route['404_override'] = '';
$route['home'] = 'Artwise/home';
$route['index'] = 'Artwise/index';
$route['registration'] = 'Artwise/registration';
$route['login'] = 'Artwise/login';
$route['profiledashboard'] = 'Artwise/profiledashboard';
$route['userlogout'] = 'Artwise/userlogout';
$route['translate_uri_dashes'] = FALSE;*/




$route['default_controller'] = 'AdminController';
$route['404_override'] = '';
$route['home'] = 'HomeController/index';
$route['contact'] = 'HomeController/contact';
$route['shop'] = 'HomeController/shop';
$route['cart'] = 'HomeController/cart';
$route['my-account'] = 'HomeController/my_account';
$route['compare'] = 'HomeController/compare';
$route['wishlist'] = 'HomeController/wishlist';
$route['checkout'] = 'HomeController/checkout';
$route['about'] = 'HomeController/about';
$route['register'] = 'HomeController/user_registration';
$route['login'] = 'HomeController/user_login';
$route['logout'] = 'HomeController/userlogout';
$route['featured-glasses'] = 'HomeController/featured_glasses';
$route['new-arrivles'] = 'HomeController/new_arrivles';
$route['update-user-details'] = 'HomeController/my_account_update';
//$route['product-details/(:any)'] = 'HomeController/single_page/$1';
$route['product-rating'] = 'HomeController/review';
$route['reviews'] = 'HomeController/reviews';
//eyeglass
$route['eyeglasses/(:any)'] = 'HomeController/eyeglassGender/$1';
$route['eyeglasses/brand/(:any)'] = 'HomeController/eyeglassBrand/$1';
$route['eyeglasses/shape/(:any)'] = 'HomeController/eyeglassShape/$1';
$route['eyeglasses/style/(:any)'] = 'HomeController/eyeglassStyle/$1';
//sunglass
$route['sunglasses/(:any)'] = 'HomeController/sunglassGender/$1';
$route['sunglasses/brand/(:any)'] = 'HomeController/sunglassBrand/$1';
$route['sunglasses/shape/(:any)'] = 'HomeController/sunglassShape/$1';
$route['sunglasses/frame-style/(:any)'] = 'HomeController/sunglass_frame_style_product/$1';
 $route['order-placed'] = 'HomeController/order_placed';
 $route['online-payment'] = 'HomeController/online_payment';
 $route['payment-success'] = 'HomeController/payment_success';
$route['payment-failure'] = 'HomeController/payment_failure';
$route['eyeglass-size-guide'] = 'HomeController/size_guide';
$route['collections/(:any)'] = 'HomeController/collections/$1';
$route['eyeglasses'] = 'HomeController/eyeglasses';
$route['sunglasses'] = 'HomeController/sunglasses';
$route['select-power-type/(:any)'] = 'HomeController/select_power_type/$1';
$route['select-your-lenses'] = 'HomeController/select_your_lenses';
//filter
$route['shop/hightolow'] = 'HomeController/shop_hightolow';
$route['shop/lowtohigh'] = 'HomeController/shop_lowtohigh';
//product url
$route['eyewear/(:any)'] = 'HomeController/single_page/$1';
$route['product/(:any)'] = 'HomeController/single_page/$1';
$route['search'] = 'HomeController/search';
$route['tryhome'] = 'HomeController/tryhome';
$route['other-products'] = 'HomeController/other_products';
$route['optical-shop-franchise-enquiry'] = 'HomeController/franchise_enquiry';
$route['7-day-easy-return-policy'] = 'HomeController/easy_return';
$route['blog'] = 'HomeController/blogs';
$route['(:any)'] = "HomeController/directurl/$1";
$route['coupon/(:any)'] = "HomeController/discount_coupon/$1";
$route['order/success'] = 'HomeController/orderSuccess';

######################Admin###########################
$route['adminlogin'] = "AdminController/index";
$route['admin/about'] = 'AdminController/about';
$route['admin/size-guide'] = 'AdminController/size_guide';
$route['admin/dashboard'] = 'AdminController/Dashboard';
$route['admin/logout'] = 'AdminController/logout';
$route['admin/setting'] = 'AdminController/setting';
$route['admin/productcategories'] = 'AdminController/all_product_categories';
$route['admin/add-product-categories'] = 'AdminController/add_product_categories';
$route['admin/edit-product-categories/(:any)'] = 'AdminController/edit_product_categories/$1';
$route['admin/delete-product-categories/(:any)'] = 'AdminController/delete_product_categories/$1';
//Brands
$route['admin/product-brands'] = 'AdminController/all_product_brands';
$route['admin/add-product-brand'] = 'AdminController/add_product_brand';
$route['admin/edit-product-brand/(:any)'] = 'AdminController/edit_product_brand/$1';
$route['admin/delete-product-brand/(:any)'] = 'AdminController/delete_product_brand/$1';
//Product details
$route['admin/product-details'] = 'AdminController/all_products';
$route['admin/add-product-details'] = 'AdminController/add_products';
$route['admin/edit-product-details/(:any)'] = 'AdminController/edit_products/$1';
$route['admin/delete-product-details/(:any)'] = 'AdminController/delete_products/$1';
//slider
$route['admin/sliders'] = 'AdminController/all_slider';
$route['admin/add-slider'] = 'AdminController/add_slider';
$route['admin/delete-slider/(:any)'] = 'AdminController/deleteslider/$1';
//team
$route['admin/teams'] = 'AdminController/all_team';
$route['admin/add-team'] = 'AdminController/add_team_member';
$route['admin/delete-team/(:any)'] = 'AdminController/deleteteam/$1';

//testimonial
$route['admin/testimonials'] = 'AdminController/all_testimonial';
$route['admin/add-testimonial'] = 'AdminController/add_testimonial';
$route['admin/delete-testimonial/(:any)'] = 'AdminController/deletetestimonial/$1';
//branch
$route['admin/branches'] = 'AdminController/all_branch';
$route['admin/branch-details'] = 'AdminController/branch_details';
$route['admin/add-branch'] = 'AdminController/add_branch';
$route['admin/edit-branch/(:any)'] = 'AdminController/edit_branch/$1';
$route['admin/delete-branch/(:any)'] = 'AdminController/delete_branch/$1';
$route['admin/active-branch/(:any)'] = 'AdminController/active_branch/$1';
$route['admin/deactive-branch/(:any)'] = 'AdminController/deactive_branch/$1';
$route['admin/active-branches/(:any)'] = 'AdminController/active_branch1/$1';
$route['admin/deactive-branches/(:any)'] = 'AdminController/deactive_branch1/$1';
//registered - user
$route['admin/registered-users'] = 'AdminController/registered_user';
$route['admin/delete-user/(:any)'] = 'AdminController/deleteuser/$1';
//enquiry - user
$route['admin/enquiry-users'] = 'AdminController/enquiry_user';
$route['admin/delete-enquiry-user/(:any)'] = 'AdminController/delete_enquiry_user/$1';
//placed_order 
$route['admin/placed-order'] = 'AdminController/placed_order';
$route['admin/delete-placed-order/(:any)'] = 'AdminController/delete_placed_order/$1';
//placed_order 
$route['admin/subscribed-email'] = 'AdminController/subscribe_email';
$route['admin/delete-subscribed-email/(:any)'] = 'AdminController/delete_subscribe_email/$1';
//Bill
$route['admin/bill/(:any)'] = 'AdminController/printbill/$1';
//lesnse details
$route['admin/add-lense'] = 'AdminController/add_lense';
$route['admin/lense-details'] = 'AdminController/lense_details';
$route['admin/edit-lense-details/(:any)'] = 'AdminController/edit_lense_details/$1';
$route['admin/delete-lense-details/(:any)'] = 'AdminController/delete_lense_details/$1';
//power type
$route['admin/power-type'] = 'AdminController/power_type';
$route['admin/add-power-type'] = 'AdminController/add_power_type';
$route['admin/delete-power-type/(:any)'] = 'AdminController/deletepowertype/$1';
$route['admin/edit-power-type/(:any)'] = 'AdminController/edit_power_type/$1';
//User Rating
$route['admin/user-rating'] = 'AdminController/user_all_rating';
$route['admin/confirm-rating/(:any)'] = 'AdminController/reating_confirm/$1';
$route['admin/pending-rating/(:any)'] = 'AdminController/reating_pending/$1';
$route['admin/delete-rating/(:any)'] = 'AdminController/reating_delete/$1';
//franchise_contant
$route['admin/franchise-contant'] = 'AdminController/franchise_contant';
$route['admin/franchise-enquiry'] = 'AdminController/franchise_enquiry';
$route['admin/delete-franchise-details/(:any)'] = 'AdminController/deleteFranchiseEnquiry/$1';
//easyReturnPolicy
$route['admin/easy-return-policy'] = 'AdminController/easyReturnPolicy';
//TRYATHOME
$route['admin/tryhome'] = 'AdminController/tryhome';
$route['admin/delete-tryhome/(:any)'] = 'AdminController/deleteTryhome/$1';
//Blogs
$route['admin/blogs'] = 'AdminController/blogs';
$route['admin/add-blog'] = 'AdminController/addBlog';
$route['admin/edit-blog/(:any)'] = 'AdminController/editBlog/$1';
$route['admin/delete-blog/(:any)'] = 'AdminController/deleteBlog/$1';
//footer
$route['admin/RefundPolicy'] = 'AdminController/RefundPolicy';
$route['admin/TermsOfUse'] = 'AdminController/TermsOfUse';
$route['admin/PrivacyPolicy'] = 'AdminController/PrivacyPolicy';
$route['admin/DeliveryShippingTerms'] = 'AdminController/DeliveryShippingTerms';
$route['admin/cancellation'] = 'AdminController/cancellation';




$route['translate_uri_dashes'] = FALSE;