<div id="sales-top-home-page">
    <div class="row margin">
        <div class="col s12 m12">
            <div class="card-panel">
                <h5 class="more-text center grey-text">tambah data anggota koperasi</h5>
                <form action="<?= base_url('anggota/tambah') ?>" method="post" autocomplete="off">
                    <h6 class="divider"></h6>
                    <h6 class="more-text">Informasi pribadi</h6>

                    <div class="row margin">
                        <div class="input-field col s12 m6">
                            <i class="mdi-action-perm-identity prefix grey-text text-lighten-1"></i>
                            <input id="nama" type="text" name="nama" required>
                            <label for="nama">Nama Lengkap</label>
                        </div>

                        <div class="input-field col s12 m4">
                            <i class="mdi-maps-place prefix grey-text text-lighten-1"></i>
                            <input id="tempat-lahir" type="text" name="tempat-lahir" required>
                            <label for="tempat-lahir">Tempat Lahir</label>
                        </div>
                        <div class="input-field col s12 m2">
                            <input id="tanggal-lahir" type="date" name="tanggal-lahir" required>
                        </div>

                        <div class="input-field col s12 m6">
                            <i class="mdi-action-wallet-giftcard prefix grey-text text-lighten-1"></i>
                            <input id="nama-ibu" type="text" name="nama-ibu" required>
                            <label for="nama-ibu">Nama Ibu Kandung</label>
                        </div>

                        <div class="input-field col s12 m6">
                            <i class="mdi-social-school prefix grey-text text-lighten-1"></i>
                            <input id="pendidikan" type="text" name="pendidikan" required>
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
                                <option value="L" selected>Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="input-field col s3 m3" style="padding-left: 52px">
                            <label for="status-kawin" style="padding-left: 42px">Status Kawin</label><br><br>
                            <select name="status-kawin" id="status-kawin">
                                <option value="lajang" selected>Lajang</option>
                                <option value="menikah">Menikah</option>
                                <option value="janda">Janda</option>
                                <option value="duda">Duda</option>
                            </select>
                        </div>

                        <div class="input-field col s6 m6" style="padding-left: 52px">
                            <label for="agama" style="padding-left: 42px">Agama</label><br><br>
                            <select name="agama" id="agama">
                                <option value="Islam" selected>Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghuchu">Konghucu</option>
                            </select>
                        </div>
                    </div>

            </div>

            <h6 class="more-text">Kontak dan lainnya</h6>
            <div class="row margin">
                <div class="input-field col s12 m6">
                    <i class="mdi-action-credit-card prefix grey-text text-lighten-1"></i>
                    <input id="nik" type="number" name="nik" required>
                    <label for="nik">Nomor NIK</label>
                </div>

                <div class="input-field col s12 m6">
                    <i class="mdi-action-perm-phone-msg prefix grey-text text-lighten-1"></i>
                    <input id="telepon" type="text" name="telepon" required>
                    <label for="telepon">No HP</label>
                </div>

                <div class="input-field col s12 m6">
                    <i class="mdi-communication-email prefix grey-text text-lighten-1"></i>
                    <input id="email" type="email" name="email">
                    <label for="email">Alamat Email</label>
                </div>

                <div class="input-field col s12 m6">
                    <i class="mdi-maps-pin-drop prefix grey-text text-lighten-1"></i>
                    <input id="alamat" type="text" name="alamat">
                    <label for="alamat">Alamat Saat Ini</label>
                </div>

                <div class="input-field col s12 m6">
                    <i class="prefix grey-text text-lighten-1"></i>
                    <input id="email" type="text" name="username">
                    <label for="email">Username</label>
                </div>

                <div class="input-field col s12 m6">
                    <i class="prefix grey-text text-lighten-1"></i>
                    <input id="password" type="password" name="password">
                    <label for="alamat">Password</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <a href="<?= base_url('anggota') ?>" class="btn waves-effect col s12 z-depth-0 grey lighten-4 black-text">batalkan</a>
                </div>
                <div class="input-field col s12 m6">
                    <button type="submit" name="tambah" class="btn waves-effect waves-light col s12 blue">tambahkan</button>
                </div>
            </div>

            </form>
        </div>
    </div>
</div>
</div>