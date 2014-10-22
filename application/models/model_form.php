<?php
class Model_form extends CI_Model
{
      function __construct()
    {
            // Call the Model constructor
            parent::__construct();
    }

    function get_state(){
        $query = $this->db->query('SELECT id, state_name FROM state');
        return $query->result();
    }

    function add_all()
    {
    	$v_state = $this->input->post('f_state');
    	$v_membername = $this->input->post('f_membername');
    
    	$data = array(
    			'id' => NULL,
    			'state' => $v_state,
    			'member_name' => $v_membername,
    	);
    
    	$this->db->insert('members', $data);
    }
    
    function get_cities_by_state ($state, $tree = null){
    	$this->db->select('id, city_name');
    
    	if($tree != NULL){
    		$this->db->where('state_index', $state);
    	}
    
    	$query = $this->db->get('cities');
    	$cities = array();
    
    	if($query->result()){
    		foreach ($query->result() as $city) {
    			$cities[$city->id] = $city->city_name;
    		}
    		return $cities;
    	} else {
    		return FALSE;
    	}
    }
    
} 