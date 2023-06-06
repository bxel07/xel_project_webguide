<?php
require_once __DIR__.'/../vendor/autoload.php';
use xel\framework\Devise\Router;
use xel\framework\Middleware\authbasic;

//register autoloader
new xel\framework\Helper\Boostrapclass();

// adding router
Router::add('GET','/',\xel\framework\Service\HomeController::class,'index');

// news route 
//crud news root


Router::add('GET','/news/insert', \xel\framework\Service\Dashboard::class,'iface_insert', [authbasic::class]);
Router::add('POST','/news/push', \xel\framework\Service\Dashboard::class,'insert', [authbasic::class]);


Router::add('GET','/news/update', \xel\framework\Service\Dashboard::class,'iface_update', [authbasic::class]);
Router::add('POST','/news/up', \xel\framework\Service\Dashboard::class,'update', [authbasic::class]);


Router::add('GET','/news/display', \xel\framework\Service\Dashboard::class,'read', [authbasic::class]);
Router::add('GET','/news/delete', \xel\framework\Service\Dashboard::class,'delete', [authbasic::class]);


// Guide Route 
Router::add('GET','/guide/create',\xel\framework\Service\Dashboard::class,'index');
Router::add('GET','/guide/update',\xel\framework\Service\Dashboard::class,'index');
Router::add('GET','/guide/delete',\xel\framework\Service\Dashboard::class,'index');
Router::add('GET','/guide/display',\xel\framework\Service\Dashboard::class,'index');



//Authentication route
Router::add('GET','/login',\xel\framework\Service\auth::class,'login');
Router::add('GET','/register',\xel\framework\Service\auth::class,'register',);

//dashboard url
Router::add('GET','/dashboard',\xel\framework\Service\Dashboard::class,'index');

//run the invoke url 
Router::run(); 
