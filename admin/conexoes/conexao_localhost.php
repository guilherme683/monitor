<?php
if (!@($conexao = pg_connect("host=localhost dbname=postgres port=5432 user=postgres password=postgres"))) {
    // print "Não foi possível estabelecer uma conexão com o banco de dados.";
    echo '<i class="fa fa-refresh fa-spin fa-lg fa-fw" style="color:red;">';
    echo '</i>';

    echo '<span class="sr-only">';
    echo "Loading...";
    echo '</span>';
    print "Sem conexão...";
} else {
    $query = "select datname from pg_database where datname not in ('template0','template1') order by 1";

    $result = pg_query($conexao, $query);

    /* Retonar um array associativo correspondente a cada linha da tabela */
    while ($consulta = pg_fetch_assoc($result)) {

 // echo "Banco: ".$consulta['datname'];
        $qtd8++;
    }

    $status_localhost= 'Ok';
    pg_close($conexao);
}
