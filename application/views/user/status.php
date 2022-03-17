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
                <span class="card-title activator grey-text text-darken-4"><?= $anggota['anggota_nama'] ?></span>
                <p class="grey-text"><i class="mdi-action-perm-identity "></i>
                    <?php
                    if ($anggota['anggota_jk'] == 'L') {
                        echo 'Laki-laki';
                    } else {
                        echo 'Perempuan';
                    }
                    ?>
                </p>
                <p class="grey-text"><i class="mdi-action-store"></i> <?= $anggota['anggota_departemen'] ?></p>
                <p class="grey-text"><i class="mdi-communication-email"></i> <?= $anggota['anggota_email'] ?></p>
                <a href="<?= base_url('anggota-laporan/'.$anggota['anggota_id']) ?>" class="btn btn-move-up right">
					Laporan
				</a>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?= $anggota['anggota_nama'] ?> <i class="mdi-navigation-close right"></i></span>

                <h5 class="divider"></h5>
                <p class="ultra-small margin more-text" style="padding-left: 0px !important;">Informasi pribadi</p>
                <p><i class="mdi-social-cake"></i> <?= $anggota['anggota_tempat_lahir'] ?>, <?= $anggota['anggota_tanggal_lahir'] ?></p>
                <p><i class="mdi-action-favorite"></i> <?= $anggota['anggota_status_kawin'] ?></p>
                <p><i class="mdi-av-recent-actors"></i> <?= $anggota['anggota_agama'] ?></p>
                <p><i class="mdi-action-wallet-giftcard"></i> <?= $anggota['anggota_nama_ibu'] ?></p>
                <p><i class="mdi-social-school"></i> <?= $anggota['anggota_pendidikan'] ?></p>
                <p><i class="mdi-action-wallet-travel"></i> <?= $anggota['anggota_departemen'] ?></p>

                <p class="divider"></p>
                <p class="ultra-small margin more-text" style="padding-left: 0px !important;">Kontak</p>
                <p><i class="mdi-action-credit-card"></i> <?= $anggota['anggota_nik'] ?></p>
                <p><i class="mdi-action-perm-phone-msg"></i> <?= $anggota['anggota_nomor_hp'] ?></p>
                <p><i class="mdi-communication-email"></i> <?= $anggota['anggota_email'] ?></p>
                <p><i class="mdi-maps-pin-drop"></i> <?= $anggota['anggota_alamat'] ?></p>

            </div>
        </div>
    </div>

    <!-- dokumen dan data pengguna -->
    <div class="col s12 m8 l8 card white" style="max-height: 550px;height: 550px;overflow: auto">
        <ul class="tabs">
            <li class="tab col s3">
                <a href="#test1" class="active">Riwayat Simpan</a>
            </li>
            <li class="tab col s3">
                <a href="#test2">Riwayat pinjam</a>
            </li>
            <li class="tab col s3">
                <a href="#test4" class="active">Riwayat Angsuran</a>
            </li>
            <li class="tab col s3">
                <a href="#test3">dokumen</a>
            </li>
        </ul>
        <!-- tab content-->
        <div id="test1" class="col s12">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 m12">
                        <input type="text" class="" placeholder="cari riwayat simpan">
                    </div>
                    <div class="col s12 m12">
                        <ul class="collection">
                            <?php
                            foreach ($simpanan as $key => $value) :
                            ?>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s3 m3 grey-text">
                                            <i class="mdi-av-timer"></i> <?= $value['simpanan_date_created'] ?>
                                        </div>
                                        <div class="col s3 m3">
                                            <span class="orange-text">
                                                <?= "Rp. ".number_format($value['simpanan_total'],0,'','.') ?>
                                            </span>
                                        </div>
                                        <div class="col s6 m6">
                                            <span class="right green-text text-darken-3"><i class="mdi-action-account-balance-wallet"></i> Simpanan <?= $value['simpanan_jenis'] ?></span>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="test2" class="col s12">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 m12">
                        <input type="text" class="" placeholder="cari riwayat peminjaman">
                    </div>
                    <div class="col s12 m12">
                        <ul class="collection">
                            <?php
                            foreach ($pinjaman as $key => $value) :
                            ?>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s3 m3 grey-text">
                                            <i class="mdi-av-timer"></i> <?= $value['pinjaman_date_created'] ?>
                                        </div>
                                        <div class="col s3 m3">
                                            <span class="orange-text">
                                                <?= "Rp. ".number_format($value['pinjaman_total'],0,'','.') ?>
                                            </span>
                                        </div>
                                        <div class="col s6 m6">
                                            <span class="right green-text text-darken-3"><i class="mdi-action-credit-card"></i>Pinjaman <?= $value['pinjaman_jenis'] ?></span>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="test4" class="col s12">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 m12">
                        <input type="text" class="" placeholder="cari riwayat angsuran">
                    </div>
                    <div class="col s12 m12">
                        <ul class="collection">
                            <?php
                            foreach ($angsuran as $key => $value) :
                            ?>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s12 m6 grey-text">
                                            <i class="mdi-av-timer"></i> <?= $value['angsuran_date_created'] ?>
                                        </div>
                                        <div class="col s12 m6">
                                            <span class="orange-text">
                                                <?= "Rp. ". number_format($value['angsuran_jumlah'],0,'','.') ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="test3" class="col s12">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 m12">
                        <input type="text" class="" placeholder="cari dokumen">
                    </div>
                    <div class="col s12 m12 ">
                        <ul class="collection">
                            <?php if (empty($anggota['anggota_ktp'])) : ?>
                            <li class="collection-item avatar">
                                <h5 class="no-margin">Fotocopy KTP Belum Ada</h5>
                            </li>
                            <?php else : ?>    
                            <li class="collection-item avatar">
                                <img src="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_ktp']) ?>" alt="" class="circle">
                                <h5 class="no-margin">Fotocopy KTP</h5>
                                <a href="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_ktp']) ?>" target="_blank" class="secondary-content blue-text"><i class="mdi-image-remove-red-eye"></i></a>
                            </li>
                            <?php endif ?>
                            <?php if (empty($anggota['anggota_kk'])) : ?>
                            <li class="collection-item avatar">
                                <h5 class="no-margin">Fotocopy KK Belum Ada</h5>
                            </li>
                            <?php else : ?>    
                            <li class="collection-item avatar">
                                <img src="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_kk']) ?>" alt="" class="circle">
                                <h5 class="no-margin">Fotocopy KK</h5>
                                <a href="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_kk']) ?>" target="_blank" class="secondary-content blue-text"><i class="mdi-image-remove-red-eye"></i></a>
                            </li>
                            <?php endif ?>
                            <?php if (empty($anggota['anggota_listrik'])) : ?>
                            <li class="collection-item avatar">
                                <h5 class="no-margin">Fotocopy Listrik Belum Ada</h5>
                            </li>
                            <?php else : ?>    
                            <li class="collection-item avatar">
                                <img src="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_listrik']) ?>" alt="" class="circle">
                                <h5 class="no-margin">Fotocopy Listrik</h5>
                                <a href="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_listrik']) ?>" target="_blank" class="secondary-content blue-text"><i class="mdi-image-remove-red-eye"></i></a>
                            </li>
                            <?php endif ?>
                            <?php if (empty($anggota['anggota_jaminan'])) : ?>
                            <li class="collection-item avatar">
                                <h5 class="no-margin">Fotocopy Jaminan Belum Ada</h5>
                            </li>
                            <?php else : ?>    
                            <li class="collection-item avatar">
                                <img src="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_jaminan']) ?>" alt="" class="circle">
                                <h5 class="no-margin">Fotocopy Jaminan</h5>
                                <a href="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_jaminan']) ?>" target="_blank" class="secondary-content blue-text"><i class="mdi-image-remove-red-eye"></i></a>
                            </li>
                            <?php endif ?>
                            <?php if (empty($anggota['anggota_kerja'])) : ?>
                            <li class="collection-item avatar">
                                <h5 class="no-margin">Fotocopy Kerja Belum Ada</h5>
                            </li>
                            <?php else : ?>    
                            <li class="collection-item avatar">
                                <img src="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_kerja']) ?>" alt="" class="circle">
                                <h5 class="no-margin">Fotocopy Kerja</h5>
                                <a href="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_kerja']) ?>" target="_blank" class="secondary-content blue-text"><i class="mdi-image-remove-red-eye"></i></a>
                            </li>
                            <?php endif ?>
                            <?php if (empty($anggota['anggota_gaji'])) : ?>
                            <li class="collection-item avatar">
                                <h5 class="no-margin">Fotocopy Gaji Belum Ada</h5>
                            </li>
                            <?php else : ?>    
                            <li class="collection-item avatar">
                                <img src="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_gaji']) ?>" alt="" class="circle">
                                <h5 class="no-margin">Fotocopy Gaji</h5>
                                <a href="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_gaji']) ?>" target="_blank" class="secondary-content blue-text"><i class="mdi-image-remove-red-eye"></i></a>
                            </li>
                            <?php endif ?>
                            <?php if (empty($anggota['anggota_rekening'])) : ?>
                            <li class="collection-item avatar">
                                <h5 class="no-margin">Fotocopy Rekening Belum Ada</h5>
                            </li>
                            <?php else : ?>    
                            <li class="collection-item avatar">
                                <img src="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_rekening']) ?>" alt="" class="circle">
                                <h5 class="no-margin">Fotocopy Rekening</h5>
                                <a href="<?= base_url('assets/upload/dokumen/'.$anggota['anggota_rekening']) ?>" target="_blank" class="secondary-content blue-text"><i class="mdi-image-remove-red-eye"></i></a>
                            </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>