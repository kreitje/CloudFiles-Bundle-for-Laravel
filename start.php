<?php


// Register cloudfiles in the IoC container
IoC::singleton('cloudfiles', function()
{
	require_once Bundle::path('cloudfiles').'lib'.DS.'cloudfiles.php';
	require_once Bundle::path('cloudfiles').'lib'.DS.'cloudfiles_exceptions.php';
	require_once Bundle::path('cloudfiles').'lib'.DS.'cloudfiles_http.php';


	$config = Config::get('cloudfiles::cloudfiles', array());
	
	$cf_auth = new CF_Authentication($config['username'],$config['apikey']);
	$cf_auth->authenticate();
	$cf_conn = new CF_Connection($cf_auth);
	
	return $cf_conn;

});
