<?php echo $header ?>

<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-dollar"></i>
                        Pembayaran
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-12">
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
                <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="card-title">Riwayat Pembayaran</div>
                        <table id="example2" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching": false}'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pembayaran</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Nominal</th>
                                    <th>Status</th>
                                    <th>Detail</th>
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
                                        <a onclick="detailPembayaran()" href="#" class="btn btn-primary btn-xs">Detail</a>
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

<div class="modal fade" id="pembayaran" tabindex="-1" role="dialog" aria-labelledby="bimbingan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Detail Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formTentor">
                <div class="modal-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td style="width: 150px">Pembayaran</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tanggal Bayar</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Via</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bank</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nominal</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bukti Pembayaran</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function detailPembayaran() {
        $("#pembayaran").modal("show");
    }
</script>

<?php echo $footer ?>