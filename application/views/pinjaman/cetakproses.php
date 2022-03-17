<html>

<head>
	<title>Formulir Permohonan Pinjaman</title>
	<style>
		table {
			width: 100%;
			font-size:13px;
		}
		tr:nth-child(even){background-color: #f2f2f2}
		p {
			font-size:13px;
		}
		ol {
			font-size: 13px;
		}
	</style>
</head>

<body>
	<h2 style="text-align: center; font-size:16px;">FORMULIR PERMOHONAN PINJAMAN</h2>
	<table>
		<tr>
			<td style="width:20%"><b>Data Pribadi</b></td>
			<td></td>
			<td style="width:20%"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td style="width:20%">Nama Lengkap</td>
			<td style="width:30%">: <?= $anggota_nama ?></td>
			<td style="width:20%">Jenis Kelamin</td>
			<td style="width:30%">: <?= $anggota_jk ?></td>
		</tr>
		<tr>
			<td>No. KTP</td>
			<td>: <?= $anggota_nik ?></td>
			<td>Tempat, Tanggal Lahir</td>
			<td>: <?= $anggota_tempat_lahir.', '.$anggota_tanggal_lahir ?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td style="width:20%">Alamat Rumah</td>
			<td style="width:80%">: <?= $anggota_alamat ?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td style="width:20%">No. Telp</td>
			<td style="width:30%">: - </td>
			<td style="width:20%">No. HP</td>
			<td style="width:30%">: <?= $anggota_nomor_hp ?></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>: <?= $anggota_jabatan ?></td>
			<td>Departemen</td>
			<td>: <?= $anggota_departemen ?></td>
		</tr>
		<tr>
			<td>Gaji</td>
			<td>: -</td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td style="width:30%"><b>Data Suami/Istri/Orang Tua</b></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Nama Suami/Istri/Orang Tua</td>
			<td>: <?= $anggota_nama_ibu ?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td style="width:20%">No. KTP</td>
			<td>: -</td>
			<td style="width:20%">Tempat/Tanggal Lahir</td>
			<td>: - </td>
		</tr>
		<tr>
			<td>No. Telp</td>
			<td>: -</td>
			<td>HP</td>
			<td>: -</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>: -</td>
			<td>Penghasilan</td>
			<td>: -</td>
		</tr>
		<tr>
			<td>Data Permohonan</td>
			<td>Pinjaman</td>
			<td>Kepentingan</td>
			<td>Peminjaman</td>
		</tr>
		<tr>
			<td>Nominal Pinjaman</td>
			<td>: <?= $pinjaman_total ?></td>
			<td>Untuk</td>
			<td>: <?= $pinjaman_keterangan ?></td>
		</tr>
		<tr>
			<td>Nominal Angsuran</td>
			<td></td>
			<td>Jangka Waktu</td>
			<td>: <?= $pinjaman_tenggat ?></td>
		</tr>
	</table>
	<h3 style="font-size:14px;">Syarat dan Ketentuan Pinjaman Koperasi</h3>
	<p>Ketentuan Pengajuan Pinjaman :</p>
	<ol>
		<li>Karyawan PT. Alfa Polimer Indonesia yang berstatus Karyawan PKWTT/Tetap</li>
		<li>Bersedia ATM & Buku Tabungan Payroll disimpan Koperasi</li>
		<li>Mempunyai Kinerja yang baik</li>
		<li>Pengajuan pinjaman disetujui pimpinan level Manager/General Manager</li>
		<li>Jangka Waktu Maksimal 5 Tahun</li>
		<li>Ansuran maksimal 30% dari gaji atau total penghasilan keluarga</li>
		<li>Pengajuan pinjaman disetujui suami/istri</li>
		<li>Jika resign/mengundurkan diri maka pinjamannya harus dilunasi, jika belum dilunasi maka hak PHK sementara
			tidak diberikan</li>
		<li>Bersedia mengikuti program perencanaan keluarga berumah tangga yang diselenggarakan oleh HR(suami & istri)
		</li>
		<li>Pendampingan pelunasan, jika Kepentingannya untuk melunasi pinjaman di instansi keuangan</li>
	</ol>
	<p>Syarat :</p>
	<ol>
		<li>Identitas KTP Suami/Istri</li>
		<li>ATM & Buku tabungan Payroll</li>
		<li>Slip gaji Suami Istri bagi yang bekerja</li>
		<li>Photocopy SIUP bagi yang punya usaha</li>
		<li>Photocopy Kartu keluarga</li>
	</ul>
	<table>
		<tr>
			<td style="width:25%"></td>
			<td style="width:25%"></td>
			<td style="width:45%; text-align:right;">Bandung Barat, <?= date('d-m-Y') ?></td>
			<td style="width:5%"></td>
		</tr>
	</table>
	<table>
		<tr>
			<td style="width:49%; text-align:center;">Menyetujui,</td>
			<td></td>
			<td style="width:49%; text-align:center;">Pemohon,</td>
			<td></td>
		</tr>
	</table>
	<br><br><br><br>
	<table>
		<tr>
			<td style="width:25%; text-align:center; text-decoration:underline;">Manager/GM,</td>
			<td style="width:25%; text-align:center; text-decoration:underline;">Koord./ Ka. Dept</td>
			<td style="width:25%; text-align:center; text-decoration:underline;">Suami/Istri/Orang Tua</td>
			<td style="width:25%; text-align:center;text-decoration:underline;">Karyawan</td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td style="width:50%"></td>
			<td style="width:40%;">Koperasi</td>
			<td style="width:10%"></td>
			<td style="width:10%"></td>
		</tr>
	</table>
	<br><br><br><br>
	<table>
		<tr>
			<td style="width:25%; text-align:center;"></td>
			<td style="width:25%; text-align:center; text-decoration:underline;">Pembina</td>
			<td style="width:25%; text-align:center; text-decoration:underline;">Ketua</td>
			<td style="width:25%; text-align:center;"></td>
		</tr>
	</table>
</body>

</html>
