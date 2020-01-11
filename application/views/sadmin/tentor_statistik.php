<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-grain"></i>
                        Statistik Tentor
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
                        <div class="card-title">Statistik Tentor</div>
                        <table id="example2" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Identitas</th>
                                    <th>Nama Tentor</th>
                                    <th>Publikasi</th>
                                    <th>Gelar Dosen</th>
                                    <th>Jafung</th>
                                    <th>Riwayat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($statistik as $row) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $row->tentor_identitas ?></td>
                                        <td><?php echo $row->tentor_nama ?></td>
                                        <td><?php echo $row->publikasi ?></td>
                                        <td><?php echo $row->gelar ?></td>
                                        <td><?php echo $row->jafung ?></td>
                                        <td><?php echo $row->riwayat ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>

<?php echo $footer ?>