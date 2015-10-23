<?php
	class countriesController extends CI_Controller {
		public function __construct() {
            parent::__construct();
            $this->load->model('country_model');
       	}
       
		public function index() {
			$query = $this->country_model->getCountries();

			if($query != FALSE) {
				$data['columns'] = $query->list_fields();
				$data['data'] = $query->result_array();
				$data['current'] = "country";
			} else {
				$data = NULL;
			}

			$this->load->view('table_view', $data);
		}
	}
?>