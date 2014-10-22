<?php
class Member_model extends CI_Model {

	function general(){

		$data['base']		= $this->config->item('base_url');
		//$data['css']		= $this->config->item('css');
		//$data['menu'] 		= $menu->show_menu();
		$data['webtitle']	= 'Tambah Anggota';
		$data['webfooter']	= '© copyright Indri Yunita 2013';
			
		$data['nama']	 	= 'Nama';
		$data['club']	 	= 'Club';
		$data['noDaerah']	= 'No Daerah';
		$data['namKartu']	= 'Nama di Kartu';
		$data['temLahir']	= 'Tempat Lahir';
		$data['semenjak'] 	= 'Semenjak';
		$data['sampai']		= 'Sampai';
		$data['tglLahir']	= 'Tanggal Lahir';
		$data['gender']		= 'Gender';
		$data['golDar']		= 'Golongan Darah';
		$data['pendidikan']	= 'Pendidikan';
		$data['KTP']		= 'KTP';
		$data['passport']	= 'Passport';
		$data['alamat']		= 'Alamat';
		$data['RT']			= 'RT';
		$data['RW']			= 'RW';
		$data['kec']		= 'Kecamatan';
		$data['kel']		= 'Kelurahan';
		$data['kota']		= 'Kota';
		$data['kodePos']	= 'Kode Pos';
		$data['phnRumah'] 	= 'Telepon Rumah';
		$data['phnKantor']	= 'Telepon Kantor';
		$data['HP']			= 'HP';
		$data['SIM']		= 'Jenis SIM';
		$data['SIMPolda']	= 'SIM Polda';
		$data['noSIM']		= 'No SIM';
		$data['KisA1']		= "KIS A1";
		$data['KisB1']		= "KIS B1";
		$data['KisB2']		= "KIS B2";
		$data['KisB3']		= "KIS B3";
		$data['KisB4']		= "KIS B4";
		$data['KisB5']		= "KIS B5";
		$data['KisC1']		= "KIS C1";
		$data['KisC2']		= "KIS C2";
		$data['KisC3']		= "KIS C3";
		$data['tglUpdate']	= "Tanggal Update";
		$data['tglKirim']	= "Tanggal Kirim";
		$data['phoLoc']		= "Photo Location";
		$data['genders']    = array('laki'=>'Laki-laki',
								'perempuan'=>'Perempuan'
								);
		$data['golDars']    = array('A'=>'A','B'=>'B','AB'=>'AB','O'=>'O');
		$data['pendidikans'] = array('SMP'=>'SMP', 'SMA'=>'SMA', 'S1'=>'S1', 'S2'=>'S2', 'S3'=>'S3');
		$data['SIMs'] = array('A'=>'A', 'B1'=>'B1', 'B2'=>'B2', 'C'=>'C', 'D'=>'D');
		
		return $data;
	}
	
	function insertEntry()
	{
		$this->db->set('name', $this->input->post('name'));
		$this->db->set('club', $this->input->post('club'));
		$this->db->set('noDaerah', $this->input->post('noDaerah'));
		$this->db->set('namKartu', $this->input->post('namKartu'));
		$this->db->set('temLahir', $this->input->post('temLahir'));
		$this->db->set('gender', $this->input->post('gender'));
		$this->db->set('pendidikan', $this->input->post('pendidikan'));
		$this->db->set('golDar', $this->input->post('golDar'));
		$this->db->set('KTP', $this->input->post('KTP'));
		$this->db->set('passport', $this->input->post('passport'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('RT', $this->input->post('RT'));
		$this->db->set('RW', $this->input->post('RW'));
		$this->db->set('kec', $this->input->post('kec'));
		$this->db->set('kel', $this->input->post('kel'));
		$this->db->set('kodePos', $this->input->post('kodePos'));
		 
		$this->db->insert('anggota');
	}
	
	
	function getAnggotaCount()
	{
		$this->db->select('COUNT(*) AS numrows');
		$this->db->from('anggota');
		$query = $this->db->get();
		
		if ($query->num_rows() == 0)
			return '0';
		$row = $query->row();
		$data['total_member'] = $row->numrows;		
		
		return $data;		
	}
	
	function getAllAnggota() {
		//Query the "anggota" table
		$query = $this->db->query("SELECT * FROM anggota LIMIT 1000");
			
		if ($query->num_rows() == 0)
		{
			show_error('Database is empty!');
		} else{
			return $query->result();
		}
	}

	function getAllAnggotaSort($orderBy) {
		$this->db->select("*");
		$this->db->from("anggota");
		$this->db->order_by($orderBy, "asc");
		$this->db->limit(100);
		
			return $this->db->get();
	}

	function getAnggotaClub($clubID)
	{
		//Query the "anggota" table where club == clubID

		$query = $this->db->query("SELECT * FROM anggota WHERE club = ". $clubID .";");
			
		if ($query->num_rows() == 0)
		{
			show_error('Database is empty!');
		} else{
			return $query->result();
		}
			
	}

	function getAnggotaClubLimit($clubID, $beginIndex, $numRow)
	{
		//Query the "anggota" table where club == $clubID starting from $beginIndex returns at most $numRow rows

		$query = $this->db->query("SELECT * FROM anggota WHERE club = " . $clubID . " LIMIT " . $beginIndex . "," . $numRow . ";");

		if ($query->num_rows() == 0)
		{
			show_error('Database is empty!');
		} else{
			return $query->result();
		}
	}

	function getAnggotaDaerah($daerahID)
	{
		//Query the "anggota" table where club == clubID

		$query = $this->db->query("SELECT * FROM anggota WHERE club = ". $daerahID .";");
			
		if ($query->num_rows() == 0)
		{
			show_error('Database is empty!');
		} else{
			return $query->result();
		}
			
	}

	function updateAnggota($data)
	{


			
	}

	function deleteAnggota($anggID)
	{


	}
}
?>
