<?php
	class countryLanguageController extends CI_Controller {
		public function __construct() {
            parent::__construct();
            $this->load->model('country_language_model');
       }
       
		public function index() {
			$query = $this->country_language_model->getLanguages();

			if($query != FALSE) {
				$data['columns'] = $query->list_fields();
				$data['data'] = $query->result_array();
				$data['current'] = "lang";
			} else {
				$data = NULL;
			}

			$this->load->view('table_view', $data);
		}
	}
?>