<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('matkul/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
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
                        <th>Mata Kuliah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no= 1; foreach ($matkul as $key => $value) {?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nama_matkul?></td>
                        <td>
                            <a href="<?= base_url('matkul/edit/'.$value->id_matkul) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="<?= base_url('matkul/delete/'.$value->id_matkul) ?>" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</div>