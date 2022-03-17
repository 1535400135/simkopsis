<div id="sales-top-home-page">
	<div class="row">
		<div class="col s12 m12">
			<div class="card-panel">
				<h5 class="more-text center grey-text">proses data pinjaman</h5>

				<form action="<?= base_url('pinjaman-cash/tambah') ?>" enctype="multipart/form-data" method="post" autocomplete="off">

					<div class="row margin">
						<div class="input-field col s12 m12">
							<input type="text" name="anggota" id="id-anggota" value="<?= $anggota_id ?>" hidden>
							<!--set jenis simpanan directly-->
							<input type="text" name="jenis" value="amanah" hidden>
						</div>
						<div class="input-field col s12 m6">
							<input type="text" name="dipinjam" value="<?= "Rp. " . number_format($total,0,',','.') ?>" readonly>
							<label for="pinjaman">Total Pinjaman</label>
						</div>
                        <div class="input-field col s12 m6">
							<input type="text" name="diterima" value="<?= "Rp. " . number_format($diterima,0,',','.') ?>" readonly>
							<label for="pinjaman">Total Diterima</label>
						</div>
						<div class="input-field col s12 m6 " style="margin-bottom: 30px">
							<!-- <i class="mdi-device-access-time prefix grey-text text-lighten-1"></i> -->
                            <input type="text" name="tenggat" value="<?= $tenggat ?> Bulan" readonly>
							<label for="tenggat">Tenggat Waktu Peminjaman</label>
						</div>
						<div class="input-field col s12 m12">
							<input type="text" name="kepentingan" value="<?= $kepentingan ?>" readonly>
							<label for="pinjaman">Kepentingan Peminjaman</label>
						</div>
                        <div class="input-field col s12 m6">
							<input type="text" name="perbulan" value="<?= "Rp. " . number_format($bulan,0,',','.') ?>" readonly>
							<label for="pinjaman">Biaya Perbulan</label>
						</div>
                        <div class="input-field col s12 m12">
							<input type="text" name="total" value="<?= "Rp. " . number_format($total_bayar,0,',','.') ?>" readonly>
							<label for="pinjaman">Total Pembayaran</label>
						</div>
						<div id="dokumen-peminjaman-done" style="display: none">
							<div class="col s12 m12 ">
								<div id="simpanan-alert" class="card green lighten-5 z-depth-1">
									<div class="card-content green-text ">
										<p><span><i class="mdi-navigation-check"></i></span> Dokumen sudah lengkap</p>
									</div>
								</div>
							</div>
						</div>

						<div id="dokumen-peminjaman" style="display: none">
							<div class="col s12 m12 ">
								<div id="simpanan-alert" class="card orange lighten-5 z-depth-1">
									<div class="card-content orange-text ">
										<p><span><i class="mdi-navigation-close"></i></span> Dokumen belum lengkap <span id="lengkapi"></span></p>
									</div>
								</div>
							</div>
						</div>

						<div class="col s12 m12 ">
							<div id="simpanan-alert" class="card green lighten-5 z-depth-1">
								<div class="card-content green-text ">
									<p>PINJAMAN CASH : Dalam hal ini Koperasi akan memberikan 100% permodalan kepada
										Anggota yang memiliki keperluan mendesak dengan keuangannya.</p>
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="input-field col s12 m6">
							<a href="<?= base_url('anggota') ?>" class="btn waves-effect col s12 z-depth-0 grey lighten-4 black-text">batalkan</a>
						</div>
						<div class="input-field col s12 m6">
							<button type="submit" name="tambah" class="btn waves-effect waves-light col s12 blue" id="tombol-tambah">
								Ajukan Peminjaman
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>