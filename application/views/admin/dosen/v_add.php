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

                echo form_open_multipart('dosen/add');
            ?>

                <div class="form-group">
                    <label>NIP</label>
                        <input class="form-control" type="text" name="nip" placeholder="NIP Dosen" required>
                </div>
                <div class="form-group">
                    <label>Nama Dosen</label>
                        <input class="form-control" type="text" name="nama_dosen" placeholder="Nama Dosen" required>
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
                            <input class="form-control" type="text" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Mata Kuliah</label>
                    <select name="id_matkul" class="form-control">
                        <option value="">== Pilih Mata Kuliah ==</option>
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
                        <option value="">== Pilih Pendidikan ==</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                </div>
                    <div class="form-group">
                        <label>Foto Dosen</label>
                            <input type="file" class="form-control" type="text" name="foto_dosen" required>
                    </div>
                <div style="text-align:center" class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                    <a href="<?= base_url('dosen') ?>" class="btn btn-info">Kembali</a>
                </div>

            <?php echo form_close(); ?>
            
    </div>
</div>