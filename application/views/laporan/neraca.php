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
    <h3 style="text-align: center; font-size:16px;">BUKU NERACA</h3>
    <table border="1">
            <tr>
                <th style="width:50%">AKTIVA</th>
                <th style="width:50%">PASIVA</th>
            </tr>
            <tr>
                <th>AKTIVA LANCAR</th>
                <th>LIABILITAS/KEWAJIBAN</th>
            </tr>
    </table>
	<table border="1">
        <tbody>
            <tr>
                <td style="width:25%">KAS</td>
                <td style="width:25%"><?php $kas=($saldo+$modal-$pinjaman+$angsuran+($total-$terima)); echo "Rp. ".number_format($kas,0,'','.'); ?></td>
                <td style="width:25%">INVESTASI</td>
                <td style="width:25%"><?= "Rp. ".number_format($investasi,0,'','.') ?></td>
            </tr>
            <tr>
                <td style="width:25%">PIUTANG</td>
                <td style="width:25%"><?php $piutang=($pinjaman-$angsuran); echo "Rp. ".number_format($piutang,0,'','.'); ?></td>
                <td style="width:25%">Bunga Investasi</td>
                <td style="width:25%"><?php "Rp. ".number_format(0,0,'','.') ?></td>
            </tr>
            <tr>
                <td style="width:25%">Pengembalian Pinjaman</td>
                <td style="width:25%"><?php echo "Rp. ".number_format($angsuran,0,'','.'); ?></td>
                <td style="width:25%">Hutang</td>
                <td style="width:25%"><?php echo " - "; ?></td>
            </tr>
            <tr>
                <td style="width:25%">Bunga Pinjaman</td>
                <td style="width:25%"><?php $bunga=$total-$ril; echo "Rp. ".number_format($bunga,0,'','.'); ?></td>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
            </tr>
            <tr>
                <td style="width:25%">Biaya Administrasi</td>
                <td style="width:25%"><?php $admin=$ril-$terima; echo "Rp. ".number_format($admin,0,'','.'); ?></td>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
            </tr>
            <tr>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
            </tr>
            <tr>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
                <td style="width:25%">EKUITAS/MODAL</td>
                <td style="width:25%"></td>
            </tr>
            <tr>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
                <td style="width:25%">Modal Awal</td>
                <td style="width:25%"><?php echo "Rp. ".number_format($saldo,0,'','.'); ?></td>
            </tr>
            <tr>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
                <td style="width:25%">Laba Ditahan</td>
                <td style="width:25%"><?php $laba=$total-$terima; echo "Rp. ".number_format($laba,0,'','.'); ?></td>
            </tr>
            <tr>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
            </tr>
            <tr>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
                <td style="width:25%"></td>
            </tr>
            <tr>
                <b>
                <td style="width:25%">JUMLAH AKTIVA</td>
                <td style="width:25%"><?php $aktiva=$kas+$piutang+$angsuran+$bunga+$admin; echo "Rp. ".number_format($aktiva,0,'','.'); ?></td>
                <td style="width:25%">JUMLAH PASIVA</td>
                <td style="width:25%"><?php $pasiva=$investasi+0+$saldo+$laba; echo "Rp. ".number_format($pasiva,0,'','.'); ?></td>
                </b>
            </tr>
        </tbody>
	</table>
    <br><br>
	<br><br>
	<table>
		<tr>
			<td style="width:70%"></td>
			<td style="width:30%; text-align:center;">Bandung Barat, <?= date('d-m-Y') ?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td style="width:70%"></td>
			<td style="width:30%; text-align:center;">YANG MENGELUARKAN,</td>
		</tr>
    </table>
    <table>
        <tr>
            <td style="width:70%"></td>
			<td style="width:30%; text-align:center;">MENGETAHUI,</td>
        </tr>
    </table>
    <br><br><br>
    <table>
        <tr>
            <td style="width:70%"></td>
			<td style="width:30%; text-align:center;"><?= $this->session->userdata('name') ?></td>
        </tr>
	</table>
</body>

</html>
