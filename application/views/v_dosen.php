<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Dosen</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
    <!-- Contact -->

<div class="contact">

<!-- Contact Info -->

<div class="contact_info_container">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Dosen Kampus</h2> <br><br>
        </div>
        <!-- Team Item -->
         <?php foreach($dosen as $key => $value) { ?>
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image text-center"><img src="<?= base_url('foto_dosen/'.$value->foto_dosen) ?>" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#"><?= $value->nama_dosen ?></a></div>
							<div class="team_subtitle"><?= $value->nip ?></div>
                            <div class="team_subtitle"><?= $value->nama_matkul ?></div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
<?php } ?>
</div>
</div>
</div>
</div>


