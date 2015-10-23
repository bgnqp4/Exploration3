<?php 
    class country_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }
        
        // Query for all the countries
        public function getCountries() {
            $sql = 'SELECT * FROM world.Country';
            $query = $this->db->query($sql, array());
            
            if($query->num_rows() > 0){
                return $query;
            } else{
                return FALSE; 
            }
        }   
    }
?>