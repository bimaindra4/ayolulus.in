<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-user-circle"></i>
                        Bimbingan Tugas Akhir
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-3">
                <div class="card no-b p-3 mb-3">
                    <div>
                        <div class="image mr-3 avatar-lg float-left">
                            <span class="avatar-letter avatar-letter-a avatar-lg circle"></span>
                        </div>
                        <div class="mt-1">
                            <div>
                                <strong>Addin Aditya</strong>
                            </div>
                            <small>Tentor 1</small>
                        </div>
                    </div>
                </div>
                <div class="card no-b p-3 mb-3">
                    <div>
                        <div class="image mr-3 avatar-lg float-left">
                            <span class="avatar-letter avatar-letter-a avatar-lg circle"></span>
                        </div>
                        <div class="mt-1">
                            <div>
                                <strong>Sugeng Widodo</strong>
                            </div>
                            <small>Tentor 2</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card text-white bg-info no-b">
                    <div class="card-body text-info">
                        <p class="card-text float-left">Ayo, proses bimbinganmu sudah mulai</p>
                        <a href="<?php echo site_url('bimbingan/proses') ?>" class="btn btn-sm btn-primary float-right">Masuk</a>
                    </div>
                </div>
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="card-title">Riwayat Bimbingan</div>
                        <table id="example2" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Topik Bimb.</th>
                                    <th>Tanggal Bimb.</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Perkenalan dan Pembahasan Materi</td>
                                    <td>26 Agustus 2019</td>
                                    <td>
                                        <span class="badge badge-danger">Selesai</span>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-xs">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Materi Dasar</td>
                                    <td>2 September 2019</td>
                                    <td>
                                        <span class="badge badge-success">Segera</span>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-xs">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>

<?php echo $footer ?>