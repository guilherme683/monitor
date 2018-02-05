<?php
if (!@($conexao = pg_connect("host=localhost dbname=postgres port=5432 user=postgres password=postgres"))) {
    echo '<i class="fa fa-refresh fa-spin fa-lg fa-fw" style="color:red;">';
    echo '</i>';

    echo '<span class="sr-only">';
    echo "Loading...";
    echo '</span>';
    print "Não foi possível estabelecer uma conexão com o banco de dados....";
    // print "Não foi possível estabelecer uma conexão com o banco de dados.";
} else {
    $query = "SELECT datname,pg_size_pretty(pg_database_size(datname)) FROM pg_database ORDER BY pg_database_size(pg_database.datname) DESC,
pg_database.datname;";

    $result = pg_query($conexao, $query);


    echo ' <div class="col-md-12">';
    echo '<div class="card">';
        echo ' <div class="card-content table-responsive">';
        echo '<table class="table table-bordered">';
        echo '<thead class="" >';
        echo '<tr style="background-color:purple; height: 60px; color:white; ">';
        echo '<th style="font-color:black;">';

        echo 'Base';
        echo '</th>';
        echo '<th>';
        echo 'Tamanho';
        echo '</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

    /* Retonar um array associativo correspondente a cada linha da tabela */
    while ($consulta = pg_fetch_assoc($result)) {

  // echo '<div class="col-xs-12 col-md-2">';
        // echo '<i class="fa fa-database text-center" aria-hidden="true">';
        // echo '<p class="text-center" style="font-size:22px;">';
        // echo $consulta['datname'];
        // echo '</p>';
        // echo '</i>';
        // echo '<p class="text-center" style="font-size:22px;">';
        // echo $consulta['pg_size_pretty'];
        // echo '</p>';
        // echo '</div>';



        echo '<tr>';
        // echo '<th scope="row">';
        //   echo $qtd;
        // echo '</th>';
        echo '<td>';
        echo '<i class="fa fa-database" aria-hidden="true" >';
        echo '<label for="" style="margin-left:5px; color:grey;">';
        echo $consulta['datname'];
        echo '</label>';
        echo '</i>';
        echo '</td>';
        echo '<td>';
        echo $consulta['pg_size_pretty'];
        echo '</td>';


        // <!-- echo $consulta['datname'];
        //
        // echo  $consulta['pg_size_pretty']; -->
        //
        $qtd8++;
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    pg_close($conexao);
}
