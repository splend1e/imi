<html>

<?php 
$data['page_title'] = "Input Data Anggota";
$this->load->view('head', $data); 
?>

<body>
<?php $this->load->view('header'); ?>
	<div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
		<!-- aside -->
          <aside>
            <h2>Upload <span>Excel File</span></h2>
            <p><input name="Tanggal Lahir" type="file" size="10" ></p>
            <p>&nbsp;</p>
          </aside>
	
		<!-- content -->
          <section id="content">
            <article>
	
	<?php echo form_open('Imi_home/index'); ?>

	<?php echo $nama; ?>
	:
	<?php echo form_input('name'); ?>
	</br>

	<?php echo $club; ?>
	:
	<?php echo form_input('club'); ?>
	</br>

	<?php echo $noDaerah; ?>
	:
	<?php echo form_input('noDaerah'); ?>
	</br>

	<?php echo $namKartu; ?>
	:
	<?php echo form_input('namKartu'); ?>
	</br>

	<?php echo $temLahir; ?>
	:
	<?php echo form_input('temLahir'); ?>
	</br>

	<?php echo $golDar; ?>
	:
	<?php echo form_dropdown('golDar',$golDars); ?>
	</br>

	<?php echo $gender; ?>
	:
	<?php echo form_radio('gender', $genders['laki']); ?>
	<?php echo $genders['laki']?>
	<?php echo form_radio('gender', $genders['perempuan']); ?>
	<?php echo $genders['perempuan']?>
	</br>

	<?php echo $pendidikan; ?>
	:
	<?php echo form_dropdown('pendidikan',$pendidikans); ?>
	</br>

	<?php echo $KTP; ?>
	:
	<?php echo form_input('KTP'); ?>
	</br>

	<?php echo $passport; ?>
	:
	<?php echo form_input('passport'); ?>
	</br>

	<?php echo $alamat; ?>
	:
	<?php echo form_input('alamat'); ?>
	</br>

	<?php echo $RT; ?>
	:
	<?php echo form_input('RT'); ?>
	</br>

	<?php echo $RW; ?>
	:
	<?php echo form_input('RW'); ?>
	</br>

	<?php echo $kec; ?>
	:
	<?php echo form_input('kec'); ?>
	</br>

	<?php echo $kel; ?>
	:
	<?php echo form_input('kel'); ?>
	</br>

	<?php echo $kodePos; ?>
	:
	<?php echo form_input('kodePos'); ?>
	</br>

	<?php echo $phnRumah; ?>
	:
	<?php echo form_input('phnRumah'); ?>
	</br>

	<?php echo $phnKantor; ?>
	:
	<?php echo form_input('phnKantor'); ?>
	</br>

	<?php echo $HP; ?>
	:
	<?php echo form_input('HP'); ?>
	</br>

	<?php echo $SIM; ?>
	:
	<?php echo form_dropdown('SIM',$SIMs); ?>
	</br>

	<?php echo $noSIM; ?>
	:
	<?php echo form_input('noSIM'); ?>
	</br>


	<?php echo form_submit('mysubmit','Submit!');  ?>
	<?php echo form_close(); ?>

	</article> 
          </section>
        </div>
      </div>
    </div>
  </div>
	
	<!-- <img src="<?php echo asset_url();?>images/myface.jpg" alt="" /> -->

</body>
</html>
