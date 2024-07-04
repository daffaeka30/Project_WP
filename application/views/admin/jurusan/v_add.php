<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Data 
        </div>
        <div class="panel-body">
            <?php 
                echo form_open_multipart('jurusan/add');
            ?>

                <div class="form-group">
                    <label>Nama Jurusan</label>
                        <input class="form-control" type="text" name="nama_jurusan" placeholder="Nama Jurusan" required>
                </div>
                <div style="text-align:center" class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                    <a href="<?= base_url('jurusan') ?>" class="btn btn-info">Kembali</a>
                </div>

            <?php echo form_close(); ?>
            
    </div>
</div>