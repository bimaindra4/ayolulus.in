<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-check"></i>
                        Validasi Pengalaman Tentor
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-6">
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="card-title">Validasi Pengalaman Tentor</div>
                        <div class="row">
                            <div class="col-md-12">      
                                <select name="cari" class="form-control s-12 mb-3">
                                    <option value="">-- Cari Berdasarkan --</option>
                                    <option value="nama">Nama</option>
                                    <option value="identitas">Identitas</option>
                                </select>                      
                                <input type="text" name="keyword" class="form-control s-12 mb-3" placeholder="Kata Kunci"/>
                                <button class="btn btn-primary btn-sm" id="cari_data">
                                    <i class="icon-search mr-2"></i>
                                    Cari Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-md-6">
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="card-title">Pencarian Tentor</div>
                        <div id="data_pencarian"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-none" id="data_detail_pencarian">
            <div class="col-md-12">
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="card-title">Data Tentor</div>
                        <div class="row">
                            <div class="col-2">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="data-diri-tab" data-toggle="pill" href="#data-diri" role="tab" aria-controls="data-diri" aria-selected="true">Data Diri</a>
                                    <a class="nav-link" id="publikasi-tab" data-toggle="pill" href="#publikasi" role="tab" aria-controls="publikasi" aria-selected="false">Publikasi</a>
                                    <a class="nav-link" id="gelar-dosen-tab" data-toggle="pill" href="#gelar-dosen" role="tab" aria-controls="gelar-dosen" aria-selected="false">Gelar Dosen</a>
                                    <a class="nav-link" id="jafung-tab" data-toggle="pill" href="#jafung" role="tab" aria-controls="jafung" aria-selected="false">Jafung</a>
                                    <a class="nav-link" id="riwayat-tab" data-toggle="pill" href="#riwayat" role="tab" aria-controls="riwayat" aria-selected="false">Riwayat Bimbingan</a>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="data-diri" role="tabpanel" aria-labelledby="data-diri-tab">
                                        <table id="tabelDataDiri" class="table table-hover table-bordered">
                                            <tr>
                                                <td width="200">Nama Lengkap</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Identitas</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Gelar</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Jabatan Fungsional</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Tempat, Tanggal Lahir</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Perguruan Tinggi</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Bidang Keahlian</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td widt="200">Status</td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="publikasi" role="tabpanel" aria-labelledby="publikasi-tab">
                                        <table id="tabelPublikasi" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>VNH</th>
                                                    <th>Jenis</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs">Validasi</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="gelar-dosen" role="tabpanel" aria-labelledby="gelar-dosen-tab">
                                        <table id="tabelGelarDosen" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis</th>
                                                    <th>Deskripsi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs">Validasi</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="jafung" role="tabpanel" aria-labelledby="jafung-tab">
                                        <table id="tabelJafung" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs">Validasi</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
                                        <table id="tabelRiwayat" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Mhs</th>
                                                    <th>Tanggal Mulai</th>
                                                    <th>Status</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
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

<?php echo $footer ?>

<script>
    $("#cari_data").on('click', function(e) {
        $("#data_detail_pencarian").removeClass("d-none");
        $("#data_detail_pencarian").addClass("d-none");
        
        let cari = $("[name='cari']").val();
        let keyword = $("[name='keyword']").val();

        $.ajax({
            url: "<?php echo site_url('tentor/get_data_tentor_search/') ?>"+cari+"/"+keyword,
            dataType: "JSON",
            success: function(data) {
                $("#data_pencarian").html(data.table);
            }, error: function() {
                alert("Masih error gan!");
            }
        });
    });

    function aturTentor(val) {
        $("#data_detail_pencarian").removeClass("d-none");
    }
</script>