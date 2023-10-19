<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="baptisController">
    <div class="col-md-12" ng-show="!tambah">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Daftar Baptis</h5>
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
                                <td>
                                    <button class="btn btn-warning btn-sm" ng-click="edit(item)"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm"  ng-click="delete(item)"><i class="fas fa-trash"></i></button>
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
                <h5>Tambah Data Baptis</h5>
                <button class="btn btn-secondary btn-sm" ng-click="showTambah(false)"><i class="fa fa-arrow-left" aria-hidden="true"></i>Kembali</button>
            </div>
            <div class="card-body">
                <form ng-submit="save()">
                    <div class="card-header" style="background-color: #E5E5E5;">
                        <h5>Biodata Peserta Baptis</h5>
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
                    <div class="card-header" style="background-color: #E5E5E5;">
                        <h5>Penggembalaan</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Penggembalaan</label>
                                <input type="date" class="form-control" ng-model="model.tanggal_penggembalaan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pendeta/Pelayan</label>
                                <input type="text" class="form-control" placeholder="Pelayan atau pendeta" ng-model="model.pelayan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat</label>
                                <input type="text" class="form-control" placeholder="Tempat baptis" ng-model="model.tempat">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Majenis Penanggung Jawab</label>
                                <input type="text" class="form-control" placeholder="Penanggung Jawab" ng-model="model.majelis">
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