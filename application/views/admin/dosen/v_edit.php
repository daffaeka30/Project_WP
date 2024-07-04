<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Data 
        </div>
        <div class="panel-body">
            <?php 

            echo validation_errors('<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            if(isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }

                echo form_open_multipart('dosen/edit/'.$dosen->id_dosen);
            ?>

                <div class="form-group">
                    <label>NIP</label>
                        <input class="form-control" value="<?= $dosen->nip ?>" type="text" name="nip" placeholder="NIP Dosen" required>
                </div>
                <div class="form-group">
                    <label>Nama Dosen</label>
                        <input class="form-control" value="<?= $dosen->nama_dosen ?>" type="text" name="nama_dosen" placeholder="Nama Dosen" required>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                            <input class="form-control" value="<?= $dosen->tempat_lahir ?>" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                            <input class="form-control" value="<?= $dosen->tgl_lahir ?>" type="text" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" required>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Mata Kuliah</label>
                    <select name="id_matkul" class="form-control">
                        <option value="<?= $dosen->id_matkul ?>"><?= $dosen->nama_matkul ?></option>
                    <?php foreach ($matkul as $key => $value) {?>
                        <option value="<?= $value->id_matkul ?>"><?= $value->nama_matkul ?></option>
                    <?php } ?>
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Pendidikan</label>
                    <select name="pendidikan" class="form-control">
                        <option value="<?= $dosen->pendidikan ?>"><?= $dosen->pendidikan ?></option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                </div>
                <div class="form-group">
                        <img src="<?= base_url('foto_dosen/'.$dosen->foto_dosen) ?>" width="100px">
                </div>
                <div class="form-group">
                    <label>Ganti Foto</label>
                        <input type="file" class="form-control" type="text" name="foto_dosen">
                </div>
                <div style="text-align:center" class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                    <a href="<?= base_url('dosen') ?>" class="btn btn-info">Kembali</a>
                </div>

            <?php echo form_close(); ?>
            
    </div>
</div>