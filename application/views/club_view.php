<html>
	<?php $this->load->view('head'); ?>
	<body>
		<?php foreach($result as $row):?>
		<h3><?php echo $row->ClubID?></h3>
		<p><?php echo $row->Club?></p>
        <p><?php echo $row->JumlahAngg?></p>
		<br />
		<?php endforeach;?>
	</body>
</html>