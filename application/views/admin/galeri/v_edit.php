<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Data 
        </div>
        <div class="panel-body">
            <?php 

            if(isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
            }

                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

                echo form_open_multipart('galeri/edit/'.$galeri->id_galeri);
            ?>

                <div class="form-group">
                    <label>Nama Galeri</label>
                        <input class="form-control" value="<?= $galeri->nama_galeri ?>" type="text" name="nama_galeri" placeholder="Nama Galeri" required>
                </div>
                <div class="form-group">
                    <label>Foto Sampul</label><br>
                        <img src="<?= base_url('sampul/'.$galeri->sampul)?>" width="100px">
                </div>
                <div class="form-group">
                    <label>Ganti Sampul</label>
                        <input type="file" class="form-control" type="text" name="sampul">
                </div>       
                <div style="text-align:center" class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                    <a href="<?= base_url('galeri') ?>" class="btn btn-info">Kembali</a>
                </div>

            <?php echo form_close(); ?>
            
    </div>
</div>