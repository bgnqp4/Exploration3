<?php 
    class country_language_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }
        
        // Query for all the countries languages
        public function getLanguages() {
            $sql = 'SELECT * FROM world.CountryLanguage';
            $query = $this->db->query($sql, array());
            
            if($query->num_rows() > 0){
                return $query;
            } else{
                return FALSE;
            }
        }   
    }
?>