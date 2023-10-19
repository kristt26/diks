<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="sidiController">
    <div class="col-md-12" ng-show="!tambah">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Daftar Sidi</h5>
                <button class="btn btn-primary btn-sm" ng-click="showTambah(true)"><i class="fas fa-plus"></i></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>TTL</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Nama Wali Ayah</th>
                                <th>Nama Wali Ibu</th>
                                <th>Berkas Babtis</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td>{{$index+1}}</td>
                                <td>{{item.nama}}</td>
                                <td>{{item.tempat_lahir}}, {{item.tanggal_lahir| date:'dd MMMM y'}}</td>
                                <td>{{item.nama_ayah}}</td>
                                <td>{{item.nama_ibu}}</td>
                                <td>{{item.wali_ayah}}</td>
                                <td>{{item.wali_ibu}}</td>
                                <td><a href="<?= base_url('berkas')?>/{{item.file}}" target="_blank">Surat Baptis</a></td>
                                <td>
                                    <button class="btn btn-warning btn-sm" ng-click="edit(item)"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm" ng-click="delete(item)"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12" ng-show="tambah">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Tambah Data Sidi</h5>
                <button class="btn btn-secondary btn-sm" ng-click="showTambah(false)"><i class="fa fa-arrow-left" aria-hidden="true"></i>Kembali</button>
            </div>
            <div class="card-body">
                <form ng-submit="save()" name="form">
                    <div class="card-header" style="background-color: #E5E5E5;">
                        <h5>Biodata Peserta Sidi</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama peserta baptis" ng-model="model.nama">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="Tempat Lahir" ng-model="model.tempat_lahir">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" ng-model="model.tanggal_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <select class="form-control" ui-select2 required style="width: 100%" ng-options="item as item for item in pendidikan" ng-model="model.pendidikan" data-placeholder="Pilih pendidikan">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kontak</label>
                                <input type="text" class="form-control" placeholder="Nomor Telepon" ng-model="model.kontak">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Nama Ayah</label>
                                <input type="text" class="form-control" placeholder="Nama Ayah" ng-model="model.nama_ayah">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input type="text" class="form-control" placeholder="Nama Ibu" ng-model="model.nama_ibu">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Nama Wali (Ayah)</label>
                                <input type="text" class="form-control" placeholder="Nama wali dari ayah" ng-model="model.wali_ayah">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Nama Wali (Ibu)</label>
                                <input type="text" class="form-control" placeholder="Nama wali dari ibu" ng-model="model.wali_ibu">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea rows="4" class="form-control" ng-model="model.alamat"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-header" style="background-color: #E5E5E5;">
                        <h5>Informasi Baptis (bagi yang sudah baptis)</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" ng-model="model.tanggal">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Klasis</label>
                                <input type="text" class="form-control" placeholder="Klasis tempat babtis" ng-model="model.klasis">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Dibaptis Oleh</label>
                                <input type="text" class="form-control" placeholder="Nama pdt yang membaptis" ng-model="model.dibabtis_oleh">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Ketua PHMJ</label>
                                <input type="text" class="form-control" placeholder="Ketua PHMJ" ng-model="model.ketua_phmj">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Sekretaris PHMJ</label>
                                <input type="text" class="form-control" placeholder="Sekretaris PHJM" ng-model="model.sekretaris_phmj">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Penangghung Jawab</label>
                                <input type="text" class="form-control" placeholder="Majelis penanggungjawab" ng-model="model.majelis">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Surat Baptis</label>
                                <input type="file" class="form-control" name="files" placeholder="Majelis penanggungjawab" ng-model="model.berkas" base-sixty-four-input>
                                <span style="color: red;" ng-show="form.files.$error.maxsize">Tidak boleh leboh dari 1 Mb</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>