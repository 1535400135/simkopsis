<div class="row show-on-large hide-on-small-only">
    <div class="col s12 ">
        <div class="card">
            <div class="card-content margin" style="margin: 12px;">
                <div class="row">
                    <div class="col s6 m6 l6">
                        <h4 class="cardbox-text light left margin">daftar simpanan Tabungan</h4>
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
                        <th>Nomor</th>
                        <th>Tanggal Simpan</th>
                        <th>Total Setoran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no  = 1;
                    foreach ($sukarela  as $key => $value) :
                        if ($value['simpanan_jenis'] === 'tabungan') :
                    ?>
                            <tr>
                                <td class="grey-text text-darken-1"><?= $no ?></td>
                                <td class="grey-text text-darken-1">
                                    <?= $value['simpanan_date_created'] ?>
                                </td>
                                <td class="grey-text text-darken-1"><?= "Rp. " . number_format($value['simpanan_total'],0,',','.') ?></td>
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

<!-- Floating Action Button -->
<?php if ($this->session->userdata('level'!='anggota')) : ?>
<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
    <a href="#modal-tambah" class="btn-floating btn-large teal modal-trigger">
        <i class="mdi-av-playlist-add"></i>
    </a>
</div>
<?php endif ?>
<!-- Floating Action Button -->

<!-- Modal delete -->
<div id="modal-tambah" class="modal">
    <?= form_open('simpanan-sukarela') ?>
    <div class="modal-content center">
        <div class="row">
            <div class="col s12 m12 center">
                <h5 class="more-text">tambah data simpanan tabungan</h5>
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
                <input type="text" name="jenis" value="tabungan" hidden>
            </div>

            <div class="input-field col s12 m12">
                <i class="mdi-action-account-balance-wallet prefix grey-text text-lighten-1"></i>
                <input id="setoran" type="number" name="setoran" required>
                <label for="setoran">Jumlah Setoran</label>
            </div>

            <div class="col s12 m12 ">
                <div id="simpanan-alert" class="card green lighten-5 z-depth-1">
                    <div class="card-content green-text ">
                        <p>SIMPANAN SUKARELA : Adalah jenis produk simpanan yang disediakan untuk anggota yang hendak menambah tabungan selain dari simpanan pokok dan simpanan wajib. Setoran awal minimal sebesar Rp 50.000.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" name="simpan" class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</button>
        <a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
    </div>
    <?= form_close() ?>
</div>