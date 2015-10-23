<?php
	class citiesController extends CI_Controller {
		public function __construct() {
            parent::__construct();
            $this->load->model('city_model');
       }
       
		public function index() {
			$query = $this->city_model->getCities();

			if($query != FALSE) {
				$data['columns'] = $query->list_fields();
				$data['data'] = $query->result_array();
				$data['current'] = "city";
			} else {
				$data = NULL;
			}

			$this->load->view('table_view', $data);
		}
	}
?>