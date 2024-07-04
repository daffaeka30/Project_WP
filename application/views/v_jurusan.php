<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Daftar Jurusan</li>
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
                    <h2>Daftar Jurusan</h2> <br>
                </div>
                <div class="col-lg-12">
                <table class="table table-bordered" id="my-Table">
        <thead>
            <tr>
                <th class="text-center" width="50px">No</th>
                <th class="text-center">Nama Jurusan</th>
            </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($jurusan as $key => $value) { ?>

                    
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td><?= $value->nama_jurusan ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                </div>
</div>
</div>
</div>
</div>


    