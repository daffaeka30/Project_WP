<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('mahasiswa/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
        </div>
        <div class="panel-body">
            <?php 

                if($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Foto</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no= 1; foreach ($mahasiswa as $key => $value) {?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nim ?></td>
                        <td><?= $value->nama_mahasiswa ?></td>
                        <td><?= $value->tempat_lahir ?></td>
                        <td><?= $value->tgl_lahir ?></td>
                        <td><?= $value->nama_jurusan ?></td>
                        <td><?= $value->kelas ?></td>
                        <td><img src="<?= base_url('foto_mahasiswa/'.$value->foto_mahasiswa) ?>" width="100px"></td>
                        <td>
                            <a href="<?= base_url('mahasiswa/edit/'.$value->id_mahasiswa) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                            <a href="<?= base_url('mahasiswa/delete/'.$value->id_mahasiswa) ?>" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</div>