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
                    "insert_sistema.php", {
                        'selecionar':$scope.selecionar,
                        'nome_servidor': $scope.nome_servidor,
                        'nome_banco': $scope.nome_banco,
                        'esquema': $scope.esquema,
                        'usuario_sistema': $scope.usuario_sistema,
                        'senha': $scope.senha,
                        'descricao': $scope.descricao,
                        'solicitante': $scope.solicitante,
                        'setor': $scope.setor,
                        'ramal': $scope.ramal,
                        'email': $scope.email,
                        'data': $scope.data,
                        'btnName': $scope.btnName,
                        'cod_usuario_sistema': $scope.cod_usuario_sistema
                    }
                    ).success(function(data) {
                        alert(data);
                        $scope.selecionar = null;
                        $scope.nome_servidor = null;
                        $scope.nome_banco = null;
                        $scope.esquema = null;
                        $scope.usuario_sistema = null;
                        $scope.senha = null;
                        $scope.descricao = null;
                        $scope.solicitante = null;
                        $scope.setor = null;
                        $scope.ramal = null;
                        $scope.email = null;
                        $scope.data = null;
                        $scope.btnName = "Cadastrar";
                        $scope.show_data();
                        $scope.cadastroForm.$setUntouched();
                        $scope.cadastroForm.$setPristine();
                    });
        // }
    }
    $scope.show_data = function() {
        $http.get("display_sistema.php")
        .success(function(data) {
            $scope.names = data;
        });
    }
    $scope.update_data = function(cod_usuario_sistema, selecionar, nome_servidor, nome_banco, esquema, usuario_sistema, senha, descricao, solicitante, setor, ramal, email, data ) {
        $scope.cod_usuario_sistema = cod_usuario_sistema;
        $scope.selecionar = selecionar;
        $scope.nome_servidor = nome_servidor;
        $scope.nome_banco = nome_banco;
        $scope.esquema = esquema;
        $scope.usuario_sistema = usuario_sistema;
        $scope.senha = senha;
        $scope.descricao = descricao;
        $scope.solicitante = solicitante;
        $scope.setor = setor;
        $scope.ramal = ramal;
        $scope.email = email;
        $scope.data = data;
        $scope.btnName = "Atualizar";
    }
    $scope.delete_data = function(cod_usuario_sistema) {
        if (confirm("Deseja realmente excluir este registro?")) {
            $http.post("delete_sistema.php", {
                'cod_usuario_sistema': cod_usuario_sistema
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
        $scope.nome_servidor = null;
        $scope.nome_banco = null;
        $scope.esquema = null;
        $scope.usuario_sistema = null;
        $scope.senha = null;
        $scope.descricao = null;
        $scope.solicitante = null;
        $scope.setor = null;
        $scope.ramal = null;
        $scope.email = null;
        $scope.data = null;
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
