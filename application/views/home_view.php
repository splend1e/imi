<?php $thisPage="Home"?>
<html>

<?php 
$data['page_title'] = "IMI Database Home";
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
					<h2>
						Database <span>Summary</span>
						<!-- .news -->
					</h2>
					<ul class="news">
						<li><figure>
							<strong><?php echo $total_member?></strong>Members</figure>
							<h3>
								<a href="#">Total members</a>
							</h3> Total members of Ikatan Motor Indonesia</li>
						<li><figure>
							<strong>500,000</strong>Members</figure>
							<h3>
								<a href="#">Motorcycle members</a>
							</h3> Total members of motorcycle clubs</li>
						<li><figure>
							<strong>500,000</strong>Members</figure>
							<h3>
								<a href="#">Automobile members</a>
							</h3> Total members of automobile clubs</li>
						<li><figure>
							<strong>6,000</strong>Clubs</figure>
							<h3>
								<a href="#">Total clubs</a>
							</h3> Total clubs of Ikatan Motor Indonesia</li>
						<li><figure>
							<strong>3,000</strong>Members</figure>
							<h3>
								<a href="#">Motorcycle clubs</a>
							</h3> Total members of motorcycle clubs</li>
						<li><figure>
							<strong>3,000</strong>Members</figure>
							<h3>
								<a href="#">Automobile clubs</a>
							</h3> Total members of automobile clubs</li>
					</ul>
					<!-- /.news --> </aside>


					<!-- content -->
					<section id="content"> <article> </article> </section>
				</div>
			</div>
		</div>
	</div>

	<!-- <img src="<?php echo asset_url();?>images/myface.jpg" alt="" /> -->

</body>
</html>
