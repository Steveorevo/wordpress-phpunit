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


