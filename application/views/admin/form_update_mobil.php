<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Form Update Data Mobil</h1>
        </div>
        <div class="card">
            <div class="card-body">
                        <?php foreach ($mobil as $mb):?>
                        <form method="POST" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi')?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type Mobil</label>
                                    <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
                                    <select name="kode_type" class="form-control">
                                        <option value="<?php echo $mb->kode_type?>"><?php echo $mb->kode_type?></option>
                                        <?php foreach($type as $tp) : ?>
                                            <option value="<?php echo $tp->kode_type?>">
                                            <?php echo $tp->nama_type?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label>Harga Sewa/Hari</label>
                                    <input type="text" name="harga" class="form-control" value="<?php echo $mb->harga?>">
                                    <?php echo form_error('harga','<div class="text-small text-danger">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label>Merk</label>
                                    <input type="text" name="merk" class="form-control" value="<?php echo $mb->merk?>">
                                    <?php echo form_error('merk','<div class="text-small text-danger">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label>No. Plat</label>
                                    <input type="text" name="no_plat" class="form-control" value="<?php echo $mb->no_plat?>">
                                    <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label>Transmissi</label>
                                    <select name="transmisi" class="form-control" value="<?php echo $mb->transmisi?>>
                                        <option value="">Pilih Transmisi</option>
                                        <option <?php if($mb->transmisi == "Manual"){echo "selected='selected'";}
                                        echo $mb->transmisi; ?>value="Manual">Manual</option>
                                        <option <?php if($mb->transmisi == "Otomatis"){echo "selected='selected'";}
                                        echo $mb->transmisi; ?>value="Otomatis">Otomatis</option>
                                    </select>
                                    <?php echo form_error('transmisi','<div class="text-small text-danger">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label>Warna</label>
                                    <input type="text" name="warna" class="form-control" value="<?php echo $mb->warna?>">
                                    <?php echo form_error('warna','<div class="text-small text-danger">','</div>')?>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="text" name="tahun" class="form-control" value="<?php echo $mb->tahun?>">
                                    <?php echo form_error('tahun','<div class="text-small text-danger">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label>Denda</label>
                                    <input type="text" name="denda" class="form-control" value="<?php echo $mb->denda?>"
                                    <?php echo form_error('denda','<div class="text-small text-danger">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option <?php if($mb->status == "1"){echo "selected='selected'";}
                                        echo $mb->status; ?> value="1">Tersedia</option>
                                        <option <?php if($mb->status == "0"){echo "selected='selected'";}
                                        echo $mb->status; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('status','<div class="text-small text-danger">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label>Tempat Duduk</label>
                                    <input type="text" name="tmpt_duduk" class="form-control"value="<?php echo $mb->tmpt_duduk?>"
                                    <?php echo form_error('tmpt_duduk)','<div class="text-small text-danger">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label>Supir</label>
                                    <select name="supir" class="form-control">
                                    <option <?php if($mb->status == "1"){echo "selected='selected'";}
                                        echo $mb->status; ?> value="1">Tersedia</option>
                                        <option <?php if($mb->status == "0"){echo "selected='selected'";}
                                        echo $mb->status; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('supir','<div class="text-small text-danger">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                                    <button type="submit" class="btn btn-success mt-4">Simpan</button>
                                    <button type="reset" class="btn btn-danger mt-4">Reset</button>
                                    <button type="back" class="btn btn-primary mt-4 ml-auto">Kembali</button>
                                    
                            </div>
                        </div>
                        </form>
                        <?php endforeach;?>
            </div>
        </div>
    </section>
</div>