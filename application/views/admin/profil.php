<div class="row">

	<div class="col s12 m4 l4">
		<div id="profile-card" class="card">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="<?= base_url('assets/images/office.jpg') ?>" alt="user bg">
			</div>
			<div class="card-content">
				<?php if (empty($pengguna->pengguna_foto)) : ?>
					<img src="<?= base_url('assets/images/admin.png') ?>" alt="" class="circle responsive-img activator card-profile-image">
				<?php else :?>
					<img src="<?= base_url('assets/upload/foto/'. $pengguna->pengguna_foto) ?>" alt="" class="circle responsive-img activator card-profile-image">
				<?php endif ?>
				<span class="card-title activator grey-text text-darken-4"><?= $pengguna->pengguna_nama ?></span>
				<p class="grey-text"><i class="mdi-action-perm-identity "></i><?= $pengguna->pengguna_nama ?></p>
				<p class="grey-text"><i class="mdi-action-store"></i> <?= $pengguna->pengguna_hak_akses ?></p>
				<p class="grey-text"><i class="mdi-communication-email"></i> <?= $pengguna->pengguna_date_created ?></p>
				<a href="#gantifoto" class="btn activator btn-move-up waves-effect waves-light darken-2 right modal-trigger">
					Update Profil
				</a>
			</div>
		</div>
	</div>

	<div id="gantifoto" class="modal">
		<form action="<?= base_url('anggota/updateprofil/'.$pengguna->pengguna_id) ?>" method="post"  enctype="multipart/form-data">
		<div class="modal-content">
			<div class="input-field col s12">
        	    <i class="mdi-action-perm-identity prefix grey-text text-lighten-1"></i>
        	    <input id="nama" type="text" name="nama" value="<?= $pengguna->pengguna_nama ?>" required>
        	    <label for="nama">Nama Lengkap</label>
        	</div>
			<div class="file-field input-field col s12">
				<div class="btn">
					<span><i class="mdi-file-attachment"></i></span>
					<input type="file" name="profil">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Format File JPG/PNG">
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="waves-effect waves-red btn-flat modal-action modal-close">Lanjutkan</button>
			<a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
		</div>
		</form>
	</div>

</div>