<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Data Tipe Mobil</h1>
        </div>
        <a class="btn btn-primary mb-3" href="<?php echo base_url('admin/data_type/tambah_type')?>">Tambah Tipe</a>
        <?php echo $this->session->flashdata('pesan')?>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th>Kode Tipe</th>
                    <th>Nama Tipe</th>
                    <th width="180px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($type as $tp):?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $tp->kode_type?></td>
                        <td><?php echo $tp->nama_type?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_type/update_type/'.$tp->id_type)?>"><i class="fas fa-edit"></i></a>
                            <a onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_type/delete_type/'.$tp->id_type)?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>