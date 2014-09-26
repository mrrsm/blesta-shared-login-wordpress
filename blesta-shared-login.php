<?php
/*
 * Plugin Name: Blesta Shared Login
 * Version: 1.0
 * Plugin URI: http://www.mrrsmtechnologies.com/
 * Description: Used with the shared login plugin for Blesta
 * Author: MrRSM Technologies LLC
 * Author URI: http://www.mrrsmtechnologies.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 */
/* Copyright (c) 2014, MrRSM Technologies LLC <plugins@mrrsmtechnologies.com>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS
BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT,
STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-blesta-shared-login.php' );
require_once( 'includes/class-blesta-shared-login-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-blesta-shared-login-admin-api.php' );
require_once( 'includes/lib/class-blesta-shared-login-post-type.php' );
require_once( 'includes/lib/class-blesta-shared-login-taxonomy.php' );

/**
 * Returns the main instance of Blesta_Shared_Login to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Blesta_Shared_Login
 */
function Blesta_Shared_Login () {
	$instance = Blesta_Shared_Login::instance( __FILE__, '1.0.0' );

	if( is_null( $instance->settings ) ) {
		$instance->settings = Blesta_Shared_Login_Settings::instance( $instance );
	}

	return $instance;
}

Blesta_Shared_Login();
