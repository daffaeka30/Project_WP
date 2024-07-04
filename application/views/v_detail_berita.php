<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
								<li>Detail Berita</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

    <!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->
				<div class="col-lg-8">
					<div class="blog_content">
						<div class="blog_title"><?= $berita->judul_berita ?></div>
						<div class="blog_meta">
							<ul>
								<li>Post on <a href="#"><?= $berita->tgl_berita ?></a></li>
								<li>By <a href="#"><?= $berita->nama_user ?></a></li>
							</ul>
						</div>
						<div class="blog_image"><img src="<?= base_url('gambar_berita/'.$berita->gambar_berita) ?>" alt=""></div>
						<p><?= $berita->isi_berita ?></p>
						<div class="blog_images">
							<div class="row">
								<div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="images/blog_images_1.jpg" alt=""></div></div>
								<div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="images/blog_images_2.jpg" alt=""></div></div>
							</div>
						</div>
					</div>
					<div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<div class="blog_tags">
							<span>Tags: </span>
							<ul>
								<li><a href="#">Education</a>, </li>
								<li><a href="#">Math</a>, </li>
								<li><a href="#">Food</a>, </li>
								<li><a href="#">Schools</a>, </li>
								<li><a href="#">Religion</a>, </li>
							</ul>
						</div>
						<div class="blog_social ml-lg-auto">
							<span>Share: </span>
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Blog Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Latest News -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Latest News</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								 <?php foreach($latest_news as $key => $value) { ?>
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= $value->judul_berita ?></a></div>
										<div class="latest_date"><?= $value->tgl_berita ?></div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


