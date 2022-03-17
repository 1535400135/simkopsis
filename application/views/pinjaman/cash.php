<div class="row show-on-large hide-on-small-only">
	<div class="col s12 ">
		<div class="card">
			<div class="card-content margin" style="margin: 12px;">
				<div class="row">
					<div class="col s6 m6 l6">
						<h4 class="cardbox-text light left margin">daftar pinjaman</h4>
					</div>
					<!--                    <div class="col s6 m6 l6">-->
					<!--                        <a href="#tambah-kategori" class="btn-flat white-text blue right waves-effect waves-light modal-trigger">-->
					<!--                            tambah kategori-->
					<!--                        </a>-->
					<!--                    </div>-->

				</div>
			</div>

			<br>
			<div class="divider"></div>
			<table class="bordered" id="barang-table">
				<thead>
					<tr>
						<th>Kode Pengajuan</th>
						<th>Nama Anggota</th>
						<th>Departemen</th>
						<th>Tanggal Mengajukan</th>
						<th>Total Pinjaman</th>
						<th>Status Pengajuan Pinjaman</th>
						<th class="center">AKSI</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($cash as $key => $value) :
						if ($value['pinjaman_jenis'] === 'cash') :
					?>
							<tr>
								<td class="grey-text text-darken-1">
									<?= $no ?>
								</td>
								<td class="teal-text text-darken-1">
									<a href="<?= base_url('anggota/' . $value['anggota_id']) ?>" style="text-decoration: underline">
										<?= $value['anggota_nama'] ?>
									</a>
								</td>
								<td class="grey-text text-darken-1"><?= $value['anggota_departemen'] ?></td>
								<td class="grey-text text-darken-1"><?= $value['pinjaman_date_created'] ?></td>
								<td class="grey-text text-darken-1"><?= $value['pinjaman_total'] ?></td>
								<td class="grey-text text-darken-1">
									<?php if ($value['pinjaman_status'] == 'tunggu') : ?>
										<span class="task-cat orange">Menunggu</span>
									<?php elseif ($value['pinjaman_status'] == 'proses') : ?>
										<span class="task-cat orange">Diproses</span>
									<?php elseif ($value['pinjaman_status'] == 'tolak') : ?>
										<span class="task-cat red">Ditolak</span>
									<?php elseif ($value['pinjaman_status'] == 'setuju') : ?>
										<span class="task-cat green">Disetujui</span>
									<?php
									endif;
									?>
								</td>
								<?php
								if ($this->session->userdata('level') == 'pengurus') :
									if ($value['pinjaman_status'] == 'tunggu') :
								?>
										<td>
											<div class="row">
												<a href="<?= base_url('pinjaman/tolak/' . $value['pinjaman_id']) ?>" class="btn-flat waves-effect waves-red col l6 center" title="tolak pengajuan">
													<i class="mdi-av-not-interested red-text"></i>
												</a>
												<a href="<?= base_url('pinjaman/proses/' . $value['pinjaman_id']) ?>" class="btn-flat waves-effect waves-green col l6 center" title="proses pengajuan">
													<i class="mdi-action-done green-text"></i>
												</a>
											</div>
										</td>
									<?php
									elseif ($value['pinjaman_status'] == 'proses') :
									?>
										<td>
											<a href="<?= base_url('pinjaman/cetakproses/'. $value['pinjaman_id']) ?>" class="btn-flat waves-effect waves-green col l6 center" title="Cetak">
												<i class="mdi-action-print green-text"></i>
											</a>
											<a href="<?= base_url('pinjaman/setuju/' . $value['pinjaman_id']) ?>" class="btn-flat waves-effect waves-green col l6 center" title="proses pengajuan">
													<i class="mdi-action-done green-text"></i>
												</a>
										</td>
								<?php
									else :
									?>
										<td>
											<a href="<?= base_url('pinjaman/cetakselesai/'. $value['pinjaman_id']) ?>" class="btn-flat waves-effect waves-green col l6 center" title="Cetak">
												<i class="mdi-action-print green-text"></i>
											</a>
											<a href="#" class="btn-flat waves-effect waves-green col l6 center" title="selesai">
												<i class="mdi-action-done green-text"></i>
											</a>
										</td>
								<?php
									endif;
								endif;
								?>

								<?php
								if ($this->session->userdata('level') == 'ketua') :
									if ($value['pinjaman_status'] == 'tunggu') :
								?>
										<td>
											<div class="row">
												<a href="<?= base_url('pinjaman/tolak/' . $value['pinjaman_id']) ?>" class="btn-flat waves-effect waves-red col l6 center" title="tolak pengajuan">
													<i class="mdi-av-not-interested red-text"></i>
												</a>
												<a href="<?= base_url('pinjaman/proses/' . $value['pinjaman_id']) ?>" class="btn-flat waves-effect waves-green col l6 center" title="proses pengajuan">
													<i class="mdi-action-done green-text"></i>
												</a>
											</div>
										</td>
									<?php
									elseif ($value['pinjaman_status'] == 'proses') :
									?>
										<td>
											<a href="<?= base_url('pinjaman/cetakproses/'. $value['pinjaman_id']) ?>" class="btn-flat waves-effect waves-green col l6 center" title="Cetak">
												<i class="mdi-action-print green-text"></i>
											</a>
										</td>
								<?php
									else :
									?>
										<td>
											<p>Selesai</p>
										</td>
								<?php
									endif;
								endif;
								?>
							</tr>

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
									<a href="#!" class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</a>
									<a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
								</div>
							</div>
					<?php
							$no++;
						endif;
					endforeach;
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
if ($this->session->userdata('level') == 'pengurus') :
?>
	<!-- Floating Action Button -->
	<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
		<a href="<?= base_url('pinjaman-cash/tambah') ?>" class="btn-floating btn-large teal modal-trigger">
			<i class="mdi-av-playlist-add"></i>
		</a>
	</div>
	<!-- Floating Action Button -->
<?php
endif;
?>