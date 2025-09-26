<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Ci_zend
{

	public function __construct($class = NULL)
	{
		ini_set(
			'include_path',
			ini_get('include_path') . PATH_SEPARATOR . APPPATH . 'libraries'
		);

		if ($class) {
			require_once(str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php');
		}
	}

	public function load($class)
	{
		require_once(str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php');
	}
}
