<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_katalog_minuman extends CI_Model {
	public function __construct() {
		parent::__construct();

	}

        public function gettable($tablename)
	{
			$datakatalogminuman = $this->db->query("SELECT * FROM $tablename");
			return $datakatalogminuman->result_array();}}
