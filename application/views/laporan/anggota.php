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
    <h4 style="text-align: center; font-size:14px;">Jln. Indistri Cimareme II No.5 Padalarang - Bandung Barat</h4>
    <br><br>
    <h3 style="text-align: center; font-size:16px;">Buku Anggota</h3>
    <!-- <table>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Kode Anggota</td>
            <td style="width:50%">: <?= $anggota_id ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">NIK Anggota</td>
            <td style="width:50%">: <?= $anggota_nik ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Nama Lengkap</td>
            <td style="width:50%">: <?= $anggota_nama ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Tempat, Tanggal Lahir</td>
            <td style="width:50%">: <?= $anggota_tempat_lahir.', '.$anggota_tanggal_lahir ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Agama</td>
            <td style="width:50%">: <?= $anggota_agama ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Alamat</td>
            <td style="width:50%">: <?= $anggota_alamat ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Total Pinjaman</td>
            <td style="width:50%">: <?= $anggota_alamat ?></td>
        </tr>
        <tr>
            <td style="width:10%"></td>
            <td style="width:40%">Alamat</td>
            <td style="width:50%">: <?= $anggota_alamat ?></td>
        </tr>
    </table> -->
    <br><br>
	<table border="1">
        <thead>
            <tr>
                <th style="width:25%">Total Pinjaman</th>
                <th style="width:12%">Total Pinjaman Tersisa</th>
                <th style="width:15%">Jumlah Angsuran</th>
                <th style="width:12%">Jumlah Angsuran Tersisa</th>
                <th style="">Total Investasi</th>
                <th style="">Total Tabungan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $value) : ?>
            <tr>
                <td><?= $value->anggota_id ?></td>
                <td><?= $value->anggota_nama ?></td>
                <td><?= $value->anggota_alamat ?></td>
                <td><?= $value->anggota_nomor_hp ?></td>
                <td><?= $value->anggota_pendidikan ?></td>
                <td><?= $value->anggota_jabatan ?></td>
            </tr>
            <?php endforeach ?>
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
