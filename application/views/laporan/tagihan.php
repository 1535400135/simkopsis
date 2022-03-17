<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l12 ">
                    <button class="btn blue right waves-effect waves-light" id="btn-cetak-surat-keluar">
                        <i class="mdi-action-print"></i>
                    </button>
                </div>

                <div class="col l12 no-padding" id="surat-keluar-barang" style="padding: 12px;box-sizing: border-box">
                    <h4 class="divider"></h4>
                    <div class="row">
                        <div class="col m6 l2" style="width: 20%; display: inline">
                            <img src="<?= base_url('assets/images/favicon/simkopsis-icon.png') ?>" alt="" width="110px" height="110px">
                        </div>
                        <div class="col m10 l10" style="width: 80%; display: inline">
                            <h5 class="cardbox-text ">Koperasi Simpan Pinjam PT. Alfa Polimer Indonesia</h5>
                            <h6 class="light ">Jln. Indistri Cimareme II No.5 Padalarang - Bandung Barat</h6>
                            <div class="row">
                                <div class="col m6 l6" style="width: 50%;display: inline;text-align: left">
                                    <h6 class="light margin"> Telepon : (0761) 572855</h6>
                                </div>
                                <div class="col m6 l6" style="width: 50%;display: inline;text-align: left">
                                    <h6 class="light margin"> Fax : 021-45854282</h6>
                                </div>
                            </div>
                            <h5 class="divider"></h5>
                        </div>

                        <div class="divider"></div>

                        <div class="col m12 l12 " style="width: 100%;display: block;text-align: center">
                            <h5 class="cardbox-text center">
                                daftar tagihan koperasi
                            </h5>
                        </div>

                        <div class="col m12 l12 ">
                            <div class="row">
                                <div class="col m6 l6">
                                    <h6 class="cardbox-text">No Bukti : </h6>
                                    <h6 class="cardbox-text">Ditujukan Untuk : </h6>
                                </div>
                                <div class="col m6 l6">
                                    <h6 class="cardbox-text">Tanggal : <?= date('d/m/Y', time()); ?></h6>
                                    <h6 class="cardbox-text">PO Customer : </h6>
                                </div>
                            </div>
                            <h5 class="divider"></h5>
                        </div>
                        <br>
                        <div class="col m12 l12" style="display: block; width: 100%">
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>Kode Anggota</th>
                                        <th>Nama </th>
                                        <th>Alamat </th>
                                        <th>No HP </th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Pekerjaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <br>
                        <div class="col m12 l12" style="width: 100%;display: block">
                            <div class="row" style="margin-top: 40px">
                                <div class="col m4 l4 right">
                                    <h6 class="cardbox-text margin center">Yang Mengeluarkan,</h6>
                                    <h6 class="cardbox-text margin center">Mengetahui</h6>
                                    <br>
                                    <br>
                                    <br>
                                    <h6 class="cardbox-text center">Nama Admin</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>