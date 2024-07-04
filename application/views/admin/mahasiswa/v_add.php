<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Data 
        </div>
        <div class="panel-body">
            <?php 

            if(isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }

                echo form_open_multipart('mahasiswa/add');
            ?>

                <div class="form-group">
                    <label>NIM</label>
                        <input class="form-control" type="text" name="nim" placeholder="NIM" required>
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                        <input class="form-control" type="text" name="nama_mahasiswa" placeholder="Nama Mahasiswa" required>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                            <input class="form-control" type="text" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" required>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="id_jurusan" class="form-control">
                        <option value="">== Pilih Jurusan ==</option>
                    <?php foreach ($jurusan as $key => $value) {?>
                        <option value="<?= $value->id_jurusan ?>"><?= $value->nama_jurusan ?></option>
                    <?php } ?>
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Kelas</label>
                        <input class="form-control" type="text" name="kelas" placeholder="Kelas" required>
                </div>
                </div>
                <div class="form-group">
                    <label>Foto Mahasiswa</label>
                        <input type="file" class="form-control" type="text" name="foto_mahasiswa" required>
                </div>
                </div>
                <div style="text-align:center" class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                    <a href="<?= base_url('mahasiswa') ?>" class="btn btn-info">Kembali</a>
                </div>

            <?php echo form_close(); ?>
            
    </div>
</div>