<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-user"></i>
                        Data Tentor
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahTentor">
                    <i class="icon-plus mr-2"></i>Tambah Tentor
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="card-title">Data Tentor</div>
                        <table id="example2" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Identitas</th>
                                    <th>Nama</th>
                                    <th>PT</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($tentor as $row) { 
                                    $gd = ($row->tentor_gelar_depan == NULL ? "" : $row->tentor_gelar_depan." ");
                                    $gb = ($row->tentor_gelar_belakang == NULL ? "" : " ".$row->tentor_gelar_belakang);
                                    $nama = $gd.$row->tentor_nama.$gb;

                                    if($row->tentor_status == 0) {
                                        $status = "<span class='badge badge-primary'>Belum Verifikasi</span>";
                                    } else if($row->tentor_status == 1) {
                                        $status = "<span class='badge badge-danger'>Ditolak</span>";
                                    } else if($row->tentor_status == 2) {
                                        $status = "<span class='badge badge-success'>Terverifikasi</span>";
                                    }
                                    ?> 
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $row->tentor_identitas ?></td>
                                        <td><?php echo $nama ?></td>
                                        <td><?php echo $row->pt ?></td>
                                        <td><?php echo $status ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-xs">Edit</button>
                                            <a href="<?php echo site_url('tentor/hapus_tentor/'.$row->id_tentor_url) ?>" class="btn btn-danger btn-xs">Hapus</a>
                                        </td>
                                    </tr>
                                <?php $no++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="tambahTentor" tabindex="-1" role="dialog" aria-labelledby="tambahTentor" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tentor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('tentor/tambah_tentor') ?>" method="post" id="formEditJabatan">
                <div class="modal-body">
                    <input type="hidden" name="id_pegawai" id="id_pegawai">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="jafung" class="col-md-3 col-form-label">Identitas</label>
                                <div class="col-md-9">
                                    <input type="text" name="identitas" class="form-control s-12" placeholder="Identitas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jafung" class="col-md-3 col-form-label">Nama Tentor</label>
                                <div class="col-md-9">
                                    <input type="text" name="nama" class="form-control s-12" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jafung" class="col-md-3 col-form-label">Gelar Depan</label>
                                <div class="col-md-9">
                                    <input type="text" name="gd" class="form-control s-12" placeholder="Gelar Depan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-md-3 col-form-label">Gelar Belakang</label>
                                <div class="col-md-9">
                                    <input type="text" name="gb" class="form-control s-12" placeholder="Gelar Belakang">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-md-3 col-form-label">Tempat Lahir</label>
                                <div class="col-md-9">
                                    <input type="text" name="tempat_lahir" class="form-control s-12" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-md-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-md-9">
                                    <input type="date" name="tanggal_lahir" class="form-control s-12">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jkel" class="col-md-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-9 mt-2">
                                    <div class="form-check-inline">
                                        <label class="form-check-label"><input type="radio" class="form-check-input" name="jkel" value="L">Laki-Laki</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label"><input type="radio" class="form-check-input" name="jkel" value="P">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jafung" class="col-md-3 col-form-label">Jafung</label>
                                <div class="col-md-9">
                                    <select class="form-control select2" name="jafung">
                                        <option value="">-- Jabatan Fungsional --</option>
                                        <?php foreach($jafung as $rowj) { ?> 
                                            <option value="<?php echo $rowj->id_jafung ?>"><?php echo $rowj->jafung_nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jafung" class="col-md-3 col-form-label">PT</label>
                                <div class="col-md-9">
                                    <select class="form-control select2" name="pt">
                                        <option value="">-- PT --</option>
                                        <?php foreach($pt as $rowp) { ?> 
                                            <option value="<?php echo $rowp->id_pt ?>"><?php echo $rowp->pt_nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jafung" class="col-md-3 col-form-label">Pendidikan</label>
                                <div class="col-md-9">
                                    <select class="form-control select2" name="pendidikan">
                                        <option value="">-- Pendidikan --</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php echo $footer ?>