<?php
if (!@($conexao = pg_connect("host=guapo dbname=postgres port=5432 user=jose.guilherme password=familia"))) {
    // print "Não foi possível estabelecer uma conexão com o banco de dados.";
    echo '<p class="text-center">'; 
    echo '<i class="fa fa-refresh fa-spin fa-lg fa-fw text-center" style="color:red;">';
    echo '</i>';
    echo '<span class="sr-only">';
    echo "Loading...";
    echo '</span>';
    echo "Sem conexão...";
    echo '</p>';
} else {
    $query = "select datname from pg_database";

    $result = pg_query($conexao, $query);

    /* Retonar um array associativo correspondente a cada linha da tabela */
    while ($consulta = pg_fetch_assoc($result)) {

 // echo "Banco: ".$consulta['datname'];
        $qtd8++;
    }

    // $status_boavista = 'Ok';
    echo '<p class="text-center">'; 
    echo '<i class="fa fa-circle-o-notch fa-spin fa-lg fa-fw text-center" style="color:white;">';
    echo '</i>';
    echo '<span class="sr-only">';
    echo "Loading...";
    echo '</span>';
    echo "Conectado";
    echo '</p>';
    pg_close($conexao);
}
