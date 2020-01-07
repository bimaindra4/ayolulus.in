<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-user-circle"></i>
                        Proses Bimbingan
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-12">
                <h3>Perkenalan dan Pembahasan Materi</h3>
                <hr>
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-a avatar-lg circle"></span>
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="mb-3">
                                    <b>Nama User</b>
                                    <b class=" float-right" style="margin-bottom: 0px">26 Oktober 2019 14.15</b>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class="lampiran">
                                    <button type="button" class="btn btn-outline-danger btn-sm r-20 ">
                                        <i class="icon-file-pdf-o"></i>&nbsp;
                                        1429431793.203Software Engin...
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-sm r-20 ">
                                        <i class="icon-file-word-o"></i>&nbsp;
                                        GEMASTIK 12 Pengembangan Per...
                                    </button>
                                    <button type="button" class="btn btn-outline-success btn-sm r-20 ">
                                        <i class="icon-file-excel-o"></i>&nbsp;
                                        COS Report
                                    </button>
                                    <button type="button" class="btn btn-outline-warning btn-sm r-20 ">
                                        <i class="icon-file-powerpoint-o"></i>&nbsp;
                                        CSR Aqua Group
                                    </button>
                                </div>
                                <button class="btn btn-primary btn-sm float-right" onclick="balasKomentar()">Balas</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-11 offset-md-1">
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-b avatar-lg circle"></span>
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="mb-3">
                                    <b>Nama User</b>
                                    <b class="float-right" style="margin-bottom: 0px">26 Oktober 2019 14.15</b>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="komentar" tabindex="-1" role="dialog" aria-labelledby="pilihtentor" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Balas Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formTentor">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group mt-2">
                                <label for="name" class="col-form-label s-12">ISI KOMENTAR</label>
                                <textarea class="form-control s-12"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group mt-2">
                                <label for="name" class="col-form-label s-12">LAMPIRAN</label>
                                <input type="file" name="lampiran" class="form-control no-b s-12" style="padding-left: 0px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-sm btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function balasKomentar() {
        $("#komentar").modal("show");
    }
</script>

<?php echo $footer ?>