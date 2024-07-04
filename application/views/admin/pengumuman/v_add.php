<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Data 
        </div>
        <div class="panel-body">
            <?php 
                echo form_open_multipart('pengumuman/add');
            ?>

                <div class="form-group">
                    <label>Judul Pengumuman</label>
                        <input class="form-control" type="text" name="judul_pengumuman" placeholder="Judul Pengumuman" required>
                </div>
                <div class="form-group">
                    <label>Isi Pengumuman</label>
                        <textarea name="isi_pengumuman" class="form-control" placeholder="Isi Pengumuman" cols="30" rows="10" required></textarea>
                </div>
                <div style="text-align:center" class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                    <a href="<?= base_url('pengumuman') ?>" class="btn btn-info">Kembali</a>
                </div>

            <?php echo form_close(); ?>
            
    </div>
</div>