angular.module('adminctrl', [])
    // Admin
    .controller('dashboardController', dashboardController)
    .controller('baptisController', baptisController)
    .controller('sidiController', sidiController)
    .controller('nikahController', nikahController)
   
    ;

function dashboardController($scope, dashboardServices) {
    $scope.$emit("SendUp", "Dashboard");
    $scope.datas = {};
    $scope.title = "Dashboard";
    alert("OK");
    // dashboardServices.get().then(res=>{
    //     $scope.datas = res;
    // })
}

function baptisController($scope, baptisServices, pesan, helperServices) {
    $scope.$emit("SendUp", "Baptis");
    $scope.datas = {};
    $scope.model = {
        "nama": "Deni Malik",
        "tempat_lahir": "Bandung",
        "tanggal_lahir": new Date("1999-03-04"),
        "nama_ayah": "Ujang",
        "nama_ibu": "Sutini",
        "wali_ayah": "Aji",
        "wali_ibu": "Patma",
        "tanggal_penggembalaan": new Date("2023-10-21"),
        "pelayan": "Wicak",
        "tempat": "Gereja GKI"
    };
    $.LoadingOverlay('show');
    $scope.tambah = false;
    baptisServices.get().then((res) => {
        $scope.datas = res;
        $.LoadingOverlay('hide');
    })

    $scope.showTambah = (item)=>{
        $scope.tambah = item;
    }
    
    $scope.save = () => {
        var item = angular.copy($scope.model);
        console.log($scope.model);
        item.tanggal_lahir = helperServices.dateToString(item.tanggal_lahir);
        item.tanggal_penggembalaan = helperServices.dateToString(item.tanggal_penggembalaan);
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay('show');
            if ($scope.model.id) {
                baptisServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay('hide');
                })
            } else {
                baptisServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay('hide');
                })
            }
        })
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $scope.model.tanggal_lahir = new Date($scope.model.tanggal_lahir);
        $scope.model.tanggal_penggembalaan = new Date($scope.model.tanggal_penggembalaan);
        $scope.tambah = true;
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
            baptisServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function sidiController($scope, sidiServices, pesan, helperServices) {
    $scope.$emit("SendUp", "Baptis");
    $scope.datas = {};
    $scope.pendidikan = helperServices.pendidikan;
    $scope.model = {}
    $.LoadingOverlay('show');
    $scope.tambah = false;
    sidiServices.get().then((res) => {
        $scope.datas = res;
        $.LoadingOverlay('hide');
    })

    $scope.showTambah = (item)=>{
        $scope.tambah = item;
    }
    
    $scope.save = () => {
        var item = angular.copy($scope.model);
        console.log($scope.model);
        item.tanggal_lahir = helperServices.dateToString(item.tanggal_lahir);
        item.tanggal_penggembalaan = helperServices.dateToString(item.tanggal_penggembalaan);
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay('show');
            if ($scope.model.id) {
                sidiServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay('hide');
                })
            } else {
                sidiServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay('hide');
                })
            }
        })
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $scope.model.tanggal_lahir = new Date($scope.model.tanggal_lahir);
        $scope.model.tanggal = new Date($scope.model.tanggal);
        $scope.tambah = true;
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
            sidiServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function nikahController($scope, nikahServices, pesan, helperServices) {
    $scope.$emit("SendUp", "Baptis");
    $scope.datas = {};
    $scope.model = {
        "nama_suami": "Deni Malik",
        "tempat_lahir_suami": "Bandung",
        "tanggal_lahir_suami": new Date("1994-12-31"),
        "nama_ayah_suami": "Bagus",
        "nama_ibu_suami": "Sutini",
        "alamat_suami": "-",
        "klasis_babtis_suami": "GKI Bandung",
        "tanggal_babtis_suami": new Date("1999-12-31"),
        "babtis_oleh_suami": "Pendeta Suami",
        "klasis_sidi_suami": "GKI Bandung",
        "tanggal_sidi_suami": new Date("2017-01-31"),
        "sidi_oleh_suami": "Pendeta Suami",
        "nama_istri": "Ismawati Djare",
        "tempat_lahir_istri": "Jayapura",
        "tanggal_lahir_istri": new Date("1996-02-01"),
        "nama_ayah_istri": "Ujang",
        "nama_ibu_istri": "Martini",
        "alamat_istri": "-",
        "klasis_babtis_istri": "GKI Jayapura",
        "tanggal_babtis_istri": new Date("2000-02-01"),
        "babtis_oleh_istri": "Pendeta Istri",
        "klasis_sidi_istri": "GKI Jayapura",
        "tanggal_sidi_istri": new Date("2017-02-01"),
        "sidi_oleh_istri": "Pendeta Istri"
    };
    $.LoadingOverlay('show');
    $scope.tambah = false;
    nikahServices.get().then((res) => {
        $scope.datas = res;
        $.LoadingOverlay('hide');
    })

    $scope.showTambah = (item)=>{
        $scope.tambah = item;
    }
    
    $scope.save = () => {
        var item = angular.copy($scope.model);
        console.log($scope.model);
        item.tanggal_lahir_suami = helperServices.dateToString(item.tanggal_lahir_suami);
        item.tanggal_lahir_istri = helperServices.dateToString(item.tanggal_lahir_istri);
        item.tanggal_babtis_suami = helperServices.dateToString(item.tanggal_babtis_suami);
        item.tanggal_babtis_istri = helperServices.dateToString(item.tanggal_babtis_istri);
        item.tanggal_sidi_suami = helperServices.dateToString(item.tanggal_sidi_suami);
        item.tanggal_sidi_istri = helperServices.dateToString(item.tanggal_sidi_istri);
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay('show');
            if ($scope.model.id) {
                nikahServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay('hide');
                })
            } else {
                nikahServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay('hide');
                })
            }
        })
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $scope.model.tanggal_lahir = new Date($scope.model.tanggal_lahir);
        $scope.model.tanggal_penggembalaan = new Date($scope.model.tanggal_penggembalaan);
        $scope.tambah = true;
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
            nikahServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}
