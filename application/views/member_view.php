<html>
<?php 
$data['page_title'] = "IMI Anggota";
$this->load->view('head', $data);

?>

<body>
	<?php $this->load->view('header'); ?>

	<form id="sortBy">
		<input type="radio" name="radioName" value="no_nas" /> No Nasional <br />
		<input type="radio" name="radioName" value="no_daerah" /> No Daerah <br />
		<input type="radio" name="radioName" value="nama" /> Nama <br /> <input
			type="radio" name="radioName" value="nama_kartu" /> Nama di Kartu<br />
	</form>

	<form>
		<select name="info">
			<option value="">Select a person:</option>
			<option value="11080101">John</option>
			<option value="11080102">Bon Jovi</option>

		</select>
	</form>

	<div id="log">
		<p>aaaa</p>
	</div>

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

	$('#sortBy input').on('change', function() {
		   alert($('input[name=radioName]:checked', '#sortBy').val()); 
		});

	$(".info").change(function() {
		alert($(".info").val());
	    
	}); 
	
	</script>

</body>
</html>
