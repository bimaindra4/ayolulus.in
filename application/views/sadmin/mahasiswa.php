<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-user"></i>
                        Data Mahasiswa
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="card-title">Data Mahasiswa</div>
                        <table id="example2" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Identitas</th>
                                    <th>Nama</th>
                                    <th>PT</th>
                                    <th>Jenjang</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($mhs as $row) { ?> 
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $row->mhs_identitas ?></td>
                                        <td><?php echo $row->mhs_nama ?></td>
                                        <td><?php echo $row->pt ?></td>
                                        <td><?php echo $row->mhs_jenjang ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-xs">Edit</button>
                                            <a href="<?php echo site_url('mahasiswa/hapus_mhs/'.$row->id_mahasiswa_url) ?>" class="btn btn-danger btn-xs">Hapus</a>
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

<?php echo $footer ?>