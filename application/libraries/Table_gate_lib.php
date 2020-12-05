<?php
class Table_gate_lib
{
	private $CI;

	function __construct()
	{
		// $this->load->helper(array('form', 'url'));
		// $this->load->library('form_validation');

		$this->CI =& get_instance();
		$this->CI->load->database();
	}

}
