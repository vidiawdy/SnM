<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_katalog_makanan extends CI_Model {
	public function __construct() {
		parent::__construct();

	}

	public function gettable($tablename)
	{
			$datakatalogmakanan = $this->db->query("SELECT * FROM $tablename");
			return $datakatalogmakanan->result_array();}}
