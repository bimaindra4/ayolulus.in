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
                        <div class="card-title">Data Diri</div>
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
                                        <b>Pengaruh Aktivitas A Terhadap Aktivitas B Menggunakan Metode ABC</b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label-control col-md-4">Tentor 1</label>
                                    <div class="col-md-8">
                                        <b>I Gede Wayan Sukadana, S.Kom., M.MT</b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label-control col-md-4">Tentor 2</label>
                                    <div class="col-md-8">
                                        <b>Wahyudi Handayani, S.ST., M.MT</b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label-control col-md-4">Jumlah Bimbingan</label>
                                    <div class="col-md-8">
                                        <b>8 kali</b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="label-control col-md-4">Sisa Masa Bimbingan</label>
                                    <div class="col-md-8">
                                        <b>2 bulan</b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <a href="<?php echo site_url('bimbingan/atur') ?>" class="btn btn-primary btn-block">Mulai Bimbingan Anda</a>
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