
<?php
$servername = "bauru";
$username = "monitoramento";
$password = "monitoramento";
$dbname = "mysql";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
    // die("Erro na conexão: " . $conn->connect_error);

    echo '<p class="text-center">'; 
    echo '<i class="fa fa-refresh fa-spin fa-lg fa-fw text-center" style="color:red;">';
    echo '</i>';
    echo '<span class="sr-only">';
    echo "Loading...";
    echo '</span>';
    echo "Sem conexão...";
    echo '</p>';
}

$sql = "SELECT table_schema FROM information_schema.TABLES GROUP BY table_schema";
$result = $mysqli->query($sql);



if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {
        $qtd6++;
    }
    // $status_bauru = 'Ok';
    echo '<p class="text-center">'; 
    echo '<i class="fa fa-circle-o-notch fa-spin fa-lg fa-fw text-center" style="color:white;">';
    echo '</i>';
    echo '<span class="sr-only">';
    echo "Loading...";
    echo '</span>';
    echo "Conectado";
    echo '</p>';
    $mysqli->close();
}

?>
