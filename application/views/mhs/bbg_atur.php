<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-user-circle"></i>
                        Mulai Bimbingan
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-10 offset-md-1">
                <div class="stepper sw-main" 
                    data-options='{ "transitionEffect":"fade",
                                    "toolbarSettings":{
                                        "showNextButton":false,
                                        "showPreviousButton":false
                                    }
                                  }'>
                    <ul class="nav step-anchor">
                        <li><a href="#judul">Langkah 1<br><small>Judul TA</small></a></li>
                        <li><a href="#tentor">Langkah 2<br><small>Pilih Tentor 1 & 2</small></a></li>
                        <li><a href="#lama">Langkah 3<br><small>Pilih Lama Bimbingan</small></a></li>
                    </ul>
                    <div class="card no-b shadow">
                        <div id="judul" class="card-body p-5">
                            <form class="form-material">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-sm">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="judul" required>
                                                    <label class="form-label">Judul Tugas Akhir</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group form-float form-group-sm">
                                                <label class="form-label">Kata Kunci</label><br>
                                                <input type="text" class="tags-input form-control"
                                                   data-options='{"tagClass": "badge badge-warning r-0", "maxTags": 5, "focusClass": "my-focus-class"}' required>
                                            </div>
                                            <a href="#tentor" class="btn btn-secondary btn-sm float-right">
                                                <i class="icon-arrow-right mr-2"></i>Selanjutnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="tentor" class="card-body p-5">
                            <form class="form-material">
                                <div class="body">
                                    <div class="row clearfix mb-3">
                                        <div class="col-sm-12">
                                            <h5 class="mb-3">Pilih Tentor</h5>
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Topik</th>
                                                        <th>Reputasi</th>
                                                        <th>Jadwal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>John Doe</td>
                                                        <td>SPK, IoT, Elektronika</td>
                                                        <td>4.7</td>
                                                        <td>
                                                            <button class="btn btn-primary btn-xs" onclick="dataTentor()">Lihat</button>
                                                            <button class="btn btn-success btn-xs" onclick="pilihTentor()">Pilih</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Sugeng Widodo</td>
                                                        <td>Website, Database, Sistem Informasi</td>
                                                        <td>4.7</td>
                                                        <td>
                                                            <button class="btn btn-primary btn-xs" onclick="dataTentor()">Lihat</button>
                                                            <button class="btn btn-success btn-xs" onclick="pilihTentor()">Pilih</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Addin Aditya</td>
                                                        <td>Sistem Informasi</td>
                                                        <td>4.7</td>
                                                        <td>
                                                            <button class="btn btn-primary btn-xs" onclick="dataTentor()">Lihat</button>
                                                            <button class="btn btn-success btn-xs" onclick="pilihTentor()">Pilih</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <h5 class="mb-3">Tentor Terpilih</h5>
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Jadwal</th>
                                                        <th>Sebagai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Addin Aditya</td>
                                                        <td>Senin, 08.00 - 10.00</td>
                                                        <td>Tentor 1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Sugeng Widodo</td>
                                                        <td>Rabu, 13.00 - 15.00</td>
                                                        <td>Tentor 2</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" class="text-center">Tidak ada tentor yang dipilih</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="#judul" class="btn btn-secondary btn-sm">
                                                <i class="icon-arrow-left mr-2"></i>Sebelumnya
                                            </a>
                                            <a href="#lama" class="btn btn-secondary btn-sm float-right">
                                                <i class="icon-arrow-right mr-2"></i>Selanjutnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="lama" class="card-body p-5">
                            <form class="form-material">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-5">
                                            <select class="form-control">
                                                <option value="">-- Pilih Lama Bimbingan --</option>
                                                <option value="2">2 Bulan</option>
                                                <option value="4">4 Bulan</option>
                                                <option value="6">6 Bulan</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 offset-md-1">
                                            <h6>Paket 2 Bulan</h6>
                                            <ul type="disk">
                                                <li>Proses bimbingan selama 2 bulan</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <a href="#tentor" class="btn btn-secondary btn-sm">
                                                <i class="icon-arrow-left mr-2"></i>Sebelumnya
                                            </a>
                                            <button type="button" class="btn btn-primary btn-sm float-right" onclick="bimbingan()">
                                                <i class="icon-save mr-2"></i>Ajukan Bimbingan
                                            </button>
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
</div>

<div class="modal fade" id="pilihtentor" tabindex="-1" role="dialog" aria-labelledby="pilihtentor" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Tentor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formTentor">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="name" class="col-form-label s-12">SEBAGAI TENTOR</label>
                                <select name="tentor" class="form-control">
                                    <option value="">-- Pilih Bagian --</option>
                                    <option value="t1">Tentor 1</option>
                                    <option value="t2">Tentor 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="name" class="col-form-label s-12">TANGGAL MULAI</label>
                                <div class="input-group">
                                    <input type="text" name="tanggal" class="date-time-picker form-control"
                                           data-options='{"timepicker":false, "format":"d-m-Y"}' value="13/08/2019"/>
                                    <span class="input-group-append">
                                        <span class="input-group-text add-on white">
                                            <i class="icon-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label for="name" class="col-form-label s-12">JADWAL TENTOR</label>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td>Senin</td>
                            <td>08.00 - 10.00</td>
                            <td>
                                <input type="radio" name="jadwal_hari" value=""> 0/5
                            </td>
                        </tr>
                        <tr>
                            <td>Jumat</td>
                            <td>08.00 - 10.00</td>
                            <td>
                                <input type="radio" name="jadwal_hari" value=""> 0/5
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-sm btn-primary" onclick="showTentor()">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="dataTentor" tabindex="-1" role="dialog" aria-labelledby="dataTentor" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Nama Tentor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formTentor">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-2">
                            <figure class="avatar avatar-xl mb-3 ml-3">
                                <img src="<?php echo base_url() ?>assets/img/dummy/u5.png" class="d-block" alt=""> 
                            </figure>
                        </div>
                        <div class="col-md-10">  
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <td style="width: 150px">Nama Dosen</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Asal Instansi</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Bidang Keahlian</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Reputasi</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="bimbingan" tabindex="-1" role="dialog" aria-labelledby="bimbingan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Ajukan Bimbingan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formTentor">
                <div class="modal-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td style="width: 125px">Judul Bimbingan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kata Kunci</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tentor 1</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tentor 2</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Mulai Bimbingan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Masa Bimbingan</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-sm btn-primary" onclick="pengajuanBimbingan()">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $footer ?>

<script type="text/javascript">
    function pilihTentor() {
        $("#pilihtentor").modal("show");
    }

    function dataTentor() {
        $("#dataTentor").modal("show");
    }

    function bimbingan() {
        $("#bimbingan").modal("show");
    }

    function pengajuanBimbingan() {
        swal({
          title: "Apakah Anda yakin?",
          text: "Data yang Anda isi akan dikirim ke server pusat",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! Data Anda sudah terkirim, silahkan tunggu konfirmasi selama 1 hari", {
              icon: "success",
            });
          } else {
            swal("Silahkan perbaiki data Anda");
          }
        });
    }

    function showTentor() {
        let tentor = $("select[name='tentor']").val();
        let tanggal = $("input[name='tanggal']").val();
        let hari = $("select[name='hari']").val();
        let jam = $("input[name='jam']").val();
    }
</script>