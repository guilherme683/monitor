var app = angular.module("sa_app", ['angularUtils.directives.dirPagination']);
app.controller("controller", function($scope, $http) {

    $scope.sgdbs = ["Postgresql", "Mysql", "SqlServer"];


    $scope.btnName = "Cadastrar";
    $scope.insert = function() {

        // if ($scope.acao == null) {
        //     alert("Favor preencher o campo ação!");
        //     addEventListener
        // } else if ($scope.comando == null) {
        //     alert("Favor preencher o campo comando!");
        // } 
            //  else {
            $http.post(
                "../../insert.php", {
                    'acao': $scope.acao,
                    'comando': $scope.comando,
                    'selecionar':$scope.selecionar,
                    'btnName': $scope.btnName,
                    'id': $scope.id
                }
            ).success(function(data) {
                alert(data);
                $scope.acao = null;
                $scope.comando = null;
                $scope.selecionar = null;
                $scope.btnName = "Cadastrar";
                $scope.show_data();
                $scope.cadastroForm.$setUntouched();
                $scope.cadastroForm.$setPristine();
            });
        // }
    }
    $scope.show_data = function() {
        $http.get("../../display.php")
            .success(function(data) {
                $scope.names = data;
            });
    }
    $scope.update_data = function(id, acao, comando, selecionar) {
        $scope.id = id;
        $scope.acao = acao;
        $scope.selecionar = selecionar;
        $scope.comando = comando;
        $scope.btnName = "Atualizar";
    }
    $scope.delete_data = function(id) {
        if (confirm("Deseja realmente excluir este registro?")) {
            $http.post("../../delete.php", {
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
    $scope.acao = null;
    $scope.comando = null;
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
