<div id="sales-top-home-page">
	<div class="row">
		<div class="col s12 m12">
			<div class="card-panel">
				<h4 class="login-form-text center">Tambahkan pengguna sistem</h4>
				
				<form action="<?= base_url('AdminController/add')?>" method="post" autocomplete="off">
					<div class="row margin">
						<div class="input-field col s12 m6">
							<i class="mdi-action-verified-user prefix grey-text text-lighten-1"></i>
							<input id="username" type="text" name="username" required>
							<label for="username">Nama Pengguna</label>
						</div>
						<div class="input-field col s12 m6">
							<i class="mdi-action-lock-outline prefix grey-text text-lighten-1"></i>
							<input id="password" type="password" name="password" required value="admin" disabled>
							<label for="password type=">Kata Sandi</label>
						</div>
					</div>
					<div class="input-field col s12 m6">
						<i class="mdi-communication-contacts prefix grey-text text-lighten-1"></i>
						<input id="fullname" type="text" class="validate" name="fullname" required>
						<label for="fullname">Nama Lengkap</label>
					</div>
					<div class="input-field col s12 m6">
						<i class="mdi-communication-call prefix grey-text text-lighten-1"></i>
						<input id="telepon" type="number" minlength="1" class="validate" name="telepon" required>
						<label for="telepon">No Telepon</label>
					</div>
					
					<div class="input-field col s12 m6">
						<i class="mdi-content-mail prefix grey-text text-lighten-1"></i>
						<input id="email" type="email" class="validate" name="email" required>
						<label for="email">Alamat Email</label>
					</div>
					<div class="input-field col s12 m6">
						<i class="mdi-editor-merge-type prefix grey-text text-lighten-1"></i>
						<input id="alamat" type="text"  class="validate" name="alamat" required>
						<label for="alamat">Alamat Rumah </label>
					</div>
					
					<div class="input-field col s12 ">
						<label for="kategori-barang">Otorisasi Pengguna</label><br><br>
						<select name="level" id="level-pengguna">
							<option value="adminSuper" selected>Super Admin </option>
							<option value="adminSales">Admin Sales</option>
							<option value="adminGudang">Admin Gudang</option>
							<option value="sales">Sales Lapangan</option>
						</select>
					</div>
					
					<div class="row">
						<div class="input-field col s12 m6">
							<button type="submit" name="tambah" class="btn waves-effect waves-light col s12 blue">tambahkan</button>
						</div>
						<div class="input-field col s12 m6">
							<a href="<?= base_url('barang')?>" class="btn waves-effect waves-light col s12 grey ">batalkan</a>
						</div>
					</div>
				
				</form>
			</div>
		</div>
	</div>
</div>
