<!-- <div class="row">
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
                                daftar pinjaman anggota koperasi
                            </h5>
                        </div>

                        <div class="col m12 l12 ">
                            <div class="row">
                                <div class="col m6 l6">
                                    <h6 class="cardbox-text">Tanggal : <?= date('d/m/Y', time()); ?></h6>
                                </div>
                            </div>
                            <h5 class="divider"></h5>
                        </div>
                        <br>
                        <div class="col m12 l12" style="display: block; width: 100%">
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama </th>
                                        <th>Pinjaman Cash</th>
                                        <th>Pinjaman Non Cash</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Taufik</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Total Jumlah</td>
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
                                <div class="col m6 l6">
                                    <h6 class="cardbox-text">Bandung Barat, <?= date('d/m/Y', time()); ?></h6>
                                </div>
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
</div> -->

<html>

<head>
	<title>Data Anggota</title>
	<style>
		table {
			width: 100%;
            border-collapse: collapse;
			font-size:14px;
		}
        td, th {
            padding: 3px;
            padding-left:5px;
        }
		tr:nth-child(even){background-color: #f2f2f2}
		p {
			font-size:14px;
		}
		ol {
			font-size: 13px;
		}
	</style>
</head>

<body>
	<h2 style="text-align: center; font-size:18px;">Koperasi Simpan Pinjam PT. Alfa Polimer Indonesia</h2>
    <h4 style="text-align: center; font-size:14px;">Jln. Indistri Cimareme II No.5 Padalarang - Bandung Barat</h4>
    <br><br>
    <h3 style="text-align: center; font-size:16px;">BUKU PEMINJAMAN</h3>
	<table border="1">
        <thead>
            <tr>
                <th style="width:25%">TOTAL PEMINJAMAN</th>
                <th style="width:25%">TOTAL PEMBAYARAN ANGSURAN</th>
                <th style="width:25%">SISA ANGSURAN</th>
                <th style="width:25%">TOTAL ANGSURAN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= "Rp. ".number_format($peminjam,0,'','.') ?></td>
                <td><?= "Rp. ".number_format($angsuran,0,'','.') ?></td>
                <td><?= "Rp. ".number_format($sisa,0,'','.') ?></td>
                <td><?= "Rp. ".number_format($total,0,'','.') ?></td>
            </tr>
        </tbody>
	</table>
    <br><br>
	<br><br>
    <h3 style="text-align: center; font-size:16px;">BUKU SIMPANAN</h3>
    <table border="1">
        <thead>
            <tr>
                <th style="width:25%">SIMPANAN MODAL</th>
                <th style="width:25%">SIMPANAN INVESTASI</th>
                <th style="width:25%">SIMPANAN TABUNGAN</th>
                <th style="width:25%">TOTAL SIMPANAN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= "Rp. ".number_format($modal,0,'','.') ?></td>
                <td><?= "Rp. ".number_format($investasi,0,'','.') ?></td>
                <td><?= "Rp. ".number_format($tabungan,0,'','.') ?></td>
                <td><?= "Rp. ".number_format($simpanan,0,'','.') ?></td>
            </tr>
        </tbody>
	</table>
    <br><br>
	<table>
		<tr>
			<td style="width:80%"></td>
			<td style="width:20%; text-align:center;">Bandung Barat, <?= date('d-m-Y') ?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td style="width:80%"></td>
			<td style="width:20%; text-align:center;">YANG MENGELUARKAN,</td>
		</tr>
    </table>
    <table>
        <tr>
            <td style="width:80%"></td>
			<td style="width:20%; text-align:center;">MENGETAHUI,</td>
        </tr>
    </table>
    <br><br><br>
    <table>
        <tr>
            <td style="width:80%"></td>
			<td style="width:20%; text-align:center;"><?= $this->session->userdata('name') ?></td>
        </tr>
	</table>
</body>

</html>
