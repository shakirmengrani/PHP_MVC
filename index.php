<?php
/* Application Name : PHP MVC
 * Created by       : Shakir Mengrani (email : shakir.mengrani@gmail.com , blog : web.x11s.org)
 * Created On       : 01-Mar-2013 
 * Change Logs      :     
 *                    
 * 
 */
session_start();
ini_set('error_reporting',0); 
//Application config
define("APP_TITLE", "MVC");
define("Home_path", "/PHP_MVC/");
define("App_path", "application/");
define("Product_Img_path", "application/data/media/product/");
define("Theme_path", "/PHP_MVC/lib/UI/jquery/");
define("system_path", "lib/");
define("System_bootstrap", "lib/bootstrap.php");
define("System_controller", "lib/core/controller.php");
define("System_library", "lib/core/lib.php");
define("System_helper", "lib/core/helper.php");
define("System_view", "lib/core/view.php");
define("System_modal", "lib/core/modal.php");
define("DOMAIN", "localhost");
//DataBase
define("DRIVER", "MYSQL");
define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DATABASE", "test");
//Init
require System_bootstrap;
require System_modal;
require System_view;
require System_controller;
require System_helper;
require System_library;
$app = new bootstrap();
?>