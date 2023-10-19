angular.module('adminctrl', [])
    // Admin
    .controller('dashboardController', dashboardController)
    .controller('baptisController', baptisController)
    .controller('sidiController', sidiController)
   
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
    $scope.tambah = true;
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
