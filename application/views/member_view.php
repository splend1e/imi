<html>
<?php 
$data['page_title'] = "IMI Anggota";
$this->load->view('head', $data);

?>

<body>
	<?php $this->load->view('header'); ?>

	<form id="form2" name="form2" method="post" action="">
		<p>
			<label> <input type="radio" name="RadioGroup1" value="no_nas"
				id="RadioGroup1_0" /> No Nasional</label> <br /> <label> <input
				type="radio" name="RadioGroup1" value="no_daerah" id="RadioGroup1_1" />
				No Daerah</label> <br /> <label> <input type="radio"
				name="RadioGroup1" value="nama" id="RadioGroup1_2" /> Nama</label> <br />
			<label> <input type="radio" name="RadioGroup1" value="nama_kartu"
				id="RadioGroup1_3" /> Nama di Kartu</label> <br />
		</p>
	</form>

	<?php $CI =& get_instance(); ?>
	<?php $CI->table->set_heading('No Nas', 'No Daerah', 'Nama', 'Tgl Lahir', 'Nama di Kartu', 'Club', 'Masa Berlaku', 'Alamat', 'Gender', 'HP'); ?>
	<?php foreach($result as $row){
		$CI->table->add_row($row->NoNas, $row->NoDaerah, $row->Name, $row->TglLahir, $row->NamKartu, $row->Club, $row->Sampai, $row->Alamat, $row->Gender, $row->HP );
	}?>
	<?php echo $CI->table->generate();?>


	<script type="text/javascript">
	$(document).ready(function() 
			{ zebraRows('tbody tr:odd td', 'odd'); });


	//used to apply alternating row styles 
	function zebraRows(selector,	className) 
	{ $(selector).removeClass(className).addClass(className); }
	</script>


</body>
</html>
