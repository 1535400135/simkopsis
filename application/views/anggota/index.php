<div class="row show-on-large hide-on-small-only">
	<div class="col s12 ">
		<div class="card">
			<div class="card-content margin" style="margin: 12px;">
				<div class="row">
					<div class="col s6 m6 l6">
						<h4 class="cardbox-text light left margin">Daftar anggota koperasi</h4>
					</div>
				</div>
			</div>
			<br>
			<?php if ($this->session->userdata('level')=='pengurus') : ?>
			<div class="col s12">
				<a href="<?= base_url('anggota/tambah') ?>" class="btn btn-info">Tambah Data Pengguna</a>
			</div>
			<?php endif ?>
			<div class="divider"></div>
			<table class="bordered" id="barang-table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Email</th>
						<th>No HP</th>
						<th>Pekerjaan</th>
						<th>Pendapatan</th>
						<?php
						if ($this->session->userdata('level') == 'pengurus') :
						?>
							<th class="center">Aksi</th>
						<?php
						endif;
						?>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($anggota as $key => $value) :
					?>
						<tr>
							<td class="grey-text text-darken-1"><?= $no ?></td>
							<td class="grey-text text-darken-1">
								<a href="<?= base_url('anggota/' . $value['anggota_id']) ?>" style="text-decoration: underline"><?= $value['anggota_nama'] ?></a>
							</td>
							<td class="grey-text text-darken-1"><?= $value['anggota_alamat'] ?></td>
							<td class="grey-text text-darken-1"><?= $value['anggota_email'] ?></td>
							<td class="grey-text text-darken-1"><?= $value['anggota_nomor_hp'] ?></td>
							<td class="grey-text text-darken-1"><?= $value['anggota_departemen'] ?></td>
							<td class="grey-text text-darken-1"><?= $value['anggota_jabatan'] ?></td>
							<?php
							if ($this->session->userdata('level') == 'pengurus') :
							?>
								<td>
									<div class="row">
										<a href="<?= base_url('anggota/ubah/' . $value['anggota_id']) ?>" class="btn-flat waves-effect waves-orange col l6 center" title="ubah data">
											<i class="mdi-content-create orange-text"></i>
										</a>
										<a href="#delete" class="btn-flat waves-effect waves-red col l6 modal-trigger center" title="hapus data">
											<i class="mdi-action-delete red-text text-darken-3"></i>
										</a>
									</div>
								</td>
							<?php
							endif;
							?>
							<!-- Modal delete -->
							<div id="delete" class="modal">
								<div class="modal-content">
									<h4 class="red-text text-lighten-1">
										<i class="mdi-action-info-outline"></i> Yakin ingin menghapus data ?
									</h4>
									<div class="modal-content">
										<h4>
											item yang anda hapus akan terhapus dari arsip
										</h4>
									</div>
								</div>
								<div class="modal-footer">
									<a href="<?= base_url('anggota/hapus/' . $value['anggota_id']) ?>" class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</a>
									<a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
								</div>
							</div>
						</tr>
					<?php
						$no++;
					endforeach;
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>