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
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            Data Diri
                            <div class="float-right">
                                <a href="<?php echo site_url('manajemen/edit_data_diri') ?>" class="btn btn-xs btn-primary">Edit Data</a>
                            </div>
                        </div>
                        <figure class="avatar avatar-xl mt-1">
                            <img src="<?php echo base_url() ?>assets/img/dummy/u5.png" class="d-block mx-auto" alt=""> 
                        </figure>    
                        <table class="table table-bordered table-hover mt-3">
                            <tr>
                                <td width="150">ID User</td>
                                <td>aZPA6fqxTIvJLnGVvn9v</td>
                            </tr>
                            <tr>
                                <td width="150">NRP / NIM / dsb</td>
                                <td>161111070</td>
                            </tr>
                            <tr>
                                <td>Nama Mahasiswa</td>
                                <td>MUHAMMAD BIMA INDRA KUSUMA</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>LAKI-LAKI</td>
                            </tr>
                            <tr>
                                <td>Tempat, Tgl Lahir</td>
                                <td>MALANG, 4 JULI 1998</td>
                            </tr>
                            <tr>
                                <td>Perguruan Tinggi</td>
                                <td>STIKI MALANG</td>
                            </tr>
                            <tr>
                                <td>Jenjang</td>
                                <td>S1</td>
                            </tr>
                            <tr>
                                <td>Fakultas</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Program Studi</td>
                                <td>TEKNIK INFORMATIKA</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>bimaindra444@gmail.com</td>
                            </tr>
                            <tr>
                                <td>No HP</td>
                                <td>089650691537</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Data Tugas Akhir</div>
                        <form class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="label-control col-md-4">Judul Tugas Akhir</label>
                                    <div class="col-md-8">
                                        <b>Implementasi Metode Rapid Application Development (RAD) pada Sistem Informasi LPPM (Studi Kasus: STIKI Malang)</b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label-control col-md-4">Tentor 1</label>
                                    <div class="col-md-8">
                                        <b>Addin Aditya</b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label-control col-md-4">Tentor 2</label>
                                    <div class="col-md-8">
                                        <b>Sugeng Widodo</b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label-control col-md-4">Masa Bimbingan</label>
                                    <div class="col-md-8">
                                        <b>2 Bulan</b>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $footer ?>