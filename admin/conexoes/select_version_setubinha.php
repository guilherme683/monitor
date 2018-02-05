
<?php
$servername = "setubinha";
$username = "monitoramento";
$password = "monitoramento";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    // die("Erro na conexão: " . $conn->connect_error);
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
}

$sql = "select version()";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {
      echo  "Versao: ".$row['version()'];
    }

    // // $status_aguasmornas = 'Ok';
    // echo '<p class="text-center">'; 
    // echo '<i class="fa fa-circle-o-notch fa-spin fa-lg fa-fw text-center" style="color:green;">';
    // echo '</i>';
    // echo '<span class="sr-only">';
    // echo "Loading...";
    // echo '</span>';
    // echo "Conectado";
    // echo '</p>';
    $conn->close();
}
