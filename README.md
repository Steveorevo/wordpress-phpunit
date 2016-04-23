# wordpress-phpunit
This is a blueprint for DesktopServer + DS-CLI that automates plugin, theme development, and testing. It currently automates the following:

* Downloads and installs the latest version of WordPress from wordpress.org
* Checks out PHPUnit core development tools from develop.svn.wordpress.org
* Configures and connects the WordPress database.
* Connects a WordPress test database.
* Sets up PHPUnit testing for a plugin and theme.

## Prerequisites

1. Ensure that you are running DesktopServer version 3.8.1
2. Install and activate the DS-CLI plugin from http://github.com/steveorevo/ds-cli

## Installation

1. Download the release zip file (preferably as a zip, no need to uncompress)
2. Place the file in your blueprints folder:
   * On Macintosh at /Applications/XAMPP/blueprints
   * On Windows at c:\xampplite\blueprints

## Usage

1. Start DesktopServer and select the default option to "Create a new WordPress website".
2. Select the "WordPress-PHPUnit" blueprint from the blueprint dropdown combobox.
3. Fill out the ./tests/bootstrap.php and test-sample.php with your theme or plugin.

## Example
In the following example we'll check to see that we're using the Twenty Fifteen theme,
specifically version 1.5 and that the Hello Dolly plugin is active:

tests/bootstrap.php contains:
```
<?php

require_once dirname( dirname( __FILE__ ) ) . '/includes/functions.php';
function _manually_load_environment() {

	// Add your theme
	switch_theme( "twentyfifteen" );

	// Update array with plugins to include ...
	$plugins_to_active = array(
            "hello.php"
        );

	update_option( 'active_plugins', $plugins_to_active );

}
tests_add_filter( 'muplugins_loaded', '_manually_load_environment' );

require dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';
```

tests/test-sample.php contains:
```
<?php
class SampleTest extends WP_UnitTestCase {
	function testSample() {
		$this->assertTrue( 'twentyfifteen' == wp_get_theme()->template );
		$this->assertTrue( '1.5' == wp_get_theme()->version );
		$this->assertTrue(
			is_plugin_active('hello.php')
		);
	}
}
```
