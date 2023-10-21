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
    $scope.model = {};
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
    $scope.model = {};
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
