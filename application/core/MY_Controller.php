<?php
	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* 
	*/
	class MY_Controller extends CI_Controller {
		
		function __construct()	{
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('security');
			$this->load->helper('language');

			//load bahasa
			$this->lang->load('id_admin', 'indonesia');
		}
	}
?>