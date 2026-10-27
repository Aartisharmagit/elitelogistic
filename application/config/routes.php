<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';

// Company Routes
$route['about-us'] = 'about/index';
$route['contact-us'] = 'contacts/index';
$route['faqs'] = 'about/faqs';
$route['photo-gallery'] = "gallery/photo_gallery";
$route['gallery'] = "gallery/photo_gallery";
$route['video-gallery'] = "gallery/video_gallery";
$route['testimonials'] = 'about/testimonials';
$route['reviews'] = 'reviews/index';
$route['about/submit_review'] = 'reviews/submit';
$route['blog/view'] = 'blog/view';
$route['blog/view/(:num)'] = 'blog/view/$1';
$route['blog/([a-z0-9-]+)'] = 'blog/read/$1';
$route['blog'] = 'blog/view';
$route['privacy-policy'] = 'about/privacy';
$route['terms-and-conditions'] = 'about/terms';

// Shipment Tracking Routes
$route['track-shipment'] = 'tracking/index';


// City Services Routes (City-specific)
$route["home-shifting-in-(:any)"] = "city_services/home_shifting/$1";
$route["office-shifting-in-(:any)"] = "city_services/office_shifting/$1";
$route["car-transport-in-(:any)"] = "city_services/car_transport/$1";
$route["bike-transport-in-(:any)"] = "city_services/bike_transport/$1";
$route["packing-moving-in-(:any)"] = "city_services/packing_moving/$1";
$route["loading-unloading-in-(:any)"] = "city_services/loading_unloading/$1";

// National Services Routes (Using services module)
$route["our-services"] = "services/index";
$route["services"] = "services/index";
$route["home-relocation"] = "services/home_shifting";
$route["office-relocation"] = "services/office_shifting";
$route["bike-transportation"] = "services/bike_transport";
$route["car-transportation"] = "services/car_transport";
$route["packing-and-moving"] = "services/packing_moving";
$route["loading-unloading"] = "services/loading_unloading";

// Legacy / Compatibility Routes
$route["storage-services"] = "services/storage_services";
$route["car-transportation-service"] = "services/car_transport";
$route["bike-transportation-service"] = "services/bike_transport";
$route["office-relocation-service"] = "services/office_shifting";
$route["home-relocation-service"] = "services/home_shifting";
$route["infrastructure"] = "about/infrastructure";
$route["why-choose-us"] = "about/choose";

// Branch/City Routes
$route["our-branches"] = "packers_movers/state";
$route["packers-movers-(:any)-india"] = "packers_movers/state_services/$1";
$route["(:any)-packers-movers-(:any)"] = "packers_movers/city/$2/$1";
$route["(:any)/packers-movers-(:any)"] = "packers_movers/city/$1/$2";
$route["hyderabad"] = "packers_movers/state_services/hyderabad";
// $route["delhi"] = "packers_movers/state_services/delhi";
// $route["west-bengal"] = "packers_movers/state_services/west-bengal";
// $route["gujarat"] = "packers_movers/state_services/gujarat";
// $route["punjab"] = "packers_movers/state_services/punjab";
// $route["maharashtra"] = "packers_movers/state_services/maharashtra";
// $route["haryana"] = "packers_movers/state_services/haryana";
// $route["rajasthan"] = "packers_movers/state_services/rajasthan";
// $route["uttar-pradesh"] = "packers_movers/state_services/uttar-pradesh";
// $route["jharkhand"] = "packers_movers/state_services/jharkhand";
// $route["assam"] = "packers_movers/state_services/assam";
// $route["karnataka"] = "packers_movers/state_services/karnataka";
// $route["bangalore"] = "packers_movers/state_services/bangalore";
// $route["tamil-nadu"] = "packers_movers/state_services/tamil-nadu";
// $route["kerala"] = "packers_movers/state_services/kerala";
// $route["telangana"] = "packers_movers/state_services/telangana";
// $route["madhya-pradesh"] = "packers_movers/state_services/madhya-pradesh";
// $route["andhra-pradesh"] = "packers_movers/state_services/andhra-pradesh";
// $route["odisha"] = "packers_movers/state_services/odisha";
// $route["uttarakhand"] = "packers_movers/state_services/uttarakhand";
// $route["goa"] = "packers_movers/state_services/goa";
// $route["chhattisgarh"] = "packers_movers/state_services/chhattisgarh";
// $route["himachal-pradesh"] = "packers_movers/state_services/himachal-pradesh";
// $route["jammu-and-kashmir"] = "packers_movers/state_services/jammu-and-kashmir";
// $route["chandigarh"] = "packers_movers/state_services/chandigarh";
$route["(:any).htm"] = "home/error";
$route['translate_uri_dashes'] = FALSE;