<!-- Home -->


<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url() ?>template/front-end/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
					<?php $setting = $this->m_setting->detail() ?>
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title"><?= $setting->nama_kampus ?></div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<!--<div class="home_slider_form_container">
										<form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>-->
								</div>
							</div>
						</div>
					</div>
				</div> 

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url() ?>template/front-end/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title"><?= $setting->nama_kampus ?></div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<!--<div class="home_slider_form_container">
										<form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>-->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url() ?>template/front-end/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title"><?= $setting->nama_kampus ?></div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<!--<div class="home_slider_form_container">
										<form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>-->
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>

		<!-- Home Slider Nav -->
		 <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To <?= $setting->nama_kampus ?></h2>
						<div class="section_subtitle"><p>Hadir sebagai institusi pendidikan yang berkomitmen untuk menyediakan lingkungan belajar yang ideal!</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_1.png" alt=""></div>
						<h3 class="feature_title">The Experts</h3><br>
						<div class="feature_text"><p>Pusat penemuan ide-ide baru</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_2.png" alt=""></div>
						<h3 class="feature_title">Book & Library</h3><br>
						<div class="feature_text"><p>Perpustakaan yang lengkap</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_3.png" alt=""></div>
						<h3 class="feature_title">Best Campus</h3><br>
						<div class="feature_text"><p>Menjadi top 3 kampus terbaik di dunia</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url() ?>template/front-end/images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Award & Reward</h3><br>
						<div class="feature_text"><p>Mendapatkan banyak penghargaan atas prestasi-prestasinya</p></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Jurusan Populer</h2>
						<div class="section_subtitle"><p> Jurusan di Dream University membuka peluang tanpa batas bagi setiap mahasiswa untuk mewujudkan potensi mereka dan mempersiapkan diri menghadapi tantangan dunia nyata.</p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="<?= base_url() ?>template/front-end/images/course_3.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">Teknik Informatika</a></h3>
							<div class="course_text">
								<p>Jurusan ini menjadi pilihan utama bagi mereka yang tertarik pada dunia teknologi dan informasi.</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>1k+ Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="<?= base_url() ?>template/front-end/images/course_8.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">Ilmu Komunikasi</a></h3>
							<div class="course_text">
								<p>Jurusan ini memainkan peran kunci dalam menyediakan tenaga kerja untuk industri media, periklanan, dan public relations.</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>1k+ Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="<?= base_url() ?>template/front-end/images/course_5.jpg" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">Manajemen Bisnis</a></h3>
							<div class="course_text">
								<p>Pemahaman yang baik tentang aspek-aspek bisnis, kepemimpinan, dan strategi pengelolaan perusahaan.</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>1k+ Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="<?= base_url('home/jurusan') ?>">view all jurusan</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Events -->
	
	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Galeri Foto</h2>
						<div class="section_subtitle"><p>Selamat menikmati perjalanan visual Anda melalui galeri foto kami, dan merasakan kehidupan vibrant dan kreatif di Dream University.</p></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<?php foreach($galeri as $key => $value) { ?>
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="<?= base_url('sampul/'.$value->sampul) ?>" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">21</div>
									<div class="event_month trans_200">Aug</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="<?= base_url('home/detail_galeri/'.$value->id_galeri) ?>"><?= $value->nama_galeri ?></a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>DKI Jakarta</span></div>
									<div class="event_text">
										<p></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <?php } ?>
			</div>
		</div>
	</div> 

	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Dosen Kampus</h2>
						<div class="section_subtitle"><p>Di Dream University, dosen-dosen kami adalah pilar utama dalam mempersiapkan generasi mendatang untuk mengubah dunia.</p></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<?php foreach ($dosen as $key => $value) { ?>
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('foto_dosen/'.$value->foto_dosen) ?>" alt=""></div>
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
				</div> <?php } ?>
			</div>
		</div>
	</div>

	<!-- Latest News -->

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Latest News</h2>
						<div class="section_subtitle"><p></p></div>
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-7 news_col">
					
					<!-- News Post Large -->
					<div class="news_post_large_container">
						<div class="news_post_large">
							<div class="news_post_image"><img src="<?= base_url() ?>template/front-end/images/news1.jpg" alt=""></div>
							<div class="news_post_large_title"><a href="https://www.detik.com/edu/edutainment/d-7405782/bahasa-indonesia-diajarkan-di-sekolah-australia-selama-70-tahun-ini-alasannya">Bahasa Indonesia Diajarkan di Sekolah Australia Selama 70 Tahun, Ini Alasannya</a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#">march 11, 2024</a></li>
								</ul>
							</div>
							<div class="news_post_text">
								<p>Bahasa Indonesia telah diajarkan di 54 negara dan dituturkan oleh 174 ribu siswa di seluruh dunia. Salah satu negara yang memasukkan bahasa...</p>
							</div>
							<div class="news_post_link"><a href="https://www.detik.com/edu/edutainment/d-7405782/bahasa-indonesia-diajarkan-di-sekolah-australia-selama-70-tahun-ini-alasannya">read more</a></div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 news_col">
					<div class="news_posts_small">

						<!-- News Posts Small -->
						<?php foreach($latest_news as $key => $value) { ?>
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= $value->judul_berita ?></a></div>
							<div class="news_post_meta">
								<ul>
									<li><a href="#">admin</a></li>
									<li><a href="#"><?= $value->tgl_berita ?></a></li>
								</ul>
							</div>
						</div>	<?php } ?>				

					</div>
				</div>
			</div>
		</div>
	</div>


	