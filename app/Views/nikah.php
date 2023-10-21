<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="nikahController">
    <div class="col-md-12" ng-show="!tambah">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Daftar Peserta Nikah</h5>
                <button class="btn btn-primary btn-sm" ng-click="showTambah(true)"><i class="fas fa-plus"></i></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Suami</th>
                                <th>Nama Istri</th>
                                <th>Berkas Baptis Suami</th>
                                <th>Berkas Baptis Istri</th>
                                <th>Berkas Sidi Suami</th>
                                <th>Berkas Sidi Istri</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td>{{$index+1}}</td>
                                <td>{{item.nama_suami}}</td>
                                <td>{{item.nama_istri}}</td>
                                <td><a href="<?= base_url('berkas') ?>/{{item.file_babtis_suami}}" target="_blank">Surat Baptis Suami</a></td>
                                <td><a href="<?= base_url('berkas') ?>/{{item.file_babtis_istri}}" target="_blank">Surat Baptis Istri</a></td>
                                <td><a href="<?= base_url('berkas') ?>/{{item.file_sidi_suami}}" target="_blank">Surat Sidi Suami</a></td>
                                <td><a href="<?= base_url('berkas') ?>/{{item.file_sidi_istri}}" target="_blank">Surat Sidi Istri</a></td>
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
                    <div>
                        <div class="card-header" style="background-color: #E5E5E5;">
                            <h5>Biodata Suami</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama calon suami" ng-model="model.nama_suami">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" placeholder="Tempat Lahir" ng-model="model.tempat_lahir_suami">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" ng-model="model.tanggal_lahir_suami">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input type="text" class="form-control" placeholder="Nama Ayah" ng-model="model.nama_ayah_suami">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input type="text" class="form-control" placeholder="Nama Ibu" ng-model="model.nama_ibu_suami">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea rows="4" class="form-control" ng-model="model.alamat_suami"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Klasis Tempat Baptis</label>
                                    <input type="text" class="form-control" placeholder="Tempat Baptis" ng-model="model.klasis_babtis_suami">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Baptis</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Baptis" ng-model="model.tanggal_babtis_suami">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Dibaptis oleh</label>
                                    <input type="text" class="form-control" placeholder="Pendeta yang membaptis" ng-model="model.babtis_oleh_suami">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Klasis Tempat Sidi</label>
                                    <input type="text" class="form-control" placeholder="Tempat Sidi" ng-model="model.klasis_sidi_suami">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Sidi</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Sidi" ng-model="model.tanggal_sidi_suami">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Diteguhkan oleh</label>
                                    <input type="text" class="form-control" placeholder="Pendeta yang meneguhkan" ng-model="model.sidi_oleh_suami">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Surat Baptis</label>
                                    <input type="file" class="form-control" name="files_baptis_suami" ng-model="model.berkas_babtis_suami" base-sixty-four-input>
                                    <span style="color: red;" ng-show="form.files_baptis_suami.$error.maxsize">Tidak boleh leboh dari 1 Mb</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Surat Sidi</label>
                                    <input type="file" class="form-control" name="files_sidi_suami" ng-model="model.berkas_sidi_suami" base-sixty-four-input>
                                    <span style="color: red;" ng-show="form.files_sidi_suami.$error.maxsize">Tidak boleh leboh dari 1 Mb</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card-header" style="background-color: #E5E5E5;">
                            <h5>Biodata Istri</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama calon istri" ng-model="model.nama_istri">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" placeholder="Tempat Lahir" ng-model="model.tempat_lahir_istri">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" ng-model="model.tanggal_lahir_istri">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input type="text" class="form-control" placeholder="Nama Ayah" ng-model="model.nama_ayah_istri">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input type="text" class="form-control" placeholder="Nama Ibu" ng-model="model.nama_ibu_istri">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea rows="4" class="form-control" ng-model="model.alamat_istri"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Klasis Tempat Baptis</label>
                                    <input type="text" class="form-control" placeholder="Tempat Baptis" ng-model="model.klasis_babtis_istri">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Baptis</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Baptis" ng-model="model.tanggal_babtis_istri">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Dibaptis oleh</label>
                                    <input type="text" class="form-control" placeholder="Pendeta yang membaptis" ng-model="model.babtis_oleh_istri">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Klasis Tempat Sidi</label>
                                    <input type="text" class="form-control" placeholder="Tempat Sidi" ng-model="model.klasis_sidi_istri">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Sidi</label>
                                    <input type="date" class="form-control" placeholder="Tanggal Sidi" ng-model="model.tanggal_sidi_istri">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Diteguhkan oleh</label>
                                    <input type="text" class="form-control" placeholder="Pendeta yang meneguhkan" ng-model="model.sidi_oleh_istri">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Surat Baptis</label>
                                    <input type="file" class="form-control" name="files_baptis_istri" ng-model="model.berkas_babtis_istri" base-sixty-four-input>
                                    <span style="color: red;" ng-show="form.files_baptis_istri.$error.maxsize">Tidak boleh leboh dari 1 Mb</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Surat Sidi</label>
                                    <input type="file" class="form-control" name="files_sidi_istri" ng-model="model.berkas_sidi_istri" base-sixty-four-input>
                                    <span style="color: red;" ng-show="form.files_sidi_istri.$error.maxsize">Tidak boleh leboh dari 1 Mb</span>
                                </div>
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