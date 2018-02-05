
<?php
$servername = "bauru";
$username = "monitoramento";
$password = "monitoramento";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    echo '<i class="fa fa-refresh fa-spin fa-lg fa-fw" style="color:red;">';
    echo '</i>';

    echo '<span class="sr-only">';
    echo "Loading...";
    echo '</span>';
    echo '<span style="font-size:14px;">';
    echo "Não foi possível estabelecer uma conexão com o banco de dados!";
    echo '</span>';
}


$sql = "SELECT table_schema, sum(data_length + index_length) /1024 /1024 as Total
FROM information_schema.TABLES GROUP BY table_schema";
$result = $conn->query($sql);


// echo '<table class="table table-responsive table-bordered table-condensed  table-hover" >';
// echo '<thead class="" >';
// echo '<tr style="background-color:purple; height: 60px; color:white; ">';
// echo '<th style="font-color:black;">';
//
// echo 'Base';
// echo '</th>';
// echo '<th>';
// echo 'Tamanho';
// echo '</th>';
// echo '</tr>';
// echo '</thead>';
// echo '<tbody>';


if ($result->num_rows > 0) {
    
    
        echo '<div class="card table-responsive">';
        echo '<table class="table table-bordered table-condensed table-responsive table-striped" >';
        echo '<thead class="" >';
        echo '<tr style="background-color:#343A40;color:white; ">';
        echo '<th scope="row" style="font-size:12px; border:2px solid #343A40; " >';

        echo 'Database';
        echo '</th>';
        echo '<th style="font-size:12px; border:2px solid #343A40;">';
        echo 'Tamanho';
        echo '</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';


    while ($row = $result->fetch_assoc()) {
        // echo "Base: " . $row["table_schema"] . "- Tamanho: " . number_format($row["Total"], 2, ',', '.') . "MB" ."<br>";

        echo '<tr>';
        // echo '<th scope="row">';
        //   echo $qtd;
        // echo '</th>';
        echo '<td>';
        echo '<i class="fa fa-database" aria-hidden="true">';
        echo '<label for="" style="margin-left:5px; color:grey; font-size:12px;">';
        echo $row['table_schema'];
        echo '</label>';
        echo '</i>';
        echo '</td>';
        echo '<td style="color:grey; font-size:12px;">';
        echo number_format($row["Total"], 2, ',', '.') . " MB";
        echo '</td>';


        // <!-- echo $consulta['datname'];
        //
        // echo  $consulta['pg_size_pretty']; -->
        //
        $qtd6++;
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '</div>';


    $conn->close();
}
