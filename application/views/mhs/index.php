<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-dashboard2"></i>
                        Dashboard
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white bg-info mb-3 no-b">
                    <div class="card-header no-b">Selamat Datang</div>
                    <div class="card-body text-info">
                        <p class="card-text">Selamat datang <b>Bima Indra</b>, bagaimana bimbingan skripsimu?</p>
                    </div>
                </div>
                <div class="stepper sw-main"
                    data-options='{
                            "selected": 1,
                            "transitionEffect":"fade",
                            "toolbarSettings":{
                                    "showNextButton":false,
                                    "showPreviousButton":false
                                }
                            }'>
                    <ul class="nav step-anchor">
                        <li class="nav-item"><a href="#data-diri">Langkah 1<br><small>Data Diri</small></a></li>
                        <li class="nav-item"><a href="#tugas-akhir">Langkah 2<br><small>Data Tugas Akhir</small></a></li>
                        <li class="nav-item"><a href="#pembayaran">Langkah 3<br><small>Pembayaran</small></a></li>
                    </ul>
                    <div class="card no-b shadow">
                        <div id="data-diri" class="card-body text-center p-5">
                            <h3 class="my-3">
                                Lengkapi Data Diri
                            </h3>
                            <a href="<?php echo site_url('manajemen/edit_data_diri') ?>" class="btn btn-primary mb-3 btn-lg">Isi Data Diri</a>
                        </div>
                        <div id="tugas-akhir" class="card-body p-5">
                            <div class="row my-3">
                                <div class="col-md-12 mb-3">
                                    <div class="card text-white bg-info no-b">
                                        <div class="card-body text-info">
                                            <p class="card-text float-left">Silahkan menunggu konfirmasi tentor selama 1 hari</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card mb-3">
                                        <div class="card-header white text-center">
                                            <strong>TENTOR 1</strong>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="image m-3">
                                                <img class="user_avatar no-b no-p r-5" src="<?php echo base_url() ?>assets/img/dummy/u1.png" alt="User Image">
                                            </div>
                                            <div>
                                                <h6 class="p-t-10">Addin Aditya</h6>
                                                aditya@ayolulus.in
                                            </div>
                                            <span class="badge badge-primary r-5 mt-3">Menunggu Konfirmasi</span>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header white text-center">
                                            <strong>TENTOR 2</strong>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="image m-3">
                                                <img class="user_avatar no-b no-p r-5" src="<?php echo base_url() ?>assets/img/dummy/u1.png" alt="User Image">
                                            </div>
                                            <div>
                                                <h6 class="p-t-10">Sugeng Widodo</h6>
                                                sugengw@ayolulus.in
                                            </div>
                                            <span class="badge badge-primary r-5 mt-3">Menunggu Konfirmasi</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="card no-b">
                                        <div class="card-body">
                                            <div class="card-title">Data Pengajuan Bimbingan</div>
                                            <table class="table table-hover table-bordered">
                                                 <tr>
                                                    <td style="width: 175px">Judul Bimbingan</td>
                                                    <td>Implementasi Metode Rapid Application Development (RAD) pada Sistem Informasi LPPM (Studi Kasus: STIKI Malang)</td>
                                                </tr>
                                                <tr>
                                                    <td>Kata Kunci</td>
                                                    <td>Rapid Application Development, Sistem Informasi</td>
                                                </tr>
                                                <tr>
                                                    <td>Tentor 1</td>
                                                    <td>Addin Aditya (Senin, 08.00 - 10.00)</td>
                                                </tr>
                                                <tr>
                                                    <td>Tentor 2</td>
                                                    <td>Sugeng Widodo (Rabu, 13.00 - 15.00)</td>
                                                </tr>
                                                <tr>
                                                    <td>Mulai Bimbingan</td>
                                                    <td>19 Agustus 2019</td>
                                                </tr>
                                                <tr>
                                                    <td>Masa Bimbingan</td>
                                                    <td>2 Bulan</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="my-3">
                                Langkah 2
                            </h3>
                            <a href="<?php echo site_url('bimbingan/atur') ?>" class="btn btn-primary mb-3 btn-lg">Mulai Bimbingan Anda</a>
                        </div>
                        <div id="pembayaran" class="card-body p-5">
                            <div class="row my-3">
                                <div class="col-md-5">
                                    <h3>Paket 2 Bulan</h3>
                                </div>
                                <div class="col-md-7">
                                    <h3>Invoice</h3>
                                    <div class="card text-white bg-info no-b mb-3">
                                        <div class="card-body text-info">
                                            <h3>Informasi Pembayaran</h3>
                                            <p>Pembayaran tagihan keuangan dapat dilakukan melalui rekening berikut. Lakukan konfirmasi pembayaran kepada Operator Keuangan dengan membawa bukti transfer/setoran dari bank.</p>
                                            <table class="table text-white">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No Rekening</th>
                                                        <th>Atas Nama</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>BANK BCA</td>
                                                        <td>230 3200 809</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Paket</th>
                                                <th>Nominal</th>
                                                <th>Jatuh Tempo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Paket 2 Bulan</td>
                                                <td>Rp. 200.000</td>
                                                <td>23 September 2019</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a class="btn btn-primary mb-3 btn-lg text-center">Konfirmasi Pembayaran</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $footer ?>