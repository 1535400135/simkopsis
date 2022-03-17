<html>
    <head>
        <title>Data Anggota</title>
	<style>
		table {
			width: 100%;
            border-collapse: collapse;
			font-size:13px;
		}
        td, th {
            padding: 4px;
        }
		p {
			font-size:13px;
		}
		ol {
			font-size: 13px;
		}
	</style>
    </head>
    <body>
        <h2 style="text-align: center; font-size:18px;">Koperasi Simpan Pinjam PT. Alfa Polimer Indonesia</h2>
        <h4 style="text-align: center; font-size:14px;">Jln. Indistri Cimareme II No.5 Padalarang - Bandung Barat _______________________________________________________________________</h4>
    <br>
    <h3 style="text-align: center; font-size:16px;">Buku Anggota</h3>
    <table>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Kode Anggota</td>
            <td style="width:50%">: <?= $anggota->anggota_id ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">NIK Anggota</td>
            <td style="width:50%">: <?= $anggota->anggota_nik ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Nama Lengkap</td>
            <td style="width:50%">: <?= $anggota->anggota_nama ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Tempat, Tanggal Lahir</td>
            <td style="width:50%">: <?= $anggota->anggota_tempat_lahir.', '.$anggota->anggota_tanggal_lahir ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Agama</td>
            <td style="width:50%">: <?= $anggota->anggota_agama ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Alamat</td>
            <td style="width:50%">: <?= $anggota->anggota_alamat ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Total Pinjaman</td>
            <td style="width:50%">: <?= "Rp. ".number_format($pinjaman->total,0,'','.') ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Total Pinjaman Tersisa</td>
            <td style="width:50%">: <?= "Rp. ".number_format($pinjaman->sisa,0,'','.') ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Jumlah Angsuran</td>
            <td style="width:50%">: <?= $angsuran->total_angsuran ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Jumlah Angsuran Tersisa</td>
            <td style="width:50%">: <?= $angsuran->total_angsuran-$angsuran->angsuran ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Total Investasi</td>
            <td style="width:50%">: <?= "Rp. ".number_format($investasi->total_investasi,0,'','.') ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Total Tabungan</td>
            <td style="width:50%">: <?= "Rp. ".number_format($tabungan->total_tabungan,0,'','.') ?></td>
        </tr>
    </table>
    <br><br>
	<table>
		<tr>
			<td style="width:70%"></td>
			<td style="width:30%;">Bandung Barat, <?= date('d-m-Y') ?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td style="width:70%"></td>
			<td style="width:30%;">YANG MENGELUARKAN,</td>
		</tr>
    </table>
    <table>
        <tr>
            <td style="width:70%"></td>
			<td style="width:30%;">MENGETAHUI,</td>
        </tr>
    </table>
    <br><br><br><br>
    <table>
        <tr>
            <td style="width:70%"></td>
			<td style="width:30%;"><?= $this->session->userdata('name') ?></td>
        </tr>
	</table>
    </body>
</html>