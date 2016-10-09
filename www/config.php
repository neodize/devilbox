<?PHP

$MY_DIR = dirname(__FILE__);


// Translate Docker environmental variables to $ENV
$ENV = array();
exec('env', $output);
foreach ($output as $var) {
	$tmp = explode('=', $var);
	$ENV[$tmp[0]] = $tmp[1];
}



// HTTPD Docker
$HTTPD_HOST_NAME	= 'httpd';
$HTTPD_HOST_ADDR	= gethostbyname($HTTPD_HOST_NAME);

// PHP Docker
$PHP_HOST_NAME	= 'php';
$PHP_HOST_ADDR	= gethostbyname($PHP_HOST_NAME);

// MySQL Docker
$MYSQL_HOST_NAME	= 'db';
$MYSQL_HOST_ADDR	= gethostbyname($MYSQL_HOST_NAME);
$MYSQL_ROOT_PASS	= $ENV['MYSQL_ROOT_PASSWORD'];



require $MY_DIR . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR .'functions.php';
