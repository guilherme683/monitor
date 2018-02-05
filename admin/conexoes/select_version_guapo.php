<?php
if (!@($conexao = pg_connect("host=guapo dbname=postgres port=5432 user=jose.guilherme password=familia"))) {
    // print "Não foi possível estabelecer uma conexão com o banco de dados.";
    echo '<p class="text-center">'; 
    echo '<i class="fa fa-refresh fa-spin fa-lg fa-fw text-center" style="color:red;">';
    echo '</i>';
    echo '<span class="sr-only" ">';
    echo "Loading...";
    echo '</span>';
    echo '<label style="color:grey;">';
    echo "Sem conexão...";
    echo '</label>';
    echo '</p>';
} else {
    $query = "select version()";

    $result = pg_query($conexao, $query);

    /* Retonar um array associativo correspondente a cada linha da tabela */
    while ($consulta = pg_fetch_assoc($result)) {

 echo "Versao: ".$consulta['version'];
       
    }

    // // $status_boavista = 'Ok';
    // echo '<p class="text-center">'; 
    // echo '<i class="fa fa-circle-o-notch fa-spin fa-lg fa-fw text-center" style="color:green;">';
    // echo '</i>';
    // echo '<span class="sr-only">';
    // echo "Loading...";
    // echo '</span>';
    // echo "Conectado";
    // echo '</p>';
    pg_close($conexao);
}
