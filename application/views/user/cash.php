<div class="row show-on-large hide-on-small-only">
    <div class="col s12 ">
        <div class="card">
            <div class="card-content margin" style="margin: 12px;">
                <div class="row">
                    <div class="col s6 m6 l6">
                        <h4 class="cardbox-text light left margin">daftar angsuran tunai</h4>
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
                        <th>No Urut</th>
                        <th>Nama Anggota</th>
                        <th>Departemen</th>
                        <th>Tanggal Simpan</th>
                        <th>Total Setoran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($angsuran as $key => $value) :
                        if ($value['pinjaman_jenis'] === 'cash') :
                    ?>
                            <tr>
                                <td class="grey-text text-darken-1"><?= $no ?></td>
                                <td class="teal-text text-darken-1">
                                    <a href="#" style="text-decoration: underline">
                                        <?= $value['anggota_nama'] ?>
                                    </a>
                                </td>
                                <td class="grey-text text-darken-1"><?= $value['anggota_departemen'] ?></td>
                                <td class="grey-text text-darken-1">
                                    <?= $value['angsuran_date_created'] ?>
                                </td>
                                <td class="grey-text text-darken-1"><?= "Rp. ".number_format($value['angsuran_jumlah'],0,'','.') ?></td>
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

<!-- Modal delete -->
<div id="modal-tambah" class="modal">
    <?= form_open('uangsuran-cash') ?>
    <div class="modal-content center">
        <div class="row">
            <div class="col s12 m12 center">
                <h5 class="more-text">tambah data angsuran pinjaman</h5>
                <h5 class="divider"></h5>
            </div>

            <div class="col s12 m1">
                <h3 class="grey-text">
                    <i class="mdi-action-perm-identity"></i>
                </h3>
            </div>
            <div class="input-field col s12 m11">
                <input id="search-anggota" type="text" class="validate custom-box-search" name="anggota-form" required placeholder="ketikkan nama anggota">
                <input type="text" name="anggota" id="id-anggota" hidden>
                <!--set jenis simpanan directly-->
                <input type="text" name="jenis" value="amanah" hidden>
                <input type="hidden" name="anggota_id" value="<?= $this->session->userdata('user_id') ?>">
            </div>

            <div class="input-field col s12 m12">
                <i class="mdi-action-account-balance-wallet prefix grey-text text-lighten-1"></i>
                <input id="pembayaran" type="number" class="validate" name="angsuran" required>
                <input id="pinjaman-id" type="hidden" name="pinjaman-id" required>
            </div>

            <div class="input-field col s12 m12">
                <i class="mdi-editor-attach-money prefix grey-text text-lighten-1"></i>
                <input id="pinjaman" type="text" class="validate" name="pinjaman" required value="total pinjaman tersisa" readonly disabled>
                <label for="pinjaman">Jumlah Pinjaman</label>
            </div>

            <div class="input-field col s12 m12">
                <i class="mdi-image-timer prefix grey-text text-lighten-1"></i>
                <input id="tenggat" type="text" class="validate" name="tenggat_waktu" required value="hari" readonly disabled>
                <label for="tenggat">Jangka Waktu Peminjaman (hari)</label>
            </div>

            <!--            <div class="col s12 m12 ">-->
            <!--                <div id="simpanan-alert" class="card green lighten-5 z-depth-1">-->
            <!--                    <div class="card-content green-text ">-->
            <!--                        <p>Simpanan bersifat umum yang penyimpanan dan penarikannya dapat dilakukan kapan saja oleh nasabah pada jam kerja. Simpanan awal Rp 25.000 dan selanjutnya minimal Rp 10.000.</p>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" name="simpan" class="waves-effect waves-red btn-flat modal-action modal-close">simpan</button>
        <a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
    </div>
    <?= form_close() ?>
</div>