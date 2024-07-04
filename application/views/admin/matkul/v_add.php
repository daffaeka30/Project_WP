<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Data 
        </div>
        <div class="panel-body">
            <?php 
                echo form_open_multipart('matkul/add');
            ?>

                <div class="form-group">
                    <label>Nama Mata Kuliah</label>
                        <input class="form-control" type="text" name="nama_matkul" placeholder="Nama Mata Kuliah" required>
                </div>
                <div style="text-align:center" class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                    <a href="<?= base_url('matkul') ?>" class="btn btn-info">Kembali</a>
                </div>

            <?php echo form_close(); ?>
            
    </div>
</div>