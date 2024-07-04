<?php 
echo form_open_multipart('admin/setting');

if($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}
?>

<div class="col-sm-4 text-center">
    <label for="">Pimpinan Kampus</label><br>
    <img src="<?= base_url('foto_rektor/'.$setting->foto_rektor) ?>" width="150px">

    <div class="form-group"><br>
        <label>Ganti Foto</label>
            <input type="file" class="form-control" type="text" name="foto_rektor">
    </div>
</div>

<div class="col-sm-8">
    <div class="form-group">
        <label>Nama Kampus</label>
            <input type="text" class="form-control" value="<?= $setting->nama_kampus ?>" type="text" name="nama_kampus">
    </div>
    <div class="form-group">
        <label>Alamat Kampus</label>
            <input type="text" class="form-control" value="<?= $setting->alamat ?>" type="text" name="alamat">
    </div>
    <div class="form-group">
        <label>Nomor Telpon</label>
            <input type="text" class="form-control" value="<?= $setting->no_telpon ?>" type="text" name="no_telpon">
    </div>
    <div class="form-group">
        <label>Pimpinan Kampus</label>
            <input type="text" class="form-control" value="<?= $setting->rektor_kampus ?>" type="text" name="rektor_kampus">
    </div>
</div>

<div class="col-sm-12 text-center">
    <div class="form-group">
        <label>Sejarah Kampus</label>
            <textarea name="sejarah" class="form-control" rows="5"><?= $setting->sejarah ?></textarea>
    </div>
    <div class="form-group">
        <label>Visi Kampus</label>
            <textarea name="visi" class="form-control" rows="5"><?= $setting->visi ?></textarea>
    </div>
    <div class="form-group">
        <label>Misi Kampus</label>
            <textarea name="misi" class="form-control" rows="3"><?= $setting->misi ?></textarea>
    </div><br>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Update</button>
    </div>
</div>

<?php echo form_close(); ?>