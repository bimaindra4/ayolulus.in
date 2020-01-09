<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-user"></i>
                        Data Diri
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-3">
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="data-diri-tab" data-toggle="pill" href="#data-diri" role="tab" aria-controls="data-diri" aria-selected="true">Data Diri</a>
                            <a class="nav-link" id="publikasi-tab" data-toggle="pill" href="#publikasi" role="tab" aria-controls="publikasi" aria-selected="false">Publikasi</a>
                            <a class="nav-link" id="gelar-dosen-tab" data-toggle="pill" href="#gelar-dosen" role="tab" aria-controls="gelar-dosen" aria-selected="false">Gelar Dosen</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="data-diri" role="tabpanel" aria-labelledby="data-diri-tab">
                                        <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#EditDataDiri">
                                            <i class="icon-edit mr-2"></i> Edit Data
                                        </button>
                                        <table id="tabelDataDiri" class="table table-hover table-bordered">
                                            <?php
                                                $gd = ($tentor->tentor_gelar_depan == NULL ? "" : $tentor->tentor_gelar_depan." ");
                                                $gb = ($tentor->tentor_gelar_belakang == NULL ? "" : " ".$tentor->tentor_gelar_belakang);
                                                $nama = $gd.$tentor->tentor_nama.$gb;

                                                if($tentor->tentor_status == 0) {
                                                    $status = "<span class='badge badge-primary'>Belum Verifikasi</span>";
                                                } else if($tentor->tentor_status == 1) {
                                                    $status = "<span class='badge badge-danger'>Ditolak</span>";
                                                } else if($tentor->tentor_status == 2) {
                                                    $status = "<span class='badge badge-success'>Terverifikasi</span>";
                                                }

                                                $bidang_string = "";
                                                $exp_bidang = explode(",", $tentor->bidang);
                                                $ex_id_bidang = explode(",", $tentor->_idbidang);
                                                for($i=0; $i<count($exp_bidang); $i++) {
                                                    $bidang_string .= "<span class='badge badge-primary'>".$exp_bidang[$i]."</span> ";
                                                }
                                            ?>
                                            <tr>
                                                <td width="200">Nama Lengkap</td>
                                                <td><?php echo $nama ?></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Identitas</td>
                                                <td><?php echo $tentor->tentor_identitas ?></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Gelar</td>
                                                <td><?php echo $tentor->tentor_nama ?></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Jabatan Fungsional</td>
                                                <td><?php echo $tentor->jafung ?></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Tempat, Tanggal Lahir</td>
                                                <td><?php echo $tentor->tentor_tempat_lahir.", ".$tentor->tentor_tanggal_lahir ?></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Perguruan Tinggi</td>
                                                <td><?php echo $tentor->pt ?></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Bidang Keahlian</td>
                                                <td><?php echo $bidang_string ?></td>
                                            </tr>
                                            <tr>
                                                <td widt="200">Status</td>
                                                <td><?php echo $status ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="publikasi" role="tabpanel" aria-labelledby="publikasi-tab">
                                        <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#TambahPublikasi">
                                            <i class="icon-plus mr-2"></i> Tambah Data
                                        </button>
                                        <table id="tabelPublikasi" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Jenis</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no=1; foreach($data_publikasi as $rowpb) { ?>
                                                    <tr>
                                                        <td><?php echo $no ?></td>
                                                        <td><?php echo $rowpb->publikasi_judul ?></td>
                                                        <td><?php echo $rowpb->jenis_publikasi ?></td>
                                                        <td><?php echo $rowpb->status ?></td>
                                                        <td></td>
                                                    </tr>
                                                <?php $no++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="gelar-dosen" role="tabpanel" aria-labelledby="gelar-dosen-tab">
                                        <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#TambahGelar">
                                            <i class="icon-plus mr-2"></i> Tambah Data
                                        </button>
                                        <table id="tabelGelarDosen" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis</th>
                                                    <th>No Sertifikat</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no=1; foreach($data_gelar as $rowg) { ?>
                                                    <tr>
                                                        <td><?php echo $no ?></td>
                                                        <td><?php echo $rowg->gelar_jenis ?></td>
                                                        <td><?php echo $rowg->no_ijazah ?></td>
                                                        <td><?php echo $rowg->status ?></td>
                                                        <td></td>
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
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="TambahPublikasi" tabindex="-1" role="dialog" aria-labelledby="TambahPublikasi" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Publikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('tentor/tambah_publikasi') ?>" method="post">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group mb-1">
                                <label for="name" class="col-form-label s-12">JENIS PUBLIKASI</label>
                                <select class="form-control select2" name="publikasi" required>
                                    <?php foreach($jpublikasi as $row) { ?> 
                                        <option value="<?php echo $row->_id ?>"><?php echo $row->jenis ?></option>                                    
                                    <?php } ?>
								</select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="order" class="col-form-label s-12">JUDUL PUBLIKASI</label>
                                <textarea name="judul" class="form-control s-12" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="order" class="col-form-label s-12">NAMA JURNAL</label>
                                <input type="text" name="jurnal" class="form-control s-12" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="order" class="col-form-label s-12">VOLUME</label>
                                <input type="text" name="volume" class="form-control s-12" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="order" class="col-form-label s-12">NOMOR</label>
                                <input type="text" name="no" class="form-control s-12" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="order" class="col-form-label s-12">HALAMAN</label>
                                <input type="text" name="halaman" class="form-control s-12" required>
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

<div class="modal fade" id="TambahGelar" tabindex="-1" role="dialog" aria-labelledby="TambahGelar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Gelar Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('tentor/tambah_gelar') ?>" method="post">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group mb-1">
                                <label for="name" class="col-form-label s-12">JENIS GELAR</label>
                                <select class="form-control select2" name="jenis" required>
                                    <?php foreach($jgelar as $row) { ?> 
                                        <option value="<?php echo $row->_id ?>"><?php echo $row->jenis ?></option>                                    
                                    <?php } ?>
								</select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="order" class="col-form-label s-12">NOMOR IJAZAH</label>
                                <input type="text" name="no_ijazah" class="form-control s-12">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="order" class="col-form-label s-12">PERGURUAN TINGGI</label>
                                <input type="text" name="nama_pt" class="form-control s-12">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="order" class="col-form-label s-12">DESKRIPSI GELAR</label>
                                <textarea name="deskripsi" class="form-control s-12" required></textarea>
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

<div class="modal fade" id="EditDataDiri" tabindex="-1" role="dialog" aria-labelledby="EditDataDiri" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Edit Tentor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('tentor/edit_tentor/'.$userid) ?>" method="post" id="formEditJabatan">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group mb-1">
                                <label for="nama" class="col-form-label s-12">NAMA TENTOR</label>
                                <input type="text" name="nama_tentor" class="form-control s-12" value="<?php echo $tentor->tentor_nama ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group mb-1">
                                <label for="identitas" class="col-form-label s-12">IDENTITAS</label>
                                <input type="text" name="identitas" class="form-control s-12" value="<?php echo $tentor->tentor_identitas ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="gd" class="col-form-label s-12">GELAR DEPAN</label>
                                <input type="text" name="gd" class="form-control s-12" value="<?php echo $tentor->tentor_gelar_depan ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="gb" class="col-form-label s-12">GELAR BELAKANG</label>
                                <input type="text" name="gb" class="form-control s-12" value="<?php echo $tentor->tentor_gelar_belakang ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="tempat_lahir" class="col-form-label s-12">TEMPAT LAHIR</label>
                                <input type="text" name="tempat_lahir" class="form-control s-12" value="<?php echo $tentor->tentor_tempat_lahir ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="tanggal_lahir" class="col-form-label s-12">TANGGAL LAHIR</label>
                                <input type="date" name="tanggal_lahir" class="form-control s-12" value="<?php echo $tentor->tentor_tanggal_lahir ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group mb-1">
                                <label for="jafung" class="col-form-label s-12">JAFUNG</label>
                                <select class="form-control select2" name="jafung">
                                    <?php foreach($jafung as $rowj) { ?> 
                                        <option value="<?php echo $rowj->_id ?>"><?php echo $rowj->jafung ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group mb-1">
                                <label for="pt" class="col-form-label s-12">PT</label>
                                <select class="form-control select2" name="pt">
                                    <?php foreach($pt as $rowp) { ?> 
                                        <option value="<?php echo $rowp->id_pt ?>"><?php echo $rowp->pt_nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group mb-1">
                                <label for="pendidikan" class="col-form-label s-12">PENDIDIKAN TERAKHIR</label>
                                <select class="form-control s-12" name="pendidikan">
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group mb-1">
                                <label for="bidkeahlian" class="col-form-label s-12">BIDANG KEAHLIAN</label>
                                <select class="form-control select2" name="bidang_keahlian[]" id="bidang_keahlian" multiple="multiple">
                                    <?php foreach($bidang as $rowb) { ?> 
                                        <option value="<?php echo $rowb->_id ?>"><?php echo $rowb->bidang ?></option>
                                    <?php } ?>
                                </select>
                                <a class="btn btn-xs btn-primary mt-2" data-toggle="modal" data-target="#TambahBidang">
                                    <i class="icon-plus mr-2"></i> Tambah Bidang
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="username" class="col-form-label s-12">USERNAME</label>
                                <input type="text" name="username" class="form-control s-12" value="<?php echo $tentor->tentor_username ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <label for="password" class="col-form-label s-12">PASSWORD</label>
                                <input type="password" name="password" class="form-control s-12" placeholder="Password">
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

<div class="modal fade" id="TambahBidang" tabindex="-1" role="dialog" aria-labelledby="TambahBidang" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Bidang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="order" class="col-form-label s-12">NAMA BIDANG</label>
                                <input type="text" name="no_ijazah" class="form-control s-12">
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

<script>
    let bidang = "<?php echo $tentor->_idbidang ?>";
    let splitBidang = bidang.split(",");

    $("[name='jafung']").val("<?php echo $tentor->id_jafung ?>");
    $("[name='jafung']").select2().trigger("change");

    $("[name='pt']").val("<?php echo $tentor->id_pt ?>");
    $("[name='pt']").select2().trigger("change");

    $("#bidang_keahlian").val(splitBidang);
    $("#bidang_keahlian").select2().trigger("change");
</script>