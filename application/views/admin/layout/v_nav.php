<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?= base_url('dosen') ?>"><i class="fa fa-users"></i> Dosen</a>
                            </li>
                            <li>
                                <a href="<?= base_url('mahasiswa') ?>"><i class="fa fa-mortar-board"></i> Mahasiswa</a>
                            </li>
                            <li>
                                <a href="<?= base_url('matkul') ?>"><i class="fa fa-table"></i> Mata Kuliah</a>
                            </li>
                            <li>
                                <a href="<?= base_url('jurusan') ?>"><i class="fa fa-tasks"></i> Jurusan</a>
                            </li>
                            <!--<li>
                                <a href="<?= base_url('pengumuman') ?>"><i class="fa fa-file fa-fw"></i> Pengumuman</a>
                            </li>-->
                            <li>
                                <a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o fa-fw"></i> Berita</a>
                            </li>
                            <li>
                                <a href="<?= base_url('galeri') ?>"><i class="fa fa-image fa-fw"></i> Galeri</a>
                            </li>
                            <li>
                                <a href="<?= base_url('download') ?>"><i class="fa fa-download fa-fw"></i> Download</a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/setting') ?>"><i class="fa fa-gear fa-fw"></i> Setting</a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
                                
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header"><?= $title2 ?></h2>
                        