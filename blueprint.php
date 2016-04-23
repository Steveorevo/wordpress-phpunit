<?php
/**
 * Automate the setup of the freshest version of WordPress from wordpress.org and 
 * PHPUnit core development tools from develop.svn.wordpress.org.
 *
 * Author: Stephen J Carnam
 * Version: 1.0
 * Author URI: http://steveorevo.com/
 */

/** Download, unzip WordPress, and move the contents into root. */
ds_cli_exec( "wget https://wordpress.org/latest.zip && unzip latest.zip && mv ./wordpress/* ./" );
ds_cli_exec( "svn co http://develop.svn.wordpress.org/trunk/tests/phpunit/includes/" );

/** Check if index.php unpacked okay */
if ( is_file( "index.php" ) ) {

	/** Cleanup the empty folder, download, and this script. */
	ds_cli_exec( "rm -rf wordpress && rm index.htm && rm latest.zip && rm blueprint.php" );	
}
