var app = angular.module("sa_app", ['angularUtils.directives.dirPagination', 'ui.toggle']);
app.controller("controllerUser", function($scope, $http) {

    $scope.perfis = ["Administrador", "Usuario"];

    // $scope.isSpecial =true;
    // if ($scope.isSpecial =true) {

    //     $status = '1';
    // }
    // else{
    //     $status = '0';
    // }

    $scope.getBoolean = function (value) { if (value === 'true') return true; else return false; };
    

    $scope.btnName = "Cadastrar";
    $scope.insert = function() {

        $http.post(
            "../../pages/usuario/insert_user.php", {
                'usuario': $scope.usuario,
                'login': $scope.login,
                'senha': $scope.senha,
                'selecionar':$scope.selecionar,
                'status':$scope.isSpecial,
                'btnName': $scope.btnName,
                'id': $scope.id
            }
            ).success(function(data) {
                alert(data);

                
                $scope.usuario = null;
                $scope.login = null;
                $scope.senha = null;
                $scope.selecionar = null;
                $scope.status = null;
                $scope.btnName = "Cadastrar";
                $scope.show_data();
                $scope.cadastroForm.$setUntouched();
                $scope.cadastroForm.$setPristine();
            });
        // }
    }
    $scope.show_data = function() {
        $http.get("../../pages/usuario/display_user.php")
        .success(function(data) {
            $scope.names = data;
        });
    }
    $scope.update_data = function(id, login, usuario, senha, selecionar, status) {
         
         

        $scope.id = id;
        $scope.login = login;
        $scope.usuario = usuario;
        $scope.senha = senha;
        $scope.selecionar = selecionar;
        $scope.status = status;
        $scope.btnName = "Atualizar";
    }
    $scope.delete_data = function(id) {
        if (confirm("Deseja realmente excluir este registro?")) {
            $http.post("../../pages/usuario/delete_user.php", {
                'id': id
            })
            .success(function(data) {
                alert(data);
                $scope.show_data();
            });
        } else {
            return false;
        }
    }

    $scope.fechar = function() {
        $scope.selecionar = null;   
        $scope.login = null; 
        $scope.usuario = null;
        $scope.senha = null;
        $scope.status = null;
        $scope.btnName = "Cadastrar";
    // $scope.cadastroForm.setPristine();
    $scope.show_data();

    $scope.cadastroForm.$setUntouched();
    $scope.cadastroForm.$setPristine();
};

$scope.ordenar = function(keyname){
    $scope.sortKey = keyname;
    $scope.reverse = !$scope.reverse;
};



});
