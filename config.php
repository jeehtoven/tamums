<?php
ini_set( "display_errors", true );
date_default_timezone_set( "America/New_York" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "sqlsrv:server=localhost;database=tamu" );
//define( "DB_DSN", "mysql:host=localhost;dbname=jeehtove_tamu" );
define( "DB_USERNAME", "tamu" );
define( "DB_PASSWORD", "tamu" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require( CLASS_PATH . "/Article.php" );
 
function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  echo "<br>Error: " . $exception->getMessage();
  //error_log( $exception->getMessage() );
}
 
set_exception_handler( 'handleException' );
?>