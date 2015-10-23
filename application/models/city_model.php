<?php 
    class city_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }
        
        // Query for all the cities
        public function getCities() {
            $sql = 'SELECT * FROM world.City';
            $query = $this->db->query($sql, array());
            
            if($query->num_rows() > 0){
                return $query;
            } else{
                return FALSE; 
            }
        }
    }
?>