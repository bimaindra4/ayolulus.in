<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-user"></i>
                        Edit Data Diri
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-7 offset-md-2">
                <form action="#" method="post">
                    <div class="card no-b o-r">
                        <div class="card-body">
                            <h5 class="card-title">Edit Data Diri</h5>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group m-0">
                                        <label for="nrp" class="col-form-label s-12">NRP / NIM</label>
                                        <input id="nrp" class="form-control r-0 light s-12" type="text" name="nrp_nim">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group m-0">
                                        <label for="nama" class="col-form-label s-12">NAMA LENGKAP</label>
                                        <input id="nama" class="form-control r-0 light s-12" type="text" name="nama_lengkap">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group m-0">
                                        <label for="tempat_lhr" class="col-form-label s-12">TEMPAT LAHIR</label>
                                        <input id="tempat_lhr" class="form-control r-0 light s-12" type="text" name="tempat_lhr">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-0">
                                        <label for="tgl_lhr" class="col-form-label s-12">TANGGAL LAHIR</label>
                                        <input id="tgl_lhr" class="form-control r-0 light s-12" type="date" name="tgl_lhr">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group m-0">
                                        <label for="jkel" class="col-form-label s-12">JENIS KELAMIN</label>
                                        <select for="jkel" class="form-control r-0 light s-12" name="jkel">
                                            <option value="">-- Pilih Jenis --</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group m-0">
                                        <label for="pt" class="col-form-label s-12">PERGURUAN TINGGI</label>
                                        <select name="pt" class="custom-select select2" required>
                                            <option value="">-- Pilih PT --</option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-0">
                                        <label for="jenjang" class="col-form-label s-12">JENJANG</label>
                                        <select for="jenjang" class="form-control r-0 light s-12" name="jenjang">
                                            <option value="">-- Pilih Jenjang --</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group m-0">
                                        <label for="fakultas" class="col-form-label s-12">FAKULTAS</label>
                                        <select name="fakultas" class="custom-select select2" required>
                                            <option value="">-- Pilih Fakultas --</option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-0">
                                        <label for="prodi" class="col-form-label s-12">PROGRAM STUDI</label>
                                        <select name="prodi" class="custom-select select2" required>
                                            <option value="">-- Pilih Program Studi --</option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group m-0">
                                        <label for="email" class="col-form-label s-12">EMAIL</label>
                                        <input id="email" class="form-control r-0 light s-12" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-0">
                                        <label for="no_hp" class="col-form-label s-12">NO HP</label>
                                        <input id="no_hp" class="form-control r-0 light s-12" type="text" name="no_hp">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group m-0">
                                        <label for="foto" class="col-form-label s-12">UPLOAD FOTO</label>
                                        <input id="foto" class="form-control no-b s-12" type="file" name="foto" style="padding-left: 0px">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <hr>
                                    <a href="<?php echo site_url('manajemen/data_diri') ?>" class="btn btn-primary btn-sm">
                                        <i class="icon-save mr-2"></i>Simpan Data Diri
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $footer ?>