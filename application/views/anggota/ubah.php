<div id="sales-top-home-page">
	<div class="row">
		<div class="col s12 m12">
			<div class="card-panel">
				<h5 class="more-text center grey-text">ubah data anggota koperasi</h5>

				<form action="<?= base_url('anggota/ubah/' . $anggota['anggota_id']) ?>" enctype="multipart/form-data" method="post" autocomplete="off">
					<h6 class="divider"></h6>
					<h6 class="more-text">Informasi pribadi</h6>

					<div class="row margin">
						<div class="input-field col s12 m6">
							<i class="mdi-action-perm-identity prefix grey-text text-lighten-1"></i>
							<input id="nama" type="text" name="nama" value="<?= $anggota['anggota_nama'] ?>" required>
							<label for="nama">Nama Lengkap</label>
						</div>

						<div class="input-field col s12 m4">
							<i class="mdi-maps-place prefix grey-text text-lighten-1"></i>
							<input id="tempat-lahir" type="text" name="tempat-lahir" value="<?= $anggota['anggota_tempat_lahir'] ?>" required>
							<label for="tempat-lahir">Tempat Lahir</label>
						</div>
						<div class="input-field col s12 m2">
							<input id="tanggal-lahir" type="date" name="tanggal-lahir" value="<?= $anggota['anggota_tanggal_lahir'] ?>" required>
						</div>

						<div class="input-field col s12 m6">
							<i class="mdi-action-wallet-giftcard prefix grey-text text-lighten-1"></i>
							<input id="nama-ibu" type="text" name="nama-ibu" value="<?= $anggota['anggota_nama_ibu'] ?>" required>
							<label for="nama-ibu">Nama Ibu Kandung</label>
						</div>

						<div class="input-field col s12 m6">
							<i class="mdi-social-school prefix grey-text text-lighten-1"></i>
							<input id="pendidikan" type="text" name="pendidikan" value="<?= $anggota['anggota_pendidikan'] ?>" required>
							<label for="pendidikan">Pendidikan Terakhir Calon Anggota</label>
						</div>

						<div class="input-field col s4 m3" style="padding-left: 52px">
							<label for="departemen" style="padding-left: 42px">Departement</label><br><br>
							<select name="departemen" id="departemen">
								<option value="Produksi" selected>Produksi</option>
								<option value="Logistic">Logistic</option>
								<option value="RMC">RMC</option>
								<option value="RND">RND</option>
								<option value="HR/GA">HR/GA</option>
								<option value="GA">GA</option>
								<option value="Accounting">Accounting</option>
								<option value="CSD">CSD</option>
							</select>
						</div>

						<div class="input-field col s7 m6" style="padding-left: 52px">

							<label for="jabatam" style="padding-left: 42px">Jabatan</label><br><br>
							<input id="jabatan" type="text" name="jabatan" required>
							<label for="jabatan" style="padding-left: 42px">Jabatan</label>
						</div>


						<div class="input-field col s3 m3" style="padding-left: 52px">
							<label for="status-kawin" style="padding-left: 42px">Jenis Kelamin</label><br><br>
							<select name="jenis-kelamin" id="jenis-kelamin">
								<option value="L" <?php if ($anggota['anggota_jk'] == 'L') echo 'selected' ?>>Laki-laki</option>
								<option value="P" <?php if ($anggota['anggota_jk'] == 'P') echo 'selected' ?>>Perempuan</option>
							</select>
						</div>

						<div class="input-field col s3 m3" style="padding-left: 52px">
							<label for="status-kawin" style="padding-left: 42px">Status Kawin</label><br><br>
							<select name="status-kawin" id="status-kawin">
								<option value="lajang" <?php if ($anggota['anggota_status_kawin'] == 'lajang') echo 'selected' ?>>Lajang</option>
								<option value="menikah" <?php if ($anggota['anggota_status_kawin'] == 'menikah') echo 'selected' ?>>Menikah</option>
								<option value="janda" <?php if ($anggota['anggota_status_kawin'] == 'janda') echo 'selected' ?>>Janda</option>
								<option value="duda" <?php if ($anggota['anggota_status_kawin'] == 'duda') echo 'selected' ?>>Duda</option>
							</select>
						</div>

						<div class="input-field col s6 m6" style="padding-left: 52px">
							<label for="agama" style="padding-left: 42px">Agama</label><br><br>
							<select name="agama" id="agama">
								<option value="Islam" <?php if ($anggota['anggota_agama'] == 'Islam') echo 'selected' ?>>Islam</option>
								<option value="Kristen" <?php if ($anggota['anggota_agama'] == 'Kristen') echo 'selected' ?>>Kristen</option>
								<option value="Katolik" <?php if ($anggota['anggota_agama'] == 'Katolik') echo 'selected' ?>>Katholik</option>
								<option value="Hindu" <?php if ($anggota['anggota_agama'] == 'Hindu') echo 'selected' ?>>Hindu</option>
								<option value="Buddha" <?php if ($anggota['anggota_agama'] == 'Buddha') echo 'selected' ?>>Buddha</option>
								<option value="Konghuchu" <?php if ($anggota['anggota_agama'] == 'Konghuchu') echo 'selected' ?>>Konghucu</option>
							</select>
						</div>


					</div>

					<h6 class="more-text">Kontak dan lainnya</h6>
					<div class="row margin">
						<div class="input-field col s12 m6">
							<i class="mdi-action-credit-card prefix grey-text text-lighten-1"></i>
							<input id="nik" type="text" name="nik" value="<?= $anggota['anggota_nik'] ?>" required>
							<label for="nik">Nomor NIK</label>
						</div>

						<div class="input-field col s12 m6">
							<i class="mdi-action-perm-phone-msg prefix grey-text text-lighten-1"></i>
							<input id="telepon" type="text" name="telepon" value="<?= $anggota['anggota_nomor_hp'] ?>" required>
							<label for="telepon">No HP</label>
						</div>

						<div class="input-field col s12 m6">
							<i class="mdi-communication-email prefix grey-text text-lighten-1"></i>
							<input id="email" type="email" name="email" value="<?= $anggota['anggota_email'] ?>">
							<label for="email">Alamat Email</label>
						</div>

						<div class="input-field col s12 m6">
							<i class="mdi-maps-pin-drop prefix grey-text text-lighten-1"></i>
							<input id="alamat" type="text" name="alamat" value="<?= $anggota['anggota_alamat'] ?>">
							<label for="alamat">Alamat Saat Ini</label>
						</div>
					</div>

					<h6 class="more-text">Dokumen Syarat Peminjaman</h6>

					<div class="file-field input-field col s6 m6">
						<div class="btn">
							<span><i class="mdi-file-attachment"></i></span>
							<input type="file" name="ktp">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="fotocopy KTP">
						</div>
					</div>
					<div class="file-field input-field col s6 m6">
						<div class="btn">
							<span><i class="mdi-file-attachment"></i></span>
							<input type="file" name="kk">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="fotocopy KK">
						</div>
					</div>
					<div class="file-field input-field col s6 m6">
						<div class="btn">
							<span><i class="mdi-file-attachment"></i></span>
							<input type="file" name="listrik">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="fotocopy Tagihan Listrik">
						</div>
					</div>
					<div class="file-field input-field col s6 m6">
						<div class="btn">
							<span><i class="mdi-file-attachment"></i></span>
							<input type="file" name="jaminan">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="fotocopy Jaminan (BPKB/STNK dll)">
						</div>
					</div>
					<div class="file-field input-field col s6 m6">
						<div class="btn">
							<span><i class="mdi-file-attachment"></i></span>
							<input type="file" name="kerja">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="Surat Keterangan Bekerja (Karyawan)">
						</div>
					</div>
					<div class="file-field input-field col s6 m6">
						<div class="btn">
							<span><i class="mdi-file-attachment"></i></span>
							<input type="file" name="gaji">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="Slip Gaji Karyawan">
						</div>
					</div>
					<div class="file-field input-field col s12 m12">
						<div class="btn">
							<span><i class="mdi-file-attachment"></i></span>
							<input type="file" name="rekening">
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text" placeholder="Rekening 3 bulan terakhir">
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12 m6">
							<a href="<?= base_url('anggota') ?>" class="btn waves-effect col s12 z-depth-0 grey lighten-4 black-text">batalkan</a>
						</div>
						<div class="input-field col s12 m6">
							<button type="submit" name="ubah" class="btn waves-effect waves-light col s12 blue">tambahkan</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>