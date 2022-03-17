<div class="row">

	<div class="col s12 m4 l4">
		<div id="profile-card" class="card">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="<?= base_url('assets/images/office.jpg') ?>" alt="user bg">
			</div>
			<div class="card-content">
				<img src="<?= base_url('assets/images/admin.png') ?>" alt="" class="circle responsive-img activator card-profile-image">
				<a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
					<i class="mdi-content-filter-list"></i>
				</a>

				<span class="card-title activator grey-text text-darken-4"><?= $pengguna['pengguna_nama'] ?></span>
				<p class="grey-text"><i class="mdi-action-perm-identity "></i>

				</p>
				<p class="grey-text"><i class="mdi-action-store"></i> <?= $pengguna['pengguna_hak_akses'] ?></p>
				<p class="grey-text"><i class="mdi-communication-email"></i> <?= $anggota['pengguna_date_created'] ?></p>


				<span class="card-title grey-text text-darken-4"><?= $pengguna['pengguna_nama'] ?> <i class="mdi-navigation-close right"></i></span>



			</div>
		</div>
	</div>

	<!-- dokumen dan data pengguna -->



</div>