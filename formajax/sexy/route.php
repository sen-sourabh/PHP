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
$route['index'] = 'Admin/';
$route['index'] = 'Admin/index';
$route['dashboard'] = 'Admin/dashboard';
$route['logout'] = 'Admin/logout';
$route['change_password'] = 'Admin/change_password';
$route['travelers'] = 'Admin/travelers';
$route['traveler_designer'] = 'Admin/traveler_designer';
$route['partner_supplier'] = 'Admin/partner_supplier';
$route['traveler_details'] = 'Admin/traveler_details';
$route['traveler_designer_details'] = 'Admin/traveler_designer_details';
$route['partner_supplier_details'] = 'Admin/partner_supplier_details';
$route['add_partner_supplier'] = 'Admin/add_partner_supplier';
$route['active_partner_supplier'] = 'Admin/active_partner_supplier';
$route['blocked_partner_supplier'] = 'Admin/blocked_partner_supplier';
$route['active_traveler_designer'] = 'Admin/active_traveler_designer';
$route['blocked_traveler_designer'] = 'Admin/blocked_traveler_designer';
$route['travel_queries'] = 'Admin/travel_queries';
$route['travel_queries_details'] = 'Admin/travel_queries_details';
$route['partner_supplier_reviews'] = 'Admin/partner_supplier_reviews';
$route['traveler_designer_reviews'] = 'Admin/traveler_designer_reviews';
$route['activedesigner_review'] = 'Admin/activedesigner_review';
$route['blockeddesigner_review'] = 'Admin/blockeddesigner_review';
$route['activepartner_review'] = 'Admin/activepartner_review';
$route['blockedpartner_review'] = 'Admin/blockedpartner_review';
$route['traveler_designer_review_details'] = 'Admin/traveler_designer_review_details';
$route['partner_supplier_review_details'] = 'Admin/partner_supplier_review_details';
$route['members_category'] = 'Admin/members_category';
$route['active_category'] = 'Admin/active_category';
$route['blocked_category'] = 'Admin/blocked_category';
$route['add_members_category'] = 'Admin/add_members_category';
$route['edit_members_category'] = 'Admin/edit_members_category';
$route['all_posts'] = 'Admin/all_posts';
$route['add_post'] = 'Admin/add_post';
$route['edit_post'] = 'Admin/edit_post';
$route['all_country'] = 'Admin/all_country';
$route['active_country'] = 'Admin/active_country';
$route['blocked_country'] = 'Admin/blocked_country';
$route['add_country'] = 'Admin/add_country';
$route['edit_country'] = 'Admin/edit_country';
$route['contact'] = 'Admin/contact';
$route['contact_details'] = 'Admin/contact_details';
$route['all_subscriber'] = 'Admin/all_subscriber';
$route['blocked_subscriber'] = 'Admin/blocked_subscriber';
$route['active_subscriber'] = 'Admin/active_subscriber';




$route['default_controller'] = 'Admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
