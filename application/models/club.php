<?php
class Club extends CI_Model {

	/*function Club()
	 {
	// Call the Model constructor
	parent::Model();
	}*/

	function getClubDaerah($daerahID)
	{
		//Query the "club" table where daerah == daerahID

		$query = $this->db->query("SELECT * FROM club WHERE daerah = ". $daerahID .";");
			
		if ($query->num_rows() == 0)
		{
			show_error('Database is empty!');
		} else{
			return $query->result();
		}
	}

	function getClubDaerahLimit($daerahID, $beginIndex, $numRow)
	{
		//Query the "club" table where daerah == daerahID

		$query = $this->db->query("SELECT * FROM club WHERE daerah = ". $daerahID . " LIMIT " . $beginIndex . "," . $numRow . ";");

		if ($query->num_rows() == 0)
		{
			show_error('Database is empty!');
		} else{
			return $query->result();
		}
	}
}
?>
