<?php
// ************************************************************************************//
// * xUCP Free
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 4.2
// *
// * Copyright (c) 2023 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {        
	header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
	setCookie("PHPSESSID", "", 0x7fffffff,  "/");
  	session_destroy();
	die( header( 'location: /vendor/webcp/404/index.php' ) );
}
// ************************************************************************************//
// * Discord Web-Hook Settings
// ************************************************************************************//
const DCWEBHOOK_URL = "https://discord.com/api/webhooks/.............";

// ************************************************************************************//
// * Discord Web-Hook Avatar Settings
// ************************************************************************************//
const DCWEBHOOK_AVATAR = "https://xucp-v4.DerStr1k3r.com/res/themes/default/assets/images/logo-icon.png";

// ************************************************************************************//
// * Discord Web-Hook Botname Settings
// ************************************************************************************//
const DCWEBHOOK_NAME = "DerStr1k3r.com | xUCP Free V4 Bot";
