	<div class="section">
		<div class="row">
			<div class="col s12 m12 l12">
				<ul class="collapsible collapsible-accordion card no-padding with-header" data-collapsible="accordion">
					<li class="collapsible-header">
						<h4 class="light">Halaman Pengaturan Sistem</h4>
					</li>
					<li>
						
							<div class="collapsible-header">Ganti Password Akun</div>
							<div class="collapsible-body">
								<div class="row margin">
								<form action="<?= base_url('pengguna/gantipass/'. $this->session->userdata('user_id')) ?>" method="post" autocomplete="off">
								<div class="input-field col s12 m12">
									<i class="mdi-action-lock-outline prefix grey-text text-lighten-1"></i>
									<input id="password" type="password" name="password_lama">
									<label for="alamat">Password Lama</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="mdi-action-lock-outline prefix grey-text text-lighten-1"></i>
									<input id="password" type="password" name="password">
									<label for="alamat">Password Baru</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="mdi-action-lock-outline prefix grey-text text-lighten-1"></i>
									<input id="password" type="password" name="konfirmasi">
									<label for="alamat">Konfirmasi Password</label>
								</div>
								<button type="submit" name="update" class="btn waves-effect waves-light col s12 blue">Simpan</button>
								</form>
								</div>
							</div>
					</li>
					<?php if ($this->session->userdata('level')=='anggota') {?>
					<li>						
						<div class="collapsible-header ">Ganti Nomor HP Akun</div>
						<div class="collapsible-body">
							<div class="row margin">
								<form action="<?= base_url('pengguna/ubahnohp/'. $this->session->userdata('anggota_id')) ?>" method="post" autocomplete="off">
								<div class="input-field col s12 m6">
									<i class="mdi-action-lock-outline prefix grey-text text-lighten-1"></i>
									<input id="password" type="password" name="password">
									<label for="alamat">Konfirmasi Password</label>
								</div>
								<div class="input-field col s12 m6">
									<i class="mdi-action-perm-phone-msg prefix grey-text text-lighten-1"></i>
									<input id="telepon" type="text" name="telepon" required>
									<label for="telepon">No HP</label>
								</div>
								<button type="submit" name="update" class="btn waves-effect waves-light col s12 blue">Simpan</button>
							</div>
							</form>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>