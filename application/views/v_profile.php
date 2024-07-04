<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Profile Kampus</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

    <!-- Isi Konten --> 

<div class="contact_info_container">
	<div class="container">
		<div class="row">
            <div class="col-lg-12 text-center">
                <h2>Profile Kampus</h2> <br><br><br>
            </div>
            <div class="col-sm-4 text-center">
                <h3>Pimpinan Kampus</h3><br>
                <img src="<?= base_url('foto_rektor/'.$setting->foto_rektor) ?>" width="150"><br><br>
                <h4><?= $setting->rektor_kampus ?></h4>
            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <div class="form_title"><h5>Nama Kampus</h5></div>
                    <input type="text" class="comment_input" value="<?= $setting->nama_kampus ?>" type="text" name="nama_kampus" readonly>
                </div>
                <div class="form-group">
                    <div class="form_title"><h5>Alamat Kampus</h5></div>
                    <input type="text" class="comment_input" value="<?= $setting->alamat ?>" type="text" name="alamat" readonly>
                </div>
                <div class="form-group">
                    <div class="form_title"><h5>Nomor Telpon</h5></div>
                    <input type="text" class="comment_input" value="<?= $setting->no_telpon ?>" type="text" name="no_telpon" readonly>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <div class="form-group"><br><br><br>
                    <div class="form_title"><h4>Sejarah Kampus<h4></div>
                    <p><?= $setting->sejarah ?></p>
                </div><br>
                <div class="form-group">
                    <div class="form_title"><h4>Visi Kampus</h4></div>
                    <p><?= $setting->visi ?></p>
                </div><br>
                <div class="form-group">
                    <div class="form_title"><h4>Misi Kampus</h4></div>
                    <p><?= $setting->misi ?></p>
                </div><br><br><br>
            </div>
        </div>
    </div>
</div>

    <!-- End Isi Konten -->

    