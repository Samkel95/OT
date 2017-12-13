<?php
include "config.php";
include SPATH_LIBRARIES.DS."engine.Class.php";
// include SPATH_LIBRARIES.DS."login.Class.php";

// if(isset($action) && strtolower($action) == 'login'){
// include('public/login/login.php');
// 	die();
// }
// $log = new Login();
//
// if(isset($action) && strtolower($action) == 'logout'){
// $log->logout();
// }
//
// if(isset($doLogin) && $doLogin == 'systemPingPass'){
// 	header('Location: index.php?action=index&pg=dashboard');
// 	die('Please wait...redirecting page');
// }
//
// //INSIDE THE SYSTEMS NOW
// $engine = new engineClass();
// $config = new JConfig();
//
// $actordetails = $engine->getActorDetails();
// //ini_set('display_errors', 0);

include("public/platform.php");
?>
